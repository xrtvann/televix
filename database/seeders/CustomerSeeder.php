<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Budi Santoso',
                'phone' => '081234567890',
                'email' => 'budi.santoso@email.com',
                'address' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'notes' => 'Pelanggan reguler, suka servis laptop gaming',
                'total_services' => 5,
                'last_service_at' => now()->subDays(15),
            ],
            [
                'name' => 'Siti Aminah',
                'phone' => '082345678901',
                'email' => 'siti.aminah@gmail.com',
                'address' => 'Jl. Gatot Subroto No. 45, Jakarta Selatan',
                'notes' => null,
                'total_services' => 2,
                'last_service_at' => now()->subDays(30),
            ],
            [
                'name' => 'Ahmad Wijaya',
                'phone' => '083456789012',
                'email' => null,
                'address' => 'Jl. Thamrin No. 67, Jakarta Pusat',
                'notes' => 'Biasanya servis HP dan tablet',
                'total_services' => 8,
                'last_service_at' => now()->subDays(5),
            ],
            [
                'name' => 'Rina Kusuma',
                'phone' => '084567890123',
                'email' => 'rina.k@yahoo.com',
                'address' => 'Jl. Kuningan No. 89, Jakarta Selatan',
                'notes' => null,
                'total_services' => 1,
                'last_service_at' => now()->subMonths(2),
            ],
            [
                'name' => 'Dedi Firmansyah',
                'phone' => '085678901234',
                'email' => 'dedi.f@email.com',
                'address' => 'Jl. Pancoran No. 12, Jakarta Selatan',
                'notes' => 'Sering servis komputer kantor',
                'total_services' => 12,
                'last_service_at' => now()->subDays(3),
            ],
            [
                'name' => 'Maya Anggraini',
                'phone' => '086789012345',
                'email' => 'maya.anggraini@gmail.com',
                'address' => 'Jl. Senopati No. 34, Jakarta Selatan',
                'notes' => null,
                'total_services' => 0,
                'last_service_at' => null,
            ],
            [
                'name' => 'Rizky Pratama',
                'phone' => '087890123456',
                'email' => 'rizky.p@email.com',
                'address' => 'Jl. Tebet No. 56, Jakarta Selatan',
                'notes' => 'Pelanggan baru, servis laptop pertama kali',
                'total_services' => 1,
                'last_service_at' => now()->subDays(1),
            ],
            [
                'name' => 'Linda Hartati',
                'phone' => '088901234567',
                'email' => null,
                'address' => 'Jl. Kemang No. 78, Jakarta Selatan',
                'notes' => null,
                'total_services' => 3,
                'last_service_at' => now()->subWeeks(2),
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
