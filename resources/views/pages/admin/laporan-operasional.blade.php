<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
            {{-- Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Laporan Operasional</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Monitor performa dan efisiensi operasional
                        bisnis servis</p>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <div
                        class="flex bg-white dark:bg-[#111418] rounded-lg p-1 border border-slate-200 dark:border-gray-700 shadow-sm">
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md bg-slate-100 dark:bg-gray-700 text-slate-900 dark:text-white">Minggu
                            Ini</button>
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">Bulan
                            Ini</button>
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">Custom</button>
                    </div>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">print</span>
                        <span class="hidden sm:inline">Cetak Laporan</span>
                    </button>
                </div>
            </div>

            {{-- KPI Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Order</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">67</h3>
                            <p class="text-xs text-slate-400 mt-1">Minggu ini</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-blue-50 text-blue-600 rounded-xl dark:bg-blue-900/20 dark:text-blue-400">
                            <span class="material-symbols-outlined text-[28px]">receipt_long</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            18.2%
                        </span>
                        <span class="text-xs text-slate-400">vs minggu lalu</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Order Selesai</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">52</h3>
                            <p class="text-xs text-slate-400 mt-1">Completion: 77.6%</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-green-50 text-green-600 rounded-xl dark:bg-green-900/20 dark:text-green-400">
                            <span class="material-symbols-outlined text-[28px]">task_alt</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            12.5%
                        </span>
                        <span class="text-xs text-slate-400">vs minggu lalu</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Waktu Rata-rata</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">3.2 hari</h3>
                            <p class="text-xs text-slate-400 mt-1">Per servis</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-purple-50 text-purple-600 rounded-xl dark:bg-purple-900/20 dark:text-purple-400">
                            <span class="material-symbols-outlined text-[28px]">avg_time</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_downward</span>
                            0.8 hari lebih cepat
                        </span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Kepuasan Pelanggan</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">4.8/5.0</h3>
                            <p class="text-xs text-slate-400 mt-1">Dari 45 review</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-yellow-50 text-yellow-600 rounded-xl dark:bg-yellow-900/20 dark:text-yellow-400">
                            <span class="material-symbols-outlined text-[28px]">star</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">verified</span>
                            Sangat Baik
                        </span>
                    </div>
                </div>
            </div>

            {{-- Status Order & Performa Teknisi --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Distribusi Status Order --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Distribusi Status Order</h4>
                    <p class="text-xs text-slate-400 mb-6">Breakdown order berdasarkan status</p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900/10 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-blue-500 text-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[20px]">inbox</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Baru Masuk</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Menunggu diagnosa</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-blue-600 dark:text-blue-400">12</p>
                                <p class="text-xs text-slate-400">17.9%</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-purple-50 dark:bg-purple-900/10 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-purple-500 text-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[20px]">search</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Diagnosa</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Sedang diperiksa</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-purple-600 dark:text-purple-400">8</p>
                                <p class="text-xs text-slate-400">11.9%</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-orange-50 dark:bg-orange-900/10 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-orange-500 text-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[20px]">build</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Pengerjaan</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Sedang diperbaiki</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-orange-600 dark:text-orange-400">15</p>
                                <p class="text-xs text-slate-400">22.4%</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-yellow-50 dark:bg-yellow-900/10 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-yellow-500 text-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[20px]">schedule</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Menunggu Sparepart
                                    </p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Pending parts</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-yellow-600 dark:text-yellow-400">7</p>
                                <p class="text-xs text-slate-400">10.4%</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-green-50 dark:bg-green-900/10 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-green-500 text-white flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Selesai</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Siap diambil</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-green-600 dark:text-green-400">25</p>
                                <p class="text-xs text-slate-400">37.3%</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Performa Teknisi --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Performa Teknisi</h4>
                    <p class="text-xs text-slate-400 mb-6">Produktivitas minggu ini</p>
                    <div class="space-y-5">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-blue-100 dark:bg-blue-900/20 flex items-center justify-center">
                                        <span class="text-sm font-bold text-blue-600 dark:text-blue-400">DE</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">Dedi Kurniawan
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Senior Teknisi</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">23 Order</p>
                                    <p class="text-xs text-green-600 dark:text-green-400">95% Sukses</p>
                                </div>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full shadow-sm"
                                    style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-green-100 dark:bg-green-900/20 flex items-center justify-center">
                                        <span class="text-sm font-bold text-green-600 dark:text-green-400">RU</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">Rudi Hartono
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Teknisi</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">18 Order</p>
                                    <p class="text-xs text-green-600 dark:text-green-400">88% Sukses</p>
                                </div>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full shadow-sm"
                                    style="width: 88%"></div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-purple-100 dark:bg-purple-900/20 flex items-center justify-center">
                                        <span class="text-sm font-bold text-purple-600 dark:text-purple-400">AN</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">Anton Wijaya
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Teknisi</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">11 Order</p>
                                    <p class="text-xs text-green-600 dark:text-green-400">91% Sukses</p>
                                </div>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full shadow-sm"
                                    style="width: 91%"></div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-slate-100 dark:border-gray-800">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-slate-600 dark:text-slate-400">Total Order Dikerjakan:</span>
                                <span class="font-bold text-slate-900 dark:text-white">52 Order</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tren Waktu Servis & Jenis Kerusakan --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Tren Waktu Penyelesaian --}}
                <div
                    class="lg:col-span-2 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Tren Waktu Penyelesaian Servis
                    </h4>
                    <p class="text-xs text-slate-400 mb-6">7 Hari Terakhir (dalam hari)</p>
                    <div class="flex gap-4 items-end h-56 pb-2">
                        <div
                            class="flex flex-col justify-between h-full text-[10px] text-slate-400 font-medium text-right w-8 shrink-0">
                            <span>5.0</span>
                            <span>4.0</span>
                            <span>3.0</span>
                            <span>2.0</span>
                            <span>1.0</span>
                            <span>0</span>
                        </div>
                        <div class="flex-1 flex flex-col h-full justify-end">
                            <div
                                class="flex-1 flex items-end justify-between gap-2 border-l border-b border-slate-200 dark:border-gray-700">
                                {{-- Senin --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[65%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            3.2 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Sen</span>
                                </div>
                                {{-- Selasa --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[70%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            3.5 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Sel</span>
                                </div>
                                {{-- Rabu --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[55%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            2.8 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Rab</span>
                                </div>
                                {{-- Kamis --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[62%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            3.1 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Kam</span>
                                </div>
                                {{-- Jumat --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[58%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            2.9 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Jum</span>
                                </div>
                                {{-- Sabtu --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[68%]">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            3.4 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Sab</span>
                                </div>
                                {{-- Minggu --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div
                                        class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t relative group h-[50%] shadow-lg shadow-blue-500/30">
                                        <div
                                            class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                            2.5 hari</div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Top Jenis Kerusakan --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Top Jenis Kerusakan</h4>
                    <p class="text-xs text-slate-400 mb-6">Minggu ini</p>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">🔌</span>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Power
                                        Supply</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">18</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">💡</span>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Backlight
                                        LED</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">15</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-teal-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">📺</span>
                                    <span
                                        class="text-sm font-medium text-slate-700 dark:text-slate-300">Mainboard</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">12</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">🎛️</span>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">T-Con
                                        Board</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">9</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-orange-500 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">🔧</span>
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Lainnya</span>
                                </div>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">13</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-slate-400 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inventory & Order Terbaru --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Status Inventory Sparepart --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-slate-200 dark:border-gray-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold text-[#111418] dark:text-white">Status Inventory Sparepart
                                </h4>
                                <p class="text-xs text-slate-400 mt-1">Stok yang perlu diperhatikan</p>
                            </div>
                        </div>
                    </div>
                    <div class="divide-y divide-slate-100 dark:divide-gray-800">
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-red-100 dark:bg-red-900/20 text-red-600 dark:text-red-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">warning</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Power Supply 43"
                                        </p>
                                        <p class="text-xs text-red-600 dark:text-red-400">Stok Menipis</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900 dark:text-white">3 Unit</span>
                                    <p class="text-xs text-slate-400">Min: 10</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-yellow-100 dark:bg-yellow-900/20 text-yellow-600 dark:text-yellow-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">info</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">LED Strip 55"</p>
                                        <p class="text-xs text-yellow-600 dark:text-yellow-400">Perlu Restock</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900 dark:text-white">8 Unit</span>
                                    <p class="text-xs text-slate-400">Min: 15</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">T-Con Board</p>
                                        <p class="text-xs text-green-600 dark:text-green-400">Stok Aman</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900 dark:text-white">24 Unit</span>
                                    <p class="text-xs text-slate-400">Min: 10</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Mainboard 32"</p>
                                        <p class="text-xs text-green-600 dark:text-green-400">Stok Aman</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-sm font-bold text-slate-900 dark:text-white">18 Unit</span>
                                    <p class="text-xs text-slate-400">Min: 8</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Order Prioritas Tinggi --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-slate-200 dark:border-gray-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold text-[#111418] dark:text-white">Order Prioritas Tinggi
                                </h4>
                                <p class="text-xs text-slate-400 mt-1">Memerlukan perhatian segera</p>
                            </div>
                            <button class="text-sm text-primary font-medium hover:underline flex items-center gap-1">
                                Lihat Semua
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <div class="divide-y divide-slate-100 dark:divide-gray-800">
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <a href="#"
                                            class="text-sm font-semibold text-primary hover:underline">#TV-2345</a>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-300">
                                            Urgent
                                        </span>
                                    </div>
                                    <p class="text-sm text-slate-900 dark:text-white">Hotel Grand - 5 Unit TV</p>
                                    <p class="text-xs text-slate-500 mt-1">Deadline: Besok pagi</p>
                                </div>
                                <span
                                    class="text-xs px-2 py-1 rounded bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300">
                                    Pengerjaan
                                </span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <a href="#"
                                            class="text-sm font-semibold text-primary hover:underline">#TV-2342</a>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-[10px] font-medium bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            High
                                        </span>
                                    </div>
                                    <p class="text-sm text-slate-900 dark:text-white">PT Merdeka - Samsung 65"</p>
                                    <p class="text-xs text-slate-500 mt-1">Menunggu approval</p>
                                </div>
                                <span
                                    class="text-xs px-2 py-1 rounded bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300">
                                    Diagnosa
                                </span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <a href="#"
                                            class="text-sm font-semibold text-primary hover:underline">#TV-2340</a>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-[10px] font-medium bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            High
                                        </span>
                                    </div>
                                    <p class="text-sm text-slate-900 dark:text-white">Ahmad Fauzi - LG 43"</p>
                                    <p class="text-xs text-slate-500 mt-1">VIP Customer</p>
                                </div>
                                <span
                                    class="text-xs px-2 py-1 rounded bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300">
                                    Menunggu Parts
                                </span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <a href="#"
                                            class="text-sm font-semibold text-primary hover:underline">#TV-2338</a>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-[10px] font-medium bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            High
                                        </span>
                                    </div>
                                    <p class="text-sm text-slate-900 dark:text-white">Siti Nurhaliza - Sony 50"</p>
                                    <p class="text-xs text-slate-500 mt-1">Garansi service</p>
                                </div>
                                <span
                                    class="text-xs px-2 py-1 rounded bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
                                    Baru Masuk
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Metrik Efisiensi --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="p-5 bg-gradient-to-br from-green-50 to-green-100/50 dark:from-green-900/20 dark:to-green-900/10 rounded-xl border border-green-200 dark:border-green-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-green-500 text-white flex items-center justify-center shadow-lg shadow-green-500/30">
                            <span class="material-symbols-outlined text-[22px]">speed</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-green-700 dark:text-green-300">Efisiensi Kerja</p>
                            <h3 class="text-xl font-bold text-green-900 dark:text-green-100">92%</h3>
                        </div>
                    </div>
                    <p class="text-xs text-green-600 dark:text-green-400">Target: 85% - Tercapai ✓</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-blue-50 to-blue-100/50 dark:from-blue-900/20 dark:to-blue-900/10 rounded-xl border border-blue-200 dark:border-blue-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-blue-500 text-white flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <span class="material-symbols-outlined text-[22px]">autorenew</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-blue-700 dark:text-blue-300">Repeat Customer</p>
                            <h3 class="text-xl font-bold text-blue-900 dark:text-blue-100">64%</h3>
                        </div>
                    </div>
                    <p class="text-xs text-blue-600 dark:text-blue-400">Pelanggan kembali lagi</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-purple-50 to-purple-100/50 dark:from-purple-900/20 dark:to-purple-900/10 rounded-xl border border-purple-200 dark:border-purple-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-purple-500 text-white flex items-center justify-center shadow-lg shadow-purple-500/30">
                            <span class="material-symbols-outlined text-[22px]">history</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-purple-700 dark:text-purple-300">First Call Resolution
                            </p>
                            <h3 class="text-xl font-bold text-purple-900 dark:text-purple-100">78%</h3>
                        </div>
                    </div>
                    <p class="text-xs text-purple-600 dark:text-purple-400">Selesai tanpa re-work</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-orange-50 to-orange-100/50 dark:from-orange-900/20 dark:to-orange-900/10 rounded-xl border border-orange-200 dark:border-orange-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-orange-500 text-white flex items-center justify-center shadow-lg shadow-orange-500/30">
                            <span class="material-symbols-outlined text-[22px]">schedule</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-orange-700 dark:text-orange-300">On-Time Delivery</p>
                            <h3 class="text-xl font-bold text-orange-900 dark:text-orange-100">89%</h3>
                        </div>
                    </div>
                    <p class="text-xs text-orange-600 dark:text-orange-400">Selesai sesuai estimasi</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
