<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->latest()->paginate(10);
        $roles = Role::all();

        // Get statistics
        $totalUsers = User::count();
        $activeUsers = User::where('is_active', true)->count();
        $superAdmins = User::whereHas('roles', function ($q) {
            $q->where('name', 'super_admin');
        })->count();

        return view('pages.admin.manajemen-staff-rbac', compact('users', 'roles', 'totalUsers', 'activeUsers', 'superAdmins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string|max:20',
            'role_id' => 'required|exists:roles,id',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'role_id.required' => 'Role wajib dipilih',
            'role_id.exists' => 'Role tidak valid',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'] ?? null,
            'is_active' => $request->boolean('is_active', true),
        ]);

        // Assign role
        $role = Role::findOrFail($validated['role_id']);
        $user->assignRole($role);

        // Log activity
        ActivityLog::log('user_created', $user, ['created_by' => Auth::user()->name]);

        return redirect()->route('manajemen-staff-rbac.index')
            ->with('success', "User {$user->name} berhasil ditambahkan!");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:6',
            'phone' => 'nullable|string|max:20',
            'role_id' => 'required|exists:roles,id',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan user lain',
            'password.min' => 'Password minimal 6 karakter',
            'role_id.required' => 'Role wajib dipilih',
        ]);

        // Update user data
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'is_active' => $request->boolean('is_active'),
        ]);

        // Update password if provided
        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($validated['password'])]);
        }

        // Update role
        $user->roles()->sync([]);
        $role = Role::findOrFail($validated['role_id']);
        $user->assignRole($role);

        // Log activity
        ActivityLog::log('user_updated', $user, ['updated_by' => Auth::user()->name]);

        return redirect()->route('manajemen-staff-rbac.index')
            ->with('success', "User {$user->name} berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Prevent deleting own account
        if ($user->id === Auth::id()) {
            return redirect()->route('manajemen-staff-rbac.index')
                ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri!');
        }

        $userName = $user->name;
        $userId = $user->id;

        // Log activity before deleting
        ActivityLog::log('user_deleted', $user, ['deleted_by' => Auth::user()->name]);
        $user->delete();

        return redirect()->route('manajemen-staff-rbac.index')
            ->with('success', "User {$userName} berhasil dihapus!");
    }

    /**
     * Toggle user active status
     */
    public function toggleStatus(User $user)
    {
        $user->update(['is_active' => !$user->is_active]);

        $status = $user->is_active ? 'diaktifkan' : 'dinonaktifkan';
        ActivityLog::log('user_status_changed', $user, ['status' => $status, 'changed_by' => Auth::user()->name]);

        return redirect()->route('manajemen-staff-rbac.index')
            ->with('success', "Status user {$user->name} berhasil diubah!");
    }
}
