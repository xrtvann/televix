<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-[1400px] mx-auto flex flex-col gap-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex gap-2 items-center">
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Daftar Order Servis</h1>
                    <span
                        class="px-2 py-0.5 rounded-full bg-slate-100 dark:bg-gray-800 text-slate-600 dark:text-slate-400 text-xs font-semibold">Total:
                        48</span>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button
                        class="flex-1 sm:flex-none bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">file_download</span>
                        <span class="hidden sm:inline">Export CSV</span>
                    </button>
                    <button
                        class="flex-1 sm:flex-none bg-primary hover:bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        Buat Order Baru
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] p-4 rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="relative">
                        <label class="block text-xs font-medium text-slate-500 mb-1">Pencarian</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">search</span>
                            <input
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                placeholder="ID Order, Nama Pelanggan..." type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Filter Status</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">filter_list</span>
                            <select
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua Status</option>
                                <option value="baru">Baru Masuk</option>
                                <option value="diagnosa">Diagnosa</option>
                                <option value="pengerjaan">Sedang Dikerjakan</option>
                                <option value="menunggu">Menunggu Sparepart</option>
                                <option value="selesai">Selesai</option>
                                <option value="batal">Dibatalkan</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-2 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Teknisi</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">person</span>
                            <select
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua Teknisi</option>
                                <option value="dedi">Dedi</option>
                                <option value="rudi">Rudi</option>
                                <option value="anton">Anton</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Tanggal Masuk</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">calendar_today</span>
                            <input
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50"
                                type="date" />
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden flex-1">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="sticky top-0 z-10">
                            <tr class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Order ID</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Pelanggan</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Unit / Kerusakan</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Teknisi</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Tgl Masuk</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Status</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider  whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                        href="#">#TV-2312</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Pak
                                            Hendra</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Polytron LED
                                            24"</span>
                                        <span class="text-xs text-slate-500 truncate max-w-[150px]">Mati total, kena
                                            petir</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-sm text-slate-400 italic">- Belum ditentukan -</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">13 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 dark:bg-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-600">
                                        Baru Masuk
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        <span>Edit Order</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">person_add</span>
                                                        <span>Assign Teknisi</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                        href="#">#TV-2301</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Ahmad
                                            Fauzi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Samsung 43"
                                            Smart TV</span>
                                        <span class="text-xs text-slate-500 truncate max-w-[150px]">Layar
                                            berkedip</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center ring-1 ring-slate-200 dark:ring-slate-700"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDynI0sf0RA44o9sWJYQJ38BdicBQ2NMxUrX4GiejxTV-Ue42WR7PAoS1jP5KE4dCZMMtxrq-z-SHMuU5KL9RCxvHLz3yt4vFPyiNLxSsvlL986vPIpoeJJPX2YZqkFMvoOJ6mWWnq4Y7Thlc4PbzyogSKegrg9fdWRUeM_BrTaiiCuEcLfs4WS3YaYZfPBxf2Od6Ks5vnajlFU1P1z9w3myyNPjjKOsBIEVp6FVoPgJywqqGpbbtTWBtZH3IB8Tu7-s5qYtiVb6bWv");'>
                                        </div>
                                        <span class="text-sm text-slate-600 dark:text-slate-300">Rudi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">12 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 border border-blue-100 dark:border-blue-800">
                                        Diagnosa
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        <span>Edit Order</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">print</span>
                                                        <span>Cetak Invoice</span>
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
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                        href="#">#TV-2305</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Siti
                                            Aminah</span>

                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">LG LED
                                            32"</span>
                                        <span class="text-xs text-slate-500 truncate max-w-[150px]">Ganti
                                            Backlight</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center ring-1 ring-slate-200 dark:ring-slate-700"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDuwm1dJZPnDMH6gPJ34AIpDreIzrc8CrNXcRwDvlsHpRXoS4JLa0rHH5XrMNEkIT-ih8PZCTYCpzic57ZrncouOGcuSpgHGi1Mi6TTktKrDTswWAZ3b6sih9f4fZEn193-riGHH7PTealoj29qQBiBJkUq9ipNH_ohVEWp-tyJ2NTRn7isTFcLRDnCl0lcDE3WR-i5l0j7mxR6iBVPyk_Kq0JwRXpalZS7Fb6lwW3w7bbLWgigK1Qbq2me5jGlrMZsIKsAzMAXr1Rv");'>
                                        </div>
                                        <span class="text-sm text-slate-600 dark:text-slate-300">Budi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">10 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300 border border-yellow-100 dark:border-yellow-800">
                                        Menunggu Part
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        <span>Edit Order</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">print</span>
                                                        <span>Cetak Invoice</span>
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
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                        href="#">#TV-2298</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Hotel
                                            Merdeka</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-900 dark:text-white">Sharp Aquos
                                            50" (x3)</span>
                                        <span class="text-xs text-slate-500 truncate max-w-[150px]">Maintenance rutin,
                                            Panel redup</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center ring-1 ring-slate-200 dark:ring-slate-700"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB9rcDzZFc8Z-zV4-Ne55ljoumi9U408unTGkGl-XsoEhTBHFOwtqcRgtuORZNCXw95gR2FZqogcpa2FDSr4fnyGbaWLtQ1p2iwdVHvzVs8x5e70xJDZUl6KF2LPpOmSbiWj9xQJaqW2TeFDu7wgAOWYu2cR5Er98H9n1CgnT9pl0zedhokbRJ3q-CtyvlIyBeu5lIaQUlkzicHZC01-FKPVyn4cqfXfs6MelHaI6zhMey-6vls0Vl3lQIiiE033yVTWbvFa8R9Igzw");'>
                                        </div>
                                        <span class="text-sm text-slate-600 dark:text-slate-300">Dedi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span class="text-sm text-slate-600 dark:text-slate-300">08 Okt 2023</span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-50 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300 border border-orange-100 dark:border-orange-800">
                                        Pengerjaan
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        <span>Edit Order</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">print</span>
                                                        <span>Cetak Invoice</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors bg-slate-50/50 dark:bg-gray-800/20">
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-slate-500 font-semibold hover:underline hover:text-primary dark:text-slate-400"
                                        href="#">#TV-2310</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Dani
                                            Rosyid</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Panasonic
                                            Viera 40"</span>
                                        <span class="text-xs text-slate-400 truncate max-w-[150px]">Power supply
                                            replacement</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center grayscale opacity-80"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDynI0sf0RA44o9sWJYQJ38BdicBQ2NMxUrX4GiejxTV-Ue42WR7PAoS1jP5KE4dCZMMtxrq-z-SHMuU5KL9RCxvHLz3yt4vFPyiNLxSsvlL986vPIpoeJJPX2YZqkFMvoOJ6mWWnq4Y7Thlc4PbzyogSKegrg9fdWRUeM_BrTaiiCuEcLfs4WS3YaYZfPBxf2Od6Ks5vnajlFU1P1z9w3myyNPjjKOsBIEVp6FVoPgJywqqGpbbtTWBtZH3IB8Tu7-s5qYtiVb6bWv");'>
                                        </div>
                                        <span class="text-sm text-slate-500 dark:text-slate-400">Rudi</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">05 Okt 2023</span>
                                        <span
                                            class="text-[10px] text-green-600 dark:text-green-400 font-medium">Selesai:
                                            09 Okt</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-300 border border-green-100 dark:border-green-800">
                                        Selesai
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors text-sm">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">print</span>
                                                        <span>Cetak Invoice</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">download</span>
                                                        <span>Download PDF</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr
                                class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors bg-slate-50/50 dark:bg-gray-800/20">
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <a class="text-slate-500 font-semibold hover:underline hover:text-primary dark:text-slate-400"
                                        href="#">#TV-2280</a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Rina
                                            Wati</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Sony
                                            Bravia 55"</span>
                                        <span class="text-xs text-slate-400 truncate max-w-[150px]">Software
                                            Update</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center grayscale opacity-80"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFxPQRZ_AHc_w4Vh2A0nExCzWwxIp6RviEtvZcXwaJlemZ_E_3cksl8WI3Dl0FPLmoMl2oBbrTVGlzpy-un6trXC7wYa9wMWcyaYzYYOlkCke28bnJp_4tPTwFZ9jTjmKkBi55mBXuYbYSy3Y6Ga23vgZvYxGqfXhcV1lpHk-lGLEVoSrIJGw_a_4-YSwBYXmFMS34PcvahPP3IjbRaCaBdmISgneQ1Jv_rC_98feE4yF91E_vltFHmu4hYjjLrpXA3rcER1yFdaKG");'>
                                        </div>
                                        <span class="text-sm text-slate-500 dark:text-slate-400">Anton</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">01 Okt 2023</span>
                                        <span
                                            class="text-[10px] text-green-600 dark:text-green-400 font-medium">Selesai:
                                            03 Okt</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-300 border border-green-100 dark:border-green-800">
                                        Selesai
                                    </span>
                                </td>
                                <td class="py-4 px-6 whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                            title="Lihat Detail Order">
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
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">print</span>
                                                        <span>Cetak Invoice</span>
                                                    </button>
                                                    <button
                                                        class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                        <span
                                                            class="material-symbols-outlined text-[18px]">download</span>
                                                        <span>Download PDF</span>
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
                            class="font-medium text-slate-900 dark:text-white">48</span> hasil
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
                            class="px-3.5 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 text-sm font-medium transition-colors">8</button>
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
