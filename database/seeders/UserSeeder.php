<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@televix.com',
            'password' => bcrypt('password'),
            'phone' => '081234567890',
            'is_active' => true,
        ]);
        $superAdmin->assignRole('super_admin');

        // Admin
        $admin = User::create([
            'name' => 'Andi Pratama',
            'email' => 'admin@televix.com',
            'password' => bcrypt('password'),
            'phone' => '081234567891',
            'is_active' => true,
        ]);
        $admin->assignRole('admin');

        // Teknisi 1
        $teknisi1 = User::create([
            'name' => 'Dedi Kurniawan',
            'email' => 'dedi@televix.com',
            'password' => bcrypt('password'),
            'phone' => '081234567892',
            'is_active' => true,
        ]);
        $teknisi1->assignRole('teknisi');

        // Teknisi 2
        $teknisi2 = User::create([
            'name' => 'Rudi Hartono',
            'email' => 'rudi@televix.com',
            'password' => bcrypt('password'),
            'phone' => '081234567893',
            'is_active' => true,
        ]);
        $teknisi2->assignRole('teknisi');

        // Kasir
        $kasir = User::create([
            'name' => 'Siti Aminah',
            'email' => 'kasir@televix.com',
            'password' => bcrypt('password'),
            'phone' => '081234567894',
            'is_active' => true,
        ]);
        $kasir->assignRole('kasir');

        $this->command->info('✓ Users seeded successfully!');
        $this->command->newLine();
        $this->command->info('Login credentials:');
        $this->command->info('Super Admin: superadmin@televix.com / password');
        $this->command->info('Admin: admin@televix.com / password');
        $this->command->info('Teknisi: dedi@televix.com / password');
        $this->command->info('Kasir: kasir@televix.com / password');
    }
}
