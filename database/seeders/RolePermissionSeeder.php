<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Roles
        $superAdmin = Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Administrator',
            'description' => 'Full access to all features'
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Manage operations and reports'
        ]);

        $teknisi = Role::create([
            'name' => 'teknisi',
            'display_name' => 'Teknisi',
            'description' => 'Handle service orders'
        ]);

        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'Kasir',
            'description' => 'Handle payments and customers'
        ]);

        // Define Permissions
        $permissions = [
            // Dashboard
            ['name' => 'view_dashboard', 'display_name' => 'View Dashboard', 'module' => 'dashboard', 'description' => null],

            // Customer Management
            ['name' => 'view_customers', 'display_name' => 'View Customers', 'module' => 'customers', 'description' => null],
            ['name' => 'create_customers', 'display_name' => 'Create Customer', 'module' => 'customers', 'description' => null],
            ['name' => 'edit_customers', 'display_name' => 'Edit Customer', 'module' => 'customers', 'description' => null],
            ['name' => 'delete_customers', 'display_name' => 'Delete Customer', 'module' => 'customers', 'description' => null],

            // Service Orders
            ['name' => 'view_orders', 'display_name' => 'View Service Orders', 'module' => 'orders', 'description' => null],
            ['name' => 'create_orders', 'display_name' => 'Create Service Order', 'module' => 'orders', 'description' => null],
            ['name' => 'edit_orders', 'display_name' => 'Edit Service Order', 'module' => 'orders', 'description' => null],
            ['name' => 'delete_orders', 'display_name' => 'Delete Service Order', 'module' => 'orders', 'description' => null],
            ['name' => 'assign_technician', 'display_name' => 'Assign Technician', 'module' => 'orders', 'description' => null],
            ['name' => 'update_order_status', 'display_name' => 'Update Order Status', 'module' => 'orders', 'description' => null],

            // Payments
            ['name' => 'view_payments', 'display_name' => 'View Payments', 'module' => 'payments', 'description' => null],
            ['name' => 'create_payments', 'display_name' => 'Create Payment', 'module' => 'payments', 'description' => null],
            ['name' => 'edit_payments', 'display_name' => 'Edit Payment', 'module' => 'payments', 'description' => null],
            ['name' => 'delete_payments', 'display_name' => 'Delete Payment', 'module' => 'payments', 'description' => null],

            // Inventory
            ['name' => 'view_inventory', 'display_name' => 'View Inventory', 'module' => 'inventory', 'description' => null],
            ['name' => 'create_parts', 'display_name' => 'Create Spare Part', 'module' => 'inventory', 'description' => null],
            ['name' => 'edit_parts', 'display_name' => 'Edit Spare Part', 'module' => 'inventory', 'description' => null],
            ['name' => 'delete_parts', 'display_name' => 'Delete Spare Part', 'module' => 'inventory', 'description' => null],
            ['name' => 'adjust_stock', 'display_name' => 'Adjust Stock', 'module' => 'inventory', 'description' => null],

            // Expenses
            ['name' => 'view_expenses', 'display_name' => 'View Expenses', 'module' => 'expenses', 'description' => null],
            ['name' => 'create_expenses', 'display_name' => 'Create Expense', 'module' => 'expenses', 'description' => null],
            ['name' => 'edit_expenses', 'display_name' => 'Edit Expense', 'module' => 'expenses', 'description' => null],
            ['name' => 'delete_expenses', 'display_name' => 'Delete Expense', 'module' => 'expenses', 'description' => null],
            ['name' => 'approve_expenses', 'display_name' => 'Approve Expenses', 'module' => 'expenses', 'description' => null],

            // Reports
            ['name' => 'view_reports', 'display_name' => 'View Reports', 'module' => 'reports', 'description' => null],
            ['name' => 'export_reports', 'display_name' => 'Export Reports', 'module' => 'reports', 'description' => null],

            // Settings
            ['name' => 'view_settings', 'display_name' => 'View Settings', 'module' => 'settings', 'description' => null],
            ['name' => 'edit_settings', 'display_name' => 'Edit Settings', 'module' => 'settings', 'description' => null],

            // User Management
            ['name' => 'view_users', 'display_name' => 'View Users', 'module' => 'users', 'description' => null],
            ['name' => 'create_users', 'display_name' => 'Create User', 'module' => 'users', 'description' => null],
            ['name' => 'edit_users', 'display_name' => 'Edit User', 'module' => 'users', 'description' => null],
            ['name' => 'delete_users', 'display_name' => 'Delete User', 'module' => 'users', 'description' => null],

            // Role & Permission Management
            ['name' => 'view_roles', 'display_name' => 'View Roles', 'module' => 'roles', 'description' => null],
            ['name' => 'create_roles', 'display_name' => 'Create Role', 'module' => 'roles', 'description' => null],
            ['name' => 'edit_roles', 'display_name' => 'Edit Role', 'module' => 'roles', 'description' => null],
            ['name' => 'delete_roles', 'display_name' => 'Delete Role', 'module' => 'roles', 'description' => null],
            ['name' => 'assign_permissions', 'display_name' => 'Assign Permissions', 'module' => 'roles', 'description' => null],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        // Assign all permissions to Super Admin
        $superAdmin->permissions()->attach(Permission::all());

        // Admin permissions (all except user & role management)
        $adminPermissions = Permission::whereNotIn('module', ['users', 'roles'])->get();
        $admin->permissions()->attach($adminPermissions);

        // Teknisi permissions
        $teknisiPermissions = Permission::whereIn('name', [
            'view_dashboard',
            'view_customers',
            'view_orders',
            'edit_orders',
            'update_order_status',
            'view_inventory',
        ])->get();
        $teknisi->permissions()->attach($teknisiPermissions);

        // Kasir permissions
        $kasirPermissions = Permission::whereIn('name', [
            'view_dashboard',
            'view_customers',
            'create_customers',
            'edit_customers',
            'view_orders',
            'create_orders',
            'view_payments',
            'create_payments',
            'edit_payments',
        ])->get();
        $kasir->permissions()->attach($kasirPermissions);

        $this->command->info('✓ Roles and Permissions seeded successfully!');
    }
}
