<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-[1400px] mx-auto flex flex-col gap-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex gap-2 items-center">
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Daftar Pelanggan</h1>
                    <span
                        class="px-2 py-0.5 rounded-full bg-slate-100 dark:bg-gray-800 text-slate-600 dark:text-slate-400 text-xs font-semibold">Total:
                        124</span>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button
                        class="flex-1 sm:flex-none bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">file_download</span>
                        <span class="hidden sm:inline">Export CSV</span>
                    </button>
                    <button
                        class="flex-1 sm:flex-none bg-primary hover:bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">person_add</span>
                        Tambah Pelanggan Baru
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] p-4 rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="relative col-span-1 lg:col-span-2">
                        <label class="block text-xs font-medium text-slate-500 mb-1">Pencarian</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-2 top-2 text-slate-400 text-[18px]">search</span>
                            <input
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                placeholder="Nama, Telepon, atau Email..." type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Urutkan Berdasarkan</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-2 top-2 text-slate-400 text-[18px]">sort</span>
                            <select
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="nama_asc">Nama (A-Z)</option>
                                <option value="nama_desc">Nama (Z-A)</option>
                                <option value="terbaru">Pelanggan Terbaru</option>
                                <option value="servis_terbanyak">Servis Terbanyak</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Status Servis</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-2 top-2 text-slate-400 text-[18px]">history</span>
                            <select
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua</option>
                                <option value="aktif">Sedang Servis</option>
                                <option value="selesai">Pernah Servis</option>
                                <option value="baru">Pelanggan Baru</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden flex-1">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Nama Pelanggan</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Kontak</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Alamat</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Riwayat Servis</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Terakhir Aktif</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider  whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 flex items-center justify-center font-bold text-xs">
                                            PH
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-900 dark:text-white hover:text-primary cursor-pointer">Pak
                                                Hendra</span>
                                            <span class="text-xs text-slate-500">ID: #CUST-089</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            0812-3456-7890
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            hendra.tv@gmail.com
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Jl.
                                            Kenari No. 12, Kel. Sukajadi, Bandung</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">3 Unit</span>
                                        <span
                                            class="px-1.5 py-0.5 rounded text-[10px] bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300 font-medium">1
                                            Sedang Servis</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">13 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-orange-100 dark:bg-orange-900 text-orange-600 dark:text-orange-300 flex items-center justify-center font-bold text-xs">
                                            AF
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-900 dark:text-white hover:text-primary cursor-pointer">Ahmad
                                                Fauzi</span>
                                            <span class="text-xs text-slate-500">ID: #CUST-102</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            0857-1122-3344
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            -
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span
                                            class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Komplek
                                            Griya Indah Blok B3, Cimahi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">5
                                            Unit</span>
                                        <span
                                            class="px-1.5 py-0.5 rounded text-[10px] bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 font-medium">Loyal
                                            Customer</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">12 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 flex items-center justify-center font-bold text-xs">
                                            SA
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-900 dark:text-white hover:text-primary cursor-pointer">Siti
                                                Aminah</span>
                                            <span class="text-xs text-slate-500">ID: #CUST-055</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            0813-9988-7766
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            siti.aminah88@yahoo.com
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Jl.
                                            Raya Cibabat No. 45, Cimahi Utara</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">1
                                            Unit</span>
                                        <span
                                            class="px-1.5 py-0.5 rounded text-[10px] bg-slate-100 text-slate-600 dark:bg-slate-700 dark:text-slate-300 font-medium">New</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">10 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-300 flex items-center justify-center font-bold text-xs">
                                            HM
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-900 dark:text-white hover:text-primary cursor-pointer">Hotel
                                                Merdeka</span>
                                            <span class="text-xs text-slate-500 flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[10px]">domain</span> Klien
                                                Korporat
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            022-420-5555
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            maintenance@hotelmerdeka.com
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Jl.
                                            Asia Afrika No. 100, Bandung</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">12
                                            Unit</span>
                                        <span
                                            class="px-1.5 py-0.5 rounded text-[10px] bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300 font-medium">VIP</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">08 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors bg-slate-50/50 dark:bg-gray-800/20">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-teal-100 dark:bg-teal-900 text-teal-600 dark:text-teal-300 flex items-center justify-center font-bold text-xs">
                                            DR
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary cursor-pointer">Dani
                                                Rosyid</span>
                                            <span class="text-xs text-slate-400">ID: #CUST-115</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            0819-2233-4455
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            dani.r@gmail.com
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Jl.
                                            Cihampelas Bawah No. 20, Bandung</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">2
                                            Unit</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">05 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors bg-slate-50/50 dark:bg-gray-800/20">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 flex items-center justify-center font-bold text-xs">
                                            RW
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary cursor-pointer">Rina
                                                Wati</span>
                                            <span class="text-xs text-slate-400">ID: #CUST-021</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col gap-0.5">
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                            0899-8877-6655
                                        </div>
                                        <div
                                            class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                            <span
                                                class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                            -
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-start gap-1.5 max-w-[200px]">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                        <span class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Komp.
                                            Buah Batu Regency A2, Bandung Kidul</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">4
                                            Unit</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">01 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Pelanggan">
                                            <span class="material-symbols-outlined text-[16px]">visibility</span>
                                            <span>Detail</span>
                                        </button>
                                        <div class="relative group/menu">
                                            <button
                                                class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                title="Menu Aksi">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                            <div
                                                class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                <div class="py-1">
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        <span>Edit Pelanggan</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">history</span>
                                                        <span>Riwayat Servis</span>
                                                    </button>
                                                    <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="p-4 border-t border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <span class="text-sm text-slate-500 dark:text-slate-400">
                        Menampilkan <span class="font-medium text-slate-900 dark:text-white">1</span> sampai <span
                            class="font-medium text-slate-900 dark:text-white">6</span> dari <span
                            class="font-medium text-slate-900 dark:text-white">124</span> pelanggan
                    </span>
                    <div class="flex items-center gap-1">
                        <button
                            class="p-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 hover:bg-slate-50 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                            disabled="">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </button>
                        <button
                            class="px-3.5 py-2 rounded-lg border border-primary bg-primary text-white text-sm font-medium transition-colors">1</button>
                        <button
                            class="px-3.5 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 text-sm font-medium transition-colors">2</button>
                        <button
                            class="px-3.5 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 text-sm font-medium transition-colors">3</button>
                        <span class="px-2 text-slate-400">...</span>
                        <button
                            class="px-3.5 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 text-sm font-medium transition-colors">21</button>
                        <button
                            class="p-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-600 dark:text-slate-200 hover:text-slate-900 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
