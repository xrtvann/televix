<?php

namespace Database\Seeders;

use App\Models\ServiceOrder;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ServiceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $technicians = User::whereHas('roles', function ($q) {
            $q->where('name', 'teknisi');
        })->pluck('id')->toArray();

        // Device types and brands
        $deviceTypes = ['TV LED', 'Smart TV', 'TV Tabung', 'TV OLED', 'TV QLED', 'Kulkas', 'AC', 'Mesin Cuci'];
        $tvBrands = ['Samsung', 'LG', 'Sony', 'Polytron', 'Sharp', 'Toshiba', 'Panasonic', 'TCL', 'Xiaomi'];
        $acBrands = ['Daikin', 'LG', 'Sharp', 'Panasonic', 'Samsung', 'Polytron', 'Gree'];
        $kulkasBrands = ['Sharp', 'LG', 'Samsung', 'Polytron', 'Panasonic', 'Toshiba'];
        $mesinCuciBrands = ['LG', 'Samsung', 'Sharp', 'Polytron', 'Electrolux', 'Panasonic'];

        $statuses = ['baru', 'diagnosa', 'pengerjaan', 'menunggu', 'selesai', 'batal'];

        $problems = [
            'TV LED' => [
                'Mati total',
                'Layar berkedip-kedip',
                'Tidak ada gambar, suara ada',
                'Gambar bergaris horizontal',
                'Gambar bergaris vertikal',
                'Tidak bisa menyala',
                'Layar redup',
                'Warna tidak normal',
                'HDMI tidak berfungsi',
                'Suara tidak keluar',
            ],
            'Smart TV' => [
                'Tidak bisa connect WiFi',
                'Aplikasi crash terus',
                'Layar bergaris',
                'Remote tidak responsif',
                'Hang saat dinyalakan',
                'YouTube tidak bisa dibuka',
                'Suara putus-putus',
            ],
            'Kulkas' => [
                'Tidak dingin',
                'Bunyi berisik',
                'Pintu tidak rapat',
                'Kompresor mati',
                'Lampu tidak menyala',
                'Bocor air',
            ],
            'AC' => [
                'Tidak dingin',
                'Kompresor tidak jalan',
                'Indoor bocor',
                'Remote tidak berfungsi',
                'Bunyi berisik',
                'Kurang dingin',
            ],
            'Mesin Cuci' => [
                'Tidak bisa berputar',
                'Tidak bisa menguras air',
                'Tabung tidak muter',
                'Bunyi berisik',
                'Bocor',
            ],
        ];

        // Generate 80 orders
        for ($i = 1; $i <= 80; $i++) {
            $deviceType = $faker->randomElement($deviceTypes);

            // Select brand based on device type
            $brand = '';
            if (str_contains($deviceType, 'TV')) {
                $brand = $faker->randomElement($tvBrands);
            } elseif ($deviceType === 'AC') {
                $brand = $faker->randomElement($acBrands);
            } elseif ($deviceType === 'Kulkas') {
                $brand = $faker->randomElement($kulkasBrands);
            } elseif ($deviceType === 'Mesin Cuci') {
                $brand = $faker->randomElement($mesinCuciBrands);
            }

            // Select problem based on device type
            $problemKey = str_contains($deviceType, 'TV') ? 'TV LED' : $deviceType;
            $problem = $faker->randomElement($problems[$problemKey] ?? ['Rusak']);

            $status = $faker->randomElement($statuses);
            $hasTechnician = in_array($status, ['diagnosa', 'pengerjaan', 'menunggu', 'selesai', 'batal']);
            $isCompleted = $status === 'selesai';
            $isCancelled = $status === 'batal';

            $daysAgo = $faker->numberBetween(0, 30);
            $receivedAt = now()->subDays($daysAgo);

            $estimatedCost = null;
            $finalCost = null;
            $completedAt = null;

            if ($hasTechnician) {
                $estimatedCost = $faker->randomElement([150000, 200000, 250000, 300000, 350000, 400000, 450000, 500000, 600000, 750000]);
            }

            if ($isCompleted) {
                $finalCost = $estimatedCost + $faker->randomElement([-50000, 0, 50000, 100000]);
                $completedAt = $receivedAt->copy()->addDays($faker->numberBetween(1, 7));
            }

            ServiceOrder::create([
                'order_number' => sprintf('TV-%s-%04d', now()->format('ym'), $i),
                'customer_name' => $faker->name(),
                'customer_phone' => $faker->phoneNumber(),
                'customer_address' => $faker->address(),
                'device_type' => $deviceType,
                'device_brand' => $brand,
                'device_model' => $faker->randomElement(['24 inch', '32 inch', '40 inch', '43 inch', '50 inch', '55 inch', '65 inch', '1 PK', '1.5 PK', '2 PK', '300L', '350L', '400L', '7kg', '8kg', '10kg']),
                'problem_description' => $problem . '. ' . $faker->sentence(),
                'technician_id' => $hasTechnician && !empty($technicians) ? $faker->randomElement($technicians) : null,
                'status' => $status,
                'estimated_cost' => $estimatedCost,
                'final_cost' => $finalCost,
                'notes' => $hasTechnician ? $faker->optional(0.5)->sentence() : null,
                'received_at' => $receivedAt,
                'completed_at' => $completedAt,
            ]);
        }

        $this->command->info('✓ 80 Service Orders seeded successfully!');
    }
}
