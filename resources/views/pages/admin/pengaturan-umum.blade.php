<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
            {{-- Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Pengaturan Umum</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Kelola konfigurasi sistem dan preferensi
                        aplikasi</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">restart_alt</span>
                        Reset Default
                    </button>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">save</span>
                        Simpan Perubahan
                    </button>
                </div>
            </div>

            {{-- Tabs Navigation --}}
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-x-auto">
                <div class="flex border-b border-slate-200 dark:border-gray-800">
                    <button
                        class="px-6 py-3 text-sm font-semibold border-b-2 border-primary text-primary transition-colors whitespace-nowrap">
                        Profil Bisnis
                    </button>
                    <button
                        class="px-6 py-3 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white border-b-2 border-transparent hover:border-slate-300 transition-colors whitespace-nowrap">
                        Notifikasi
                    </button>
                    <button
                        class="px-6 py-3 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white border-b-2 border-transparent hover:border-slate-300 transition-colors whitespace-nowrap">
                        Tampilan
                    </button>
                    <button
                        class="px-6 py-3 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white border-b-2 border-transparent hover:border-slate-300 transition-colors whitespace-nowrap">
                        Integrasi
                    </button>
                    <button
                        class="px-6 py-3 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white border-b-2 border-transparent hover:border-slate-300 transition-colors whitespace-nowrap">
                        Backup & Data
                    </button>
                </div>
            </div>

            {{-- Profil Bisnis --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Informasi Bisnis --}}
                <div class="lg:col-span-2 space-y-6">
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Informasi Bisnis</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mb-6">Detail informasi tentang bisnis Anda
                        </p>
                        <div class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        Nama Bisnis <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" value="Televix Service Center"
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="Nama bisnis Anda" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        Jenis Bisnis
                                    </label>
                                    <select
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                        <option>Service Center TV</option>
                                        <option>Elektronik Umum</option>
                                        <option>Audio Video</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                    Email Bisnis <span class="text-red-500">*</span>
                                </label>
                                <input type="email" value="contact@televix.com"
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    placeholder="email@bisnis.com" />
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        Nomor Telepon <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" value="(022) 7123-4567"
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="(000) 0000-0000" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        WhatsApp
                                    </label>
                                    <input type="tel" value="0812-3456-7890"
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="0812-xxxx-xxxx" />
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                    Alamat Lengkap <span class="text-red-500">*</span>
                                </label>
                                <textarea rows="3"
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all resize-none"
                                    placeholder="Alamat lengkap bisnis Anda">Jl. Soekarno Hatta No. 456, Bandung, Jawa Barat 40286</textarea>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        Kota
                                    </label>
                                    <input type="text" value="Bandung"
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="Nama kota" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                        Kode Pos
                                    </label>
                                    <input type="text" value="40286"
                                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        placeholder="00000" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Jam Operasional --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Jam Operasional</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mb-6">Atur jam buka dan tutup layanan Anda
                        </p>
                        <div class="space-y-3">
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Senin</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="17:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Selasa</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="17:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Rabu</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="17:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Kamis</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="17:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Jumat</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="17:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" checked
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300 w-20">Sabtu</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" value="08:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-slate-400">-</span>
                                    <input type="time" value="13:00"
                                        class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50" />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox"
                                        class="size-4 rounded border-slate-300 text-primary focus:ring-2 focus:ring-primary/50" />
                                    <span class="text-sm font-medium text-slate-400 w-20">Minggu</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-sm text-red-600 dark:text-red-400 font-medium">Tutup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar Settings --}}
                <div class="space-y-6">
                    {{-- Logo Bisnis --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Logo Bisnis</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mb-4">Format: JPG, PNG (Max: 2MB)</p>
                        <div
                            class="border-2 border-dashed border-slate-200 dark:border-gray-700 rounded-lg p-6 text-center hover:border-primary transition-colors cursor-pointer">
                            <div
                                class="size-20 mx-auto mb-3 bg-primary/10 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-3xl text-primary">connected_tv</span>
                            </div>
                            <p class="text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Upload Logo</p>
                            <p class="text-xs text-slate-500">Klik atau drag & drop</p>
                        </div>
                        <button
                            class="w-full mt-4 px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                            Hapus Logo
                        </button>
                    </div>

                    {{-- Preferensi Sistem --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Preferensi Sistem</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mb-5">Pengaturan umum aplikasi</p>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                    Zona Waktu
                                </label>
                                <select
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                    <option>WIB - Jakarta (GMT+7)</option>
                                    <option>WITA - Makassar (GMT+8)</option>
                                    <option>WIT - Jayapura (GMT+9)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                    Format Tanggal
                                </label>
                                <select
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                    <option>DD/MM/YYYY</option>
                                    <option>MM/DD/YYYY</option>
                                    <option>YYYY-MM-DD</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                                    Mata Uang
                                </label>
                                <select
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                    <option>IDR - Rupiah (Rp)</option>
                                    <option>USD - Dollar ($)</option>
                                    <option>EUR - Euro (€)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Quick Actions --}}
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100/50 dark:from-blue-900/20 dark:to-blue-900/10 rounded-xl border border-blue-200 dark:border-blue-800 p-5">
                        <h4 class="text-sm font-bold text-blue-900 dark:text-blue-100 mb-3">Quick Actions</h4>
                        <div class="space-y-2">
                            <button
                                class="w-full px-3 py-2 rounded-lg bg-white dark:bg-gray-800 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">file_download</span>
                                Export Konfigurasi
                            </button>
                            <button
                                class="w-full px-3 py-2 rounded-lg bg-white dark:bg-gray-800 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">file_upload</span>
                                Import Konfigurasi
                            </button>
                            <button
                                class="w-full px-3 py-2 rounded-lg bg-white dark:bg-gray-800 text-sm font-medium text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                Hapus Semua Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pengaturan Tambahan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Notifikasi Email --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Email & SMS</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-5">Konfigurasi pengiriman notifikasi</p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Notifikasi Order Baru
                                </p>
                                <p class="text-xs text-slate-500 mt-0.5">Kirim email saat ada order masuk</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Update Status</p>
                                <p class="text-xs text-slate-500 mt-0.5">Notifikasi perubahan status order</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Reminder Pembayaran
                                </p>
                                <p class="text-xs text-slate-500 mt-0.5">SMS untuk invoice jatuh tempo</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Keamanan --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">Keamanan</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-5">Pengaturan keamanan sistem</p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Two-Factor
                                    Authentication</p>
                                <p class="text-xs text-slate-500 mt-0.5">Aktifkan 2FA untuk keamanan ekstra</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Auto Logout</p>
                                <p class="text-xs text-slate-500 mt-0.5">Logout otomatis setelah 30 menit</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Log Aktivitas</p>
                                <p class="text-xs text-slate-500 mt-0.5">Catat semua aktivitas pengguna</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer" />
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
