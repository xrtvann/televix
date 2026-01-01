@php
    $user = auth()->user();
    $user->loadMissing('roles');

    $userName = $user->name ?? 'User';
    $userEmail = $user->email ?? '';
    $userRole = $user->roles->first()->display_name ?? 'Staff';

    $pageTitle = 'Dashboard Overview';
    $pageSubtitle = 'Selamat datang kembali, ' . explode(' ', $userName)[0] . '.';

    if (request()->routeIs('manajemen-servis.*')) {
        $pageTitle = 'Manajemen Servis';
        $pageSubtitle = 'Kelola semua data perbaikan TV di sini.';
    } elseif (request()->routeIs('manajemen-pelanggan')) {
        $pageTitle = 'Manajemen Pelanggan';
        $pageSubtitle = 'Kelola data pelanggan dan riwayat servis di sini.';
    } elseif (request()->routeIs('pembayaran.*')) {
        $pageTitle = 'Pembayaran';
        $pageSubtitle = 'Kelola pembayaran untuk order yang sudah selesai.';
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

        <!-- User Profile Dropdown -->
        <div class="relative group">
            <button class="flex items-center gap-3 hover:opacity-80 transition-opacity">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-slate-900 dark:text-white">{{ $userName }}</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">{{ $userRole }}</p>
                </div>
                @if ($user->avatar)
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-white dark:ring-gray-800 shadow-sm cursor-pointer"
                        style='background-image: url("{{ asset('storage/' . $user->avatar) }}");'>
                    </div>
                @else
                    <div
                        class="flex items-center justify-center size-10 rounded-full bg-gradient-to-br from-primary to-blue-600 text-white font-semibold ring-2 ring-white dark:ring-gray-800 shadow-sm cursor-pointer">
                        {{ strtoupper(substr($userName, 0, 1)) }}
                    </div>
                @endif
            </button>

            <!-- Dropdown Menu -->
            <div
                class="absolute right-0 mt-2 w-64 bg-white dark:bg-[#111418] rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="p-4 border-b border-slate-200 dark:border-gray-700">
                    <p class="text-sm font-semibold text-slate-900 dark:text-white">{{ $userName }}</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">{{ $userEmail }}</p>
                    <p class="text-xs text-primary font-medium mt-1">{{ $userRole }}</p>
                </div>
                <div class="py-2">
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">person</span>
                        <span>Profil Saya</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">settings</span>
                        <span>Pengaturan</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">help</span>
                        <span>Bantuan</span>
                    </a>
                </div>
                <div class="border-t border-slate-200 dark:border-gray-700 py-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-3 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors w-full">
                            <span class="material-symbols-outlined text-[18px]">logout</span>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
