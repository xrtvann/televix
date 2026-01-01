# Setup Backend Manajemen Servis

Backend untuk menu Manajemen Servis telah dibuat! Berikut langkah-langkah untuk mengaktifkannya:

## 📦 File yang Dibuat:

### 1. Model

-   `app/Models/ServiceOrder.php` - Model untuk service orders dengan helper methods

### 2. Migration

-   `database/migrations/2026_01_01_000001_create_service_orders_table.php` - Database schema

### 3. Controller

-   `app/Http/Controllers/Admin/ServiceOrderController.php` - CRUD operations

### 4. Seeder

-   `database/seeders/ServiceOrderSeeder.php` - Sample data

### 5. Routes

-   Updated `routes/web.php` - RESTful routes untuk service orders

### 6. View

-   Updated `resources/views/pages/admin/manajemen-servis.blade.php` - Dynamic data rendering

## 🚀 Langkah Setup:

### 1. Jalankan Migration

```bash
php artisan migrate
```

### 2. Jalankan Seeder (Optional - untuk data sample)

```bash
php artisan db:seed --class=ServiceOrderSeeder
```

Atau tambahkan ke `DatabaseSeeder.php`:

```php
public function run(): void
{
    $this->call([
        RolePermissionSeeder::class,
        UserSeeder::class,
        ServiceOrderSeeder::class, // Tambahkan ini
    ]);
}
```

Lalu jalankan:

```bash
php artisan db:seed
```

## ✨ Fitur yang Tersedia:

### 1. **Index/List** (GET `/manajemen-servis`)

-   Menampilkan semua service orders dengan pagination
-   Filter by: status, teknisi, tanggal
-   Search by: order number, nama pelanggan, nomor telepon
-   Statistics: Total, New, In Progress, Completed

### 2. **Create** (POST `/manajemen-servis`)

-   Form untuk membuat order baru
-   Auto-generate order number (TV-YYMM-XXXX)
-   Assign teknisi (optional)

### 3. **Show/Detail** (GET `/manajemen-servis/{order}`)

-   Detail lengkap service order
-   Timeline status
-   History aktivitas

### 4. **Update** (PUT `/manajemen-servis/{order}`)

-   Edit informasi order
-   Update status
-   Set biaya estimasi dan final

### 5. **Delete** (DELETE `/manajemen-servis/{order}`)

-   Hapus service order
-   Activity logging

### 6. **Assign Technician** (PATCH `/manajemen-servis/{order}/assign-technician`)

-   Assign teknisi ke order
-   Auto update status ke "Diagnosa"

### 7. **Update Status** (PATCH `/manajemen-servis/{order}/update-status`)

-   Update status order
-   Auto set completed_at jika status "Selesai"

## 📊 Status Order:

-   `baru` - Baru Masuk (Grey)
-   `diagnosa` - Diagnosa (Blue)
-   `pengerjaan` - Sedang Dikerjakan (Yellow)
-   `menunggu` - Menunggu Sparepart (Orange)
-   `selesai` - Selesai (Green)
-   `batal` - Dibatalkan (Red)

## 🎨 Fitur UI:

-   ✅ Dynamic table dengan data dari database
-   ✅ Color-coded status badges
-   ✅ Pagination otomatis
-   ✅ Filter & search functionality
-   ✅ Dropdown actions menu
-   ✅ Activity logging
-   ✅ Dark mode support
-   ✅ Responsive design

## 🔐 Permissions:

Route manajemen servis dilindungi dengan permission `view_orders`.
Pastikan user memiliki permission yang sesuai untuk mengakses.

## 📝 Next Steps:

Untuk melengkapi fungsionalitas, Anda bisa:

1. Membuat modal form untuk Create Order
2. Membuat halaman detail order
3. Membuat modal untuk Assign Teknisi
4. Membuat modal untuk Update Status
5. Implement export CSV functionality
6. Membuat print invoice feature

Semua ready untuk digunakan! 🎉
