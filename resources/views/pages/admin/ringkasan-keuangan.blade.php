<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
            {{-- Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Ringkasan Keuangan</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Analisis komprehensif kondisi finansial
                        bisnis Anda</p>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <div
                        class="flex bg-white dark:bg-[#111418] rounded-lg p-1 border border-slate-200 dark:border-gray-700 shadow-sm">
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md bg-slate-100 dark:bg-gray-700 text-slate-900 dark:text-white">Bulan
                            Ini</button>
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">3
                            Bulan</button>
                        <button
                            class="px-3 py-1.5 text-xs font-medium rounded-md text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">Tahun
                            Ini</button>
                    </div>
                    <button
                        class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                        <span class="hidden sm:inline">Export Laporan</span>
                    </button>
                </div>
            </div>

            {{-- Metrik Utama Keuangan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Pendapatan</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">Rp 45.8 jt</h3>
                            <p class="text-xs text-slate-400 mt-1">Bulan ini</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-green-50 text-green-600 rounded-xl dark:bg-green-900/20 dark:text-green-400">
                            <span class="material-symbols-outlined text-[28px]">trending_up</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            24.5%
                        </span>
                        <span class="text-xs text-slate-400">vs bulan lalu</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Pengeluaran</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">Rp 18.2 jt</h3>
                            <p class="text-xs text-slate-400 mt-1">Operasional & Sparepart</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-red-50 text-red-600 rounded-xl dark:bg-red-900/20 dark:text-red-400">
                            <span class="material-symbols-outlined text-[28px]">trending_down</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            8.3%
                        </span>
                        <span class="text-xs text-slate-400">vs bulan lalu</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Laba Bersih</p>
                            <h3 class="mt-2 text-2xl font-bold text-primary dark:text-blue-400">Rp 27.6 jt</h3>
                            <p class="text-xs text-slate-400 mt-1">Margin: 60.2%</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-blue-50 text-blue-600 rounded-xl dark:bg-blue-900/20 dark:text-blue-400">
                            <span class="material-symbols-outlined text-[28px]">account_balance</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span>
                            31.2%
                        </span>
                        <span class="text-xs text-slate-400">vs bulan lalu</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Piutang Belum Lunas</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">Rp 6.4 jt</h3>
                            <p class="text-xs text-slate-400 mt-1">12 Invoice pending</p>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-orange-50 text-orange-600 rounded-xl dark:bg-orange-900/20 dark:text-orange-400">
                            <span class="material-symbols-outlined text-[28px]">schedule</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-orange-50 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400">
                            <span class="material-symbols-outlined text-[14px]">warning</span>
                            Perlu tindak lanjut
                        </span>
                    </div>
                </div>
            </div>

            {{-- Grafik Tren & Breakdown --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Tren Pendapatan vs Pengeluaran --}}
                <div
                    class="lg:col-span-2 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h4 class="text-lg font-bold text-[#111418] dark:text-white">Tren Pendapatan vs Pengeluaran
                            </h4>
                            <p class="text-xs text-slate-400 mt-1">6 Bulan Terakhir</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-primary"></div>
                                <span class="text-xs text-slate-600 dark:text-slate-400">Pendapatan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <span class="text-xs text-slate-600 dark:text-slate-400">Pengeluaran</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 items-end h-56 pb-2">
                        <div
                            class="flex flex-col justify-between h-full text-[10px] text-slate-400 font-medium text-right w-12 shrink-0">
                            <span>50jt</span>
                            <span>40jt</span>
                            <span>30jt</span>
                            <span>20jt</span>
                            <span>10jt</span>
                            <span>0</span>
                        </div>
                        <div class="flex-1 flex flex-col h-full justify-end">
                            <div
                                class="flex-1 flex items-end justify-between gap-3 border-l border-b border-slate-200 dark:border-gray-700">
                                {{-- Juli --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div class="w-1/2 bg-primary rounded-t relative group h-[55%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 27.5jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[35%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 17.5jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Jul</span>
                                </div>
                                {{-- Agustus --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div class="w-1/2 bg-primary rounded-t relative group h-[62%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 31.0jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[38%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 19.0jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Agu</span>
                                </div>
                                {{-- September --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div class="w-1/2 bg-primary rounded-t relative group h-[58%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 29.0jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[34%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 17.0jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Sep</span>
                                </div>
                                {{-- Oktober --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div class="w-1/2 bg-primary rounded-t relative group h-[70%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 35.0jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[40%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 20.0jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Okt</span>
                                </div>
                                {{-- November --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div class="w-1/2 bg-primary rounded-t relative group h-[74%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 37.0jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[34%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 17.0jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Nov</span>
                                </div>
                                {{-- Desember --}}
                                <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
                                    <div class="w-full flex gap-1 items-end h-full">
                                        <div
                                            class="w-1/2 bg-primary rounded-t relative group h-[92%] shadow-lg shadow-blue-500/30">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 45.8jt</div>
                                        </div>
                                        <div class="w-1/2 bg-red-500 rounded-t relative group h-[36%]">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp 18.2jt</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-400 font-medium">Des</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Breakdown Pendapatan --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Sumber Pendapatan</h4>
                    <p class="text-xs text-slate-400 mb-6">Breakdown bulan ini</p>
                    <div class="flex flex-col gap-4">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Biaya Jasa
                                    Servis</span>
                                <span class="text-sm font-bold text-[#111418] dark:text-white">Rp 28.5jt</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2.5">
                                <div class="bg-primary h-2.5 rounded-full" style="width: 62%"></div>
                            </div>
                            <span class="text-xs text-slate-400 mt-1">62% dari total</span>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Penjualan
                                    Sparepart</span>
                                <span class="text-sm font-bold text-[#111418] dark:text-white">Rp 12.3jt</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2.5">
                                <div class="bg-teal-500 h-2.5 rounded-full" style="width: 27%"></div>
                            </div>
                            <span class="text-xs text-slate-400 mt-1">27% dari total</span>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Biaya
                                    Diagnosa</span>
                                <span class="text-sm font-bold text-[#111418] dark:text-white">Rp 3.2jt</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2.5">
                                <div class="bg-purple-500 h-2.5 rounded-full" style="width: 7%"></div>
                            </div>
                            <span class="text-xs text-slate-400 mt-1">7% dari total</span>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Lainnya</span>
                                <span class="text-sm font-bold text-[#111418] dark:text-white">Rp 1.8jt</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2.5">
                                <div class="bg-orange-500 h-2.5 rounded-full" style="width: 4%"></div>
                            </div>
                            <span class="text-xs text-slate-400 mt-1">4% dari total</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Breakdown Pengeluaran & Metrik Tambahan --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Breakdown Pengeluaran --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Breakdown Pengeluaran</h4>
                    <p class="text-xs text-slate-400 mb-6">Alokasi biaya bulan ini</p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-orange-100 dark:bg-orange-900/20 text-orange-600 dark:text-orange-400 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">inventory_2</span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Pembelian
                                        Sparepart
                                    </p>
                                    <p class="text-xs text-slate-400">45 Transaksi</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-bold text-slate-900 dark:text-white">Rp 9.8jt</p>
                                <p class="text-xs text-slate-400">53.8%</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-blue-100 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">groups</span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Gaji Teknisi</p>
                                    <p class="text-xs text-slate-400">3 Teknisi</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-bold text-slate-900 dark:text-white">Rp 4.5jt</p>
                                <p class="text-xs text-slate-400">24.7%</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-purple-100 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">store</span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Operasional</p>
                                    <p class="text-xs text-slate-400">Sewa, Listrik, dll</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-bold text-slate-900 dark:text-white">Rp 2.5jt</p>
                                <p class="text-xs text-slate-400">13.7%</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-gray-800/50 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-10 rounded-lg bg-teal-100 dark:bg-teal-900/20 text-teal-600 dark:text-teal-400 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">more_horiz</span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300">Lain-lain</p>
                                    <p class="text-xs text-slate-400">Transportasi, dll</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-bold text-slate-900 dark:text-white">Rp 1.4jt</p>
                                <p class="text-xs text-slate-400">7.8%</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Metrik Kinerja Keuangan --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                    <h4 class="text-lg font-bold text-[#111418] dark:text-white mb-1">Metrik Kinerja</h4>
                    <p class="text-xs text-slate-400 mb-6">Indikator kesehatan finansial</p>
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Rata-rata Nilai
                                    Order</span>
                                <span class="text-sm font-bold text-primary">Rp 685k</span>
                            </div>
                            <div class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px] text-green-600">trending_up</span>
                                <span>Naik 12% dari bulan lalu</span>
                            </div>
                        </div>
                        <div class="border-t border-slate-100 dark:border-gray-800 pt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Tingkat Pembayaran
                                    Tepat Waktu</span>
                                <span class="text-sm font-bold text-green-600">84%</span>
                            </div>
                            <div class="w-full bg-slate-100 dark:bg-gray-800 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 84%"></div>
                            </div>
                        </div>
                        <div class="border-t border-slate-100 dark:border-gray-800 pt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Rasio
                                    Keuntungan</span>
                                <span class="text-sm font-bold text-primary">60.2%</span>
                            </div>
                            <div class="text-xs text-slate-400">Target: 55% - Tercapai ✓</div>
                        </div>
                        <div class="border-t border-slate-100 dark:border-gray-800 pt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">ROI Bulanan</span>
                                <span class="text-sm font-bold text-primary">152%</span>
                            </div>
                            <div class="text-xs text-slate-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px] text-green-600">verified</span>
                                <span>Sangat baik</span>
                            </div>
                        </div>
                        <div class="border-t border-slate-100 dark:border-gray-800 pt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Waktu Rata-rata
                                    Pelunasan</span>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">5.2 hari</span>
                            </div>
                            <div class="text-xs text-slate-400">Lebih cepat 1.3 hari dari rata-rata</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tabel Invoice & Transaksi Terbaru --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Invoice Belum Lunas --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-slate-200 dark:border-gray-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold text-[#111418] dark:text-white">Invoice Belum Lunas</h4>
                                <p class="text-xs text-slate-400 mt-1">12 Invoice menunggu pembayaran</p>
                            </div>
                            <button class="text-sm text-primary font-medium hover:underline flex items-center gap-1">
                                Lihat Semua
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                    <th
                                        class="py-3 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Invoice</th>
                                    <th
                                        class="py-3 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Pelanggan</th>
                                    <th
                                        class="py-3 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                        Nominal</th>
                                    <th
                                        class="py-3 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-5">
                                        <a class="text-sm font-medium text-primary hover:underline"
                                            href="#">#INV-2342</a>
                                    </td>
                                    <td class="py-3 px-5">
                                        <span class="text-sm text-slate-700 dark:text-slate-300">Ahmad Fauzi</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Rp
                                            850k</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            Jatuh Tempo
                                        </span>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-5">
                                        <a class="text-sm font-medium text-primary hover:underline"
                                            href="#">#INV-2341</a>
                                    </td>
                                    <td class="py-3 px-5">
                                        <span class="text-sm text-slate-700 dark:text-slate-300">PT Merdeka</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Rp
                                            2.3jt</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-300">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-5">
                                        <a class="text-sm font-medium text-primary hover:underline"
                                            href="#">#INV-2339</a>
                                    </td>
                                    <td class="py-3 px-5">
                                        <span class="text-sm text-slate-700 dark:text-slate-300">Siti Nurhaliza</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Rp
                                            450k</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-300">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-5">
                                        <a class="text-sm font-medium text-primary hover:underline"
                                            href="#">#INV-2338</a>
                                    </td>
                                    <td class="py-3 px-5">
                                        <span class="text-sm text-slate-700 dark:text-slate-300">Budi Santoso</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Rp
                                            680k</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
                                            Terlambat 3h
                                        </span>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-5">
                                        <a class="text-sm font-medium text-primary hover:underline"
                                            href="#">#INV-2336</a>
                                    </td>
                                    <td class="py-3 px-5">
                                        <span class="text-sm text-slate-700 dark:text-slate-300">CV Sejahtera</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Rp
                                            1.5jt</span>
                                    </td>
                                    <td class="py-3 px-5 text-right">
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900/30 dark:text-orange-300">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Transaksi Terbaru --}}
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-slate-200 dark:border-gray-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold text-[#111418] dark:text-white">Transaksi Terbaru</h4>
                                <p class="text-xs text-slate-400 mt-1">Aktivitas keuangan hari ini</p>
                            </div>
                            <button class="text-sm text-primary font-medium hover:underline flex items-center gap-1">
                                Lihat Semua
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <div class="divide-y divide-slate-100 dark:divide-gray-800">
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">arrow_downward</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Pembayaran
                                            #TV-2342
                                        </p>
                                        <p class="text-xs text-slate-400">Ahmad Fauzi - 10 menit lalu</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold text-green-600">+Rp 850k</span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-red-100 dark:bg-red-900/20 text-red-600 dark:text-red-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">arrow_upward</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Pembelian
                                            Sparepart
                                        </p>
                                        <p class="text-xs text-slate-400">T-Con Board - 1 jam lalu</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold text-red-600">-Rp 450k</span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">arrow_downward</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Pembayaran
                                            #TV-2340
                                        </p>
                                        <p class="text-xs text-slate-400">PT Merdeka - 2 jam lalu</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold text-green-600">+Rp 2.3jt</span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-red-100 dark:bg-red-900/20 text-red-600 dark:text-red-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">arrow_upward</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Biaya Operasional
                                        </p>
                                        <p class="text-xs text-slate-400">Listrik Bulan Ini - 3 jam lalu</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold text-red-600">-Rp 1.2jt</span>
                            </div>
                        </div>
                        <div class="p-4 hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[20px]">arrow_downward</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-slate-900 dark:text-white">Pembayaran
                                            #TV-2338
                                        </p>
                                        <p class="text-xs text-slate-400">Siti Nurhaliza - 4 jam lalu</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold text-green-600">+Rp 680k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Statistik Lanjutan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="p-5 bg-gradient-to-br from-blue-50 to-blue-100/50 dark:from-blue-900/20 dark:to-blue-900/10 rounded-xl border border-blue-200 dark:border-blue-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-blue-500 text-white flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <span class="material-symbols-outlined text-[22px]">receipt_long</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-blue-700 dark:text-blue-300">Total Order</p>
                            <h3 class="text-xl font-bold text-blue-900 dark:text-blue-100">67</h3>
                        </div>
                    </div>
                    <p class="text-xs text-blue-600 dark:text-blue-400">Bulan ini</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-green-50 to-green-100/50 dark:from-green-900/20 dark:to-green-900/10 rounded-xl border border-green-200 dark:border-green-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-green-500 text-white flex items-center justify-center shadow-lg shadow-green-500/30">
                            <span class="material-symbols-outlined text-[22px]">check_circle</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-green-700 dark:text-green-300">Order Selesai</p>
                            <h3 class="text-xl font-bold text-green-900 dark:text-green-100">52</h3>
                        </div>
                    </div>
                    <p class="text-xs text-green-600 dark:text-green-400">Completion rate: 77.6%</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-purple-50 to-purple-100/50 dark:from-purple-900/20 dark:to-purple-900/10 rounded-xl border border-purple-200 dark:border-purple-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-purple-500 text-white flex items-center justify-center shadow-lg shadow-purple-500/30">
                            <span class="material-symbols-outlined text-[22px]">person</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-purple-700 dark:text-purple-300">Pelanggan Baru</p>
                            <h3 class="text-xl font-bold text-purple-900 dark:text-purple-100">18</h3>
                        </div>
                    </div>
                    <p class="text-xs text-purple-600 dark:text-purple-400">Akuisisi bulan ini</p>
                </div>

                <div
                    class="p-5 bg-gradient-to-br from-orange-50 to-orange-100/50 dark:from-orange-900/20 dark:to-orange-900/10 rounded-xl border border-orange-200 dark:border-orange-800">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-lg bg-orange-500 text-white flex items-center justify-center shadow-lg shadow-orange-500/30">
                            <span class="material-symbols-outlined text-[22px]">star</span>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-orange-700 dark:text-orange-300">Pelanggan VIP</p>
                            <h3 class="text-xl font-bold text-orange-900 dark:text-orange-100">12</h3>
                        </div>
                    </div>
                    <p class="text-xs text-orange-600 dark:text-orange-400">Total spend >Rp 5jt</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
