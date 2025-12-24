<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-8">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Ringkasan
                        Layanan</h3>
                    <div
                        class="flex bg-white dark:bg-[#111418] rounded-lg p-1 border border-slate-200 dark:border-gray-700 shadow-sm">
                        <button
                            class="px-3 py-1 text-xs font-medium rounded-md bg-slate-100 dark:bg-gray-700 text-slate-900 dark:text-white">Harian</button>
                        <button
                            class="px-3 py-1 text-xs font-medium rounded-md text-slate-500 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">Mingguan</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Permintaan
                                    Baru</p>
                                <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">12</h3>
                            </div>
                            <div
                                class="flex items-center justify-center size-10 bg-primary/10 text-primary rounded-lg dark:bg-primary/20">
                                <span class="material-symbols-outlined text-[24px]">assignment_add</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <span
                                class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span>
                                20%
                            </span>
                            <span class="text-xs text-slate-400">vs kemarin</span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Sedang
                                    Berlangsung</p>
                                <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">8</h3>
                            </div>
                            <div
                                class="flex items-center justify-center size-10 bg-orange-50 text-orange-600 rounded-lg dark:bg-orange-900/20 dark:text-orange-400">
                                <span class="material-symbols-outlined text-[24px]">engineering</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <span
                                class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400">
                                <span class="material-symbols-outlined text-[14px]">remove</span>
                                Stabil
                            </span>
                            <span class="text-xs text-slate-400">Beban kerja</span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Selesai Hari
                                    Ini</p>
                                <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">4</h3>
                            </div>
                            <div
                                class="flex items-center justify-center size-10 bg-green-50 text-green-600 rounded-lg dark:bg-green-900/20 dark:text-green-400">
                                <span class="material-symbols-outlined text-[24px]">check_circle</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <span
                                class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span>
                                5%
                            </span>
                            <span class="text-xs text-slate-400">Siap diambil</span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pendapatan
                                    Bersih</p>
                                <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">Rp 2.5jt
                                </h3>
                            </div>
                            <div
                                class="flex items-center justify-center size-10 bg-blue-50 text-blue-600 rounded-lg dark:bg-blue-900/20 dark:text-blue-400">
                                <span class="material-symbols-outlined text-[24px]">payments</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <span
                                class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span>
                                12%
                            </span>
                            <span class="text-xs text-slate-400">Estimasi hari ini</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Antrean Aktif
                    </h3>
                    <button class="text-sm text-primary font-medium hover:underline">Lihat Semua</button>
                </div>
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                    <th
                                        class="py-3 px-4 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Order ID</th>
                                    <th
                                        class="py-3 px-4 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Pelanggan &amp; Unit</th>
                                    <th
                                        class="py-3 px-4 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="py-3 px-4 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                        Teknisi</th>
                                    <th
                                        class="py-3 px-4 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-4 text-sm font-medium text-slate-900 dark:text-white">
                                        <a class="text-primary hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                            href="#">#TV-2301</a>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Ahmad
                                                Fauzi</span>
                                            <span class="text-xs text-slate-500">Samsung 43" Smart TV</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
                                            Diagnosa
                                        </span>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Technician avatar"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6JBRylBPrnlyHw9hofcrml5MxciPFHktX7O3hs_VpnP1vDmSV0P4cYEOkdOucr7fuDXVPFBl-xAm9IANqCN5VnHy6tKuMQyXt_jQ0F7ZWjLKtvp3nEevIc53qUdy9wpDx0jSU2MxOj40cmTBY9BMtU6reCs91sC9wwvUn9gtEYsSYIvLMlxG3Sc_IqgOl6Ha_cN8lu-i2ACRKyZMl-Y1PHGmjHhAQSCT_LmKTayPs4RAxibyekgsXG68rKsxqmFs9l84Vm5R4D6Cm");'>
                                            </div>
                                            <span class="text-sm text-slate-600 dark:text-slate-300">Rudi</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-4 text-sm font-medium text-slate-900 dark:text-white">
                                        <a class="text-primary hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                            href="#">#TV-2305</a>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Siti
                                                Aminah</span>
                                            <span class="text-xs text-slate-500">LG LED 32"</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300">
                                            Menunggu Part
                                        </span>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Technician avatar"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDuwm1dJZPnDMH6gPJ34AIpDreIzrc8CrNXcRwDvlsHpRXoS4JLa0rHH5XrMNEkIT-ih8PZCTYCpzic57ZrncouOGcuSpgHGi1Mi6TTktKrDTswWAZ3b6sih9f4fZEn193-riGHH7PTealoj29qQBiBJkUq9ipNH_ohVEWp-tyJ2NTRn7isTFcLRDnCl0lcDE3WR-i5l0j7mxR6iBVPyk_Kq0JwRXpalZS7Fb6lwW3w7bbLWgigK1Qbq2me5jGlrMZsIKsAzMAXr1Rv");'>
                                            </div>
                                            <span class="text-sm text-slate-600 dark:text-slate-300">Budi</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-4 text-sm font-medium text-slate-900 dark:text-white">
                                        <a class="text-primary hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                            href="#">#TV-2298</a>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Hotel
                                                Merdeka</span>
                                            <span class="text-xs text-slate-500">Sharp Aquos 50" (x3)</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-50 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300">
                                            Pengerjaan
                                        </span>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Technician avatar"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSF2v4_w2HUJGbr-zY_nPa6diHjhnju1Px-hCx8iwTpvpAhNtDl7W3NLyyQWpdtSxJ_MTvEBQ1MSLGB6oU6cyVZURaWT0jHTOwBya98cm494_trQ-94sBtyWmPX9D33TBX2JKJ3t9pjA-jwLByDMZrt_SnaOup7ftqPYlP-ptezO12y2xqqvZSsxCadnjdPtEcAZO3fFkzrw8tytMaQtyCXolEwaYGKiDFA_ZSdfuTfYAj9YE7-Ccq-M_6pdmmfc4mesdmQYhvUH6G");'>
                                            </div>
                                            <span class="text-sm text-slate-600 dark:text-slate-300">Dedi</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-3 px-4 text-sm font-medium text-slate-900 dark:text-white">
                                        <a class="text-primary hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                            href="#">#TV-2310</a>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">Dani
                                                Rosyid</span>
                                            <span class="text-xs text-slate-500">Panasonic Viera 40"</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                            Selesai
                                        </span>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center"
                                                data-alt="Technician avatar"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBhDMnk8QON9LLi1VGMKVRHFXAqSv31I9yyxbjEB7gUsfh7OUyv5qiLDEstfXehmlx16ke8AHEUwLL4H-qysEC0nVje43ElsChHW-eRwsezebUvN3FkB4LE5Y9eIcUJB0De0ywRMrdFe-bwGYNEnd5Y3O5dfr0gKK2REddIrbBmUAs-kKUrviBENe7huAizJRvdWCcylHtsXS1q8bd8Kza3agGo7bhXoprS6MnxBzILr_GPussDCQhIdxgpga0dzBH13t1dHd1iipUn");'>
                                            </div>
                                            <span class="text-sm text-slate-600 dark:text-slate-300">Rudi</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <button class="text-slate-400 hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="p-4 border-t border-slate-200 dark:border-gray-800 bg-slate-50 dark:bg-gray-800/30 flex justify-center">
                        <button
                            class="text-sm text-slate-500 hover:text-primary font-medium flex items-center gap-1 transition-colors">
                            Lihat 5 order lainnya
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-5 h-full">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-base font-bold text-[#111418] dark:text-white">Tren Pendapatan Mingguan
                        </h4>
                        <span class="material-symbols-outlined text-slate-400">more_horiz</span>
                    </div>
                    <div class="flex gap-4 items-end h-48 pb-2">
                        <div
                            class="flex flex-col justify-between h-[85%] text-[10px] text-slate-400 font-medium text-right w-10 shrink-0 mb-6">
                            <span>3.0jt</span>
                            <span>2.0jt</span>
                            <span>1.0jt</span>
                            <span>0</span>
                        </div>
                        <div class="flex-1 flex flex-col h-full justify-end">
                            <div
                                class="flex-1 flex items-end justify-between gap-2 px-2 border-l border-b border-slate-200 dark:border-gray-700">
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[40%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 1.2jt</div>
                                </div>
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[60%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 1.8jt</div>
                                </div>
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[30%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 900rb</div>
                                </div>
                                <div
                                    class="w-full bg-primary rounded-t-sm relative group h-[80%] shadow-lg shadow-blue-500/30">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 2.4jt</div>
                                </div>
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[55%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 1.65jt</div>
                                </div>
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[45%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 1.35jt</div>
                                </div>
                                <div
                                    class="w-full bg-blue-100 dark:bg-blue-900/20 rounded-t-sm relative group h-[20%]">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                        Rp 600rb</div>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2 text-xs text-slate-400 px-2">
                                <span>Sen</span><span>Sel</span><span>Rab</span><span
                                    class="text-primary font-bold">Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-5 h-full">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-base font-bold text-[#111418] dark:text-white">Status Teknisi</h4>
                        <a class="text-xs text-primary font-medium hover:underline" href="#">Kelola</a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <div class="size-10 rounded-full bg-cover bg-center"
                                        data-alt="Technician Dedi portrait"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB9rcDzZFc8Z-zV4-Ne55ljoumi9U408unTGkGl-XsoEhTBHFOwtqcRgtuORZNCXw95gR2FZqogcpa2FDSr4fnyGbaWLtQ1p2iwdVHvzVs8x5e70xJDZUl6KF2LPpOmSbiWj9xQJaqW2TeFDu7wgAOWYu2cR5Er98H9n1CgnT9pl0zedhokbRJ3q-CtyvlIyBeu5lIaQUlkzicHZC01-FKPVyn4cqfXfs6MelHaI6zhMey-6vls0Vl3lQIiiE033yVTWbvFa8R9Igzw");'>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 size-2.5 bg-green-500 rounded-full border-2 border-white dark:border-[#111418]">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Dedi</p>
                                    <p class="text-xs text-slate-500">Spesialis LED/LCD</p>
                                </div>
                            </div>
                            <span
                                class="text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded">Aktif</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <div class="size-10 rounded-full bg-cover bg-center"
                                        data-alt="Technician Rudi portrait"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDynI0sf0RA44o9sWJYQJ38BdicBQ2NMxUrX4GiejxTV-Ue42WR7PAoS1jP5KE4dCZMMtxrq-z-SHMuU5KL9RCxvHLz3yt4vFPyiNLxSsvlL986vPIpoeJJPX2YZqkFMvoOJ6mWWnq4Y7Thlc4PbzyogSKegrg9fdWRUeM_BrTaiiCuEcLfs4WS3YaYZfPBxf2Od6Ks5vnajlFU1P1z9w3myyNPjjKOsBIEVp6FVoPgJywqqGpbbtTWBtZH3IB8Tu7-s5qYtiVb6bWv");'>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 size-2.5 bg-yellow-500 rounded-full border-2 border-white dark:border-[#111418]">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Rudi</p>
                                    <p class="text-xs text-slate-500">Spesialis Audio/Home Theater</p>
                                </div>
                            </div>
                            <span
                                class="text-xs font-medium text-yellow-600 bg-yellow-50 dark:bg-yellow-900/20 px-2 py-1 rounded">Istirahat</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <div class="size-10 rounded-full bg-cover bg-center bg-slate-200"
                                        data-alt="Technician Anton portrait"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFxPQRZ_AHc_w4Vh2A0nExCzWwxIp6RviEtvZcXwaJlemZ_E_3cksl8WI3Dl0FPLmoMl2oBbrTVGlzpy-un6trXC7wYa9wMWcyaYzYYOlkCke28bnJp_4tPTwFZ9jTjmKkBi55mBXuYbYSy3Y6Ga23vgZvYxGqfXhcV1lpHk-lGLEVoSrIJGw_a_4-YSwBYXmFMS34PcvahPP3IjbRaCaBdmISgneQ1Jv_rC_98feE4yF91E_vltFHmu4hYjjLrpXA3rcER1yFdaKG");'>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 size-2.5 bg-slate-300 rounded-full border-2 border-white dark:border-[#111418]">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Anton</p>
                                    <p class="text-xs text-slate-500">Junior Tech</p>
                                </div>
                            </div>
                            <span
                                class="text-xs font-medium text-slate-500 bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">Offline</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
