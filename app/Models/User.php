<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'is_active',
        'last_login_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_user')
            ->withTimestamps();
    }

    public function hasRole(string|array $roles): bool
    {
        if (is_array($roles)) {
            return $this->roles()->whereIn('name', $roles)->exists();
        }

        return $this->roles()->where('name', $roles)->exists();
    }

    public function hasPermission(string $permission): bool
    {
        // Ensure roles and permissions are loaded
        if (!$this->relationLoaded('roles')) {
            $this->loadMissing(['roles.permissions']);
        } elseif ($this->roles->isNotEmpty() && !$this->roles->first()->relationLoaded('permissions')) {
            $this->load('roles.permissions');
        }

        foreach ($this->roles as $role) {
            if ($role->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    public function assignRole(Role|string $role): void
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->firstOrFail();
        }

        $this->roles()->syncWithoutDetaching([$role->id]);
    }

    public function removeRole(Role|string $role): void
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->firstOrFail();
        }

        $this->roles()->detach($role->id);
    }

    public function getRoleNamesAttribute(): array
    {
        if (!$this->relationLoaded('roles')) {
            $this->loadMissing('roles');
        }

        return $this->roles->pluck('name')->toArray();
    }

    public function getPermissionsAttribute(): array
    {
        if (!$this->relationLoaded('roles')) {
            $this->loadMissing(['roles.permissions']);
        } elseif ($this->roles->isNotEmpty() && !$this->roles->first()->relationLoaded('permissions')) {
            $this->load('roles.permissions');
        }

        $permissions = [];

        foreach ($this->roles as $role) {
            $permissions = array_merge(
                $permissions,
                $role->permissions->pluck('name')->toArray()
            );
        }

        return array_unique($permissions);
    }

    public function updateLastLogin(): void
    {
        $this->update(['last_login_at' => now()]);
    }
}
