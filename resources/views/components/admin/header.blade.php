@php
    $pageTitle = 'Dashboard Overview';
    $pageSubtitle = 'Selamat datang kembali, Pak Budi.';

    if (request()->routeIs('manajemen-servis')) {
        $pageTitle = 'Manajemen Servis';
        $pageSubtitle = 'Kelola semua data perbaikan TV di sini.';
    } elseif (request()->routeIs('manajemen-pelanggan')) {
        $pageTitle = 'Manajemen Pelanggan';
        $pageSubtitle = 'Kelola data pelanggan dan riwayat servis di sini.';
    } elseif (request()->routeIs('ringkasan-keuangan')) {
        $pageTitle = 'Ringkasan Keuangan';
        $pageSubtitle = 'Analisa Keuangan anda di sini.';
    } elseif (request()->routeIs('pengaturan-akun')) {
        $pageTitle = 'Pengaturan Akun';
        $pageSubtitle = 'Perbarui informasi akun dan preferensi Anda.';
    }
@endphp

   <header
                class="shrink-0 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e5e7eb] dark:border-gray-800 bg-white dark:bg-[#111418] px-6 py-3 z-10">
                <div class="flex items-center gap-4">
                    <button class="md:hidden p-2 text-slate-500">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <div class="flex flex-col">
                        <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">{{ $pageTitle }}
                        </h2>
                        <p class="text-slate-500 dark:text-slate-400 text-xs hidden sm:block">{{ $pageSubtitle }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 sm:gap-6">
                    <div class="hidden lg:flex relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input
                            class="block w-64 rounded-lg border-0 py-2 pl-10 ring-1 ring-inset ring-slate-200 dark:ring-gray-700 bg-slate-50 dark:bg-gray-800 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6 dark:text-white transition-shadow"
                            placeholder="Cari Order ID, Nama..." type="text" />
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="relative flex p-2 rounded-full hover:bg-slate-100 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-300 transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                            <span class="absolute top-2 right-2 flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                            </span>
                        </button>
                        <button
                            class="flex p-2 rounded-full hover:bg-slate-100 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-300 transition-colors">
                            <span class="material-symbols-outlined">help</span>
                        </button>
                    </div>
                    <div class="h-8 w-px bg-slate-200 dark:bg-gray-700"></div>
                    <div class="flex items-center gap-3">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold text-slate-900 dark:text-white">Budi Santoso</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Owner &amp; Lead Tech</p>
                        </div>
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-white dark:ring-gray-800 shadow-sm cursor-pointer"
                            data-alt="Portrait of the user Budi Santoso"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkiBxcT_fTH4HZRVc-8LsYsrN8adQwV7hJ6qn2Kf7i8wYB9osRAaPRbC2qclDGIp-dkjMODr_w9Y19vgNm-Cwm6Oc4Asa1lul5IDXxT4xsRhFJ4QXABv4-_IQ20paSqqffpxJwlYnzgDuQtKd-LPo0T-EdqJ4FBFnWqy2CtwiPtPKwJTeexe6Uc9gUkyyt0Ggh4GlCPhRTeThIcTd8ud4S2r2_8JA2BJDrZEy486nd7FKH2qhXvNcYYdSFeN2QW1R-2klzDncw_zQJ");'>
                        </div>
                    </div>
                </div>
            </header>
