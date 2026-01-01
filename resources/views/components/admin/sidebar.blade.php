        <aside id="sidebar-menu"
            class="w-65 shrink-0 border-r border-[#e5e7eb] dark:border-gray-800 bg-white dark:bg-[#111418] flex flex-col justify-between p-4 overflow-y-auto hidden md:flex transition-all duration-300 ease-in-out">
            <div class="flex flex-col gap-6">
                <div class="flex items-center justify-between px-2" id="container-sidebar-brand">
                    <div id="sidebar-brand" class="flex items-center gap-3">
                        <divs
                            class="flex items-center justify-center size-10 bg-primary text-white rounded-xl shadow-sm shadow-blue-500/20">
                            <span class="material-symbols-outlined text-[24px]">connected_tv</span>
                        </divs>
                        <div class="sidebar-text flex flex-col transition-opacity duration-300">
                            <h1 class="text-base font-bold leading-normal text-slate-900 dark:text-white">Televix</h1>
                            <p class="text-slate-500 dark:text-slate-400 text-xs font-medium leading-normal">Owner Panel
                            </p>
                        </div>
                    </div>
                    <button id="sidebar-toggle-btn"
                        class="p-2 flex rounded-md align-items-center justify-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 hover:bg-slate-100 dark:hover:bg-gray-800 transition-colors"
                        title="Toggle Sidebar">
                        <span id="toggle-icon" class="material-symbols-outlined text-[20px]">menu_open</span>
                    </button>
                </div>
                <nav class="flex flex-col gap-1.5 px-1">
                    @if (auth()->user()->hasPermission('view_dashboard'))
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors"
                            href="{{ route('dashboard') }}">
                            <span class="material-symbols-outlined text-[20px]">dashboard</span>
                            <span
                                class="sidebar-text text-sm {{ request()->routeIs('dashboard') ? 'font-semibold' : 'font-medium' }} flex-1 opacity-100">Dashboard</span>
                        </a>
                    @endif

                    @if (auth()->user()->hasPermission('view_orders') || auth()->user()->hasPermission('view_customers'))
                        <div class="sidebar-text px-3 pt-2 pb-1 opacity-100">
                            <p
                                class="text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">
                                Operasional</p>
                        </div>
                    @endif

                    @if (auth()->user()->hasPermission('view_orders'))
                        <a class="group flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->routeIs('manajemen-servis.*') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors"
                            href="{{ route('manajemen-servis.index') }}">
                            <span
                                class="material-symbols-outlined text-[20px] {{ request()->routeIs('manajemen-servis.*') ? '' : 'group-hover:text-slate-800 dark:group-hover:text-slate-200' }} transition-colors">home_repair_service</span>
                            <span
                                class="sidebar-text text-sm {{ request()->routeIs('manajemen-servis.*') ? 'font-semibold' : 'font-medium group-hover:text-slate-900 dark:group-hover:text-white' }} flex-1 transition-colors opacity-100">Manajemen
                                Servis
                        </a>
                    @endif

                    @if (auth()->user()->hasPermission('view_customers'))
                        <a class="group flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->routeIs('manajemen-pelanggan') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors"
                            href="{{ route('manajemen-pelanggan') }}">
                            <span
                                class="material-symbols-outlined text-[20px] {{ request()->routeIs('manajemen-pelanggan') ? '' : 'group-hover:text-slate-800 dark:group-hover:text-slate-200' }} transition-colors">groups</span>
                            <span
                                class="sidebar-text text-sm {{ request()->routeIs('manajemen-pelanggan') ? 'font-semibold' : 'font-medium group-hover:text-slate-900 dark:group-hover:text-white' }} flex-1 transition-colors opacity-100">Manajemen
                                Pelanggan</span>
                        </a>
                    @endif

                    @if (auth()->user()->hasPermission('view_payments'))
                        <a class="group flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->routeIs('pembayaran.*') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors"
                            href="{{ route('pembayaran.index') }}">
                            <span
                                class="material-symbols-outlined text-[20px] {{ request()->routeIs('pembayaran.*') ? '' : 'group-hover:text-slate-800 dark:group-hover:text-slate-200' }} transition-colors">payments</span>
                            <span
                                class="sidebar-text text-sm {{ request()->routeIs('pembayaran.*') ? 'font-semibold' : 'font-medium group-hover:text-slate-900 dark:group-hover:text-white' }} flex-1 transition-colors opacity-100">Pembayaran</span>
                        </a>
                    @endif

                    @if (auth()->user()->hasPermission('view_reports') ||
                            auth()->user()->hasPermission('view_settings') ||
                            auth()->user()->hasPermission('view_users'))
                        <div class="sidebar-text px-3 pt-3 pb-1 opacity-100">
                            <p
                                class="sidebar-text text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">
                                Manajemen</p>
                        </div>
                    @endif

                    @if (auth()->user()->hasPermission('view_reports'))
                        <details class="group select-none dropdown-details"
                            {{ request()->routeIs('ringkasan-keuangan', 'laporan-operasional') ? 'open' : '' }}>
                            <summary
                                class="dropdown-toggle flex items-center justify-between gap-2 px-3 py-2.5 rounded-lg {{ request()->routeIs('ringkasan-keuangan', 'laporan-operasional') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-[20px] {{ request()->routeIs('ringkasan-keuangan', 'laporan-operasional') ? '' : 'group-hover:text-slate-800 dark:group-hover:text-slate-200' }} transition-colors">analytics</span>
                                    <span
                                        class="sidebar-text text-sm {{ request()->routeIs('ringkasan-keuangan', 'laporan-operasional') ? 'font-semibold' : 'font-medium group-hover:text-slate-900 dark:group-hover:text-white' }} transition-colors opacity-100">Laporan
                                        &amp; Analisis</span>
                                </div>
                                <span
                                    class="dropdown-arrow material-symbols-outlined text-[18px] text-slate-400 transition-transform duration-200 group-open:rotate-180 opacity-100">expand_more</span>
                            </summary>
                            <div class="dropdown-content flex flex-col gap-1 mt-1 pl-9 pr-1">
                                <a class="flex items-center gap-2 px-2 py-2 rounded-md {{ request()->routeIs('ringkasan-keuangan') ? 'text-primary bg-blue-50/50 dark:bg-blue-900/20 font-medium' : 'text-slate-500 dark:text-slate-500 hover:text-primary hover:bg-blue-50/50 dark:hover:bg-blue-900/10' }} transition-colors"
                                    href="{{ route('ringkasan-keuangan') }}">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-current {{ request()->routeIs('ringkasan-keuangan') ? 'opacity-100' : 'opacity-40' }}"></span>
                                    <span
                                        class="sidebar-text text-xs {{ request()->routeIs('ringkasan-keuangan') ? 'font-semibold' : 'font-medium' }} opacity-100">Ringkasan
                                        Keuangan</span>
                                </a>
                                <a class="flex items-center gap-2 px-2 py-2 rounded-md {{ request()->routeIs('laporan-operasional') ? 'text-primary bg-blue-50/50 dark:bg-blue-900/20 font-medium' : 'text-slate-500 dark:text-slate-500 hover:text-primary hover:bg-blue-50/50 dark:hover:bg-blue-900/10' }} transition-colors"
                                    href="{{ route('laporan-operasional') }}">
                                    <span
                                        class="w-1.5 h-1.5 rounded-full bg-current {{ request()->routeIs('laporan-operasional') ? 'opacity-100' : 'opacity-40' }}"></span>
                                    <span
                                        class="sidebar-text text-xs {{ request()->routeIs('laporan-operasional') ? 'font-semibold' : 'font-medium' }} opacity-100">Laporan
                                        Operasional</span>
                                </a>
                            </div>
                        </details>
                    @endif

                    @if (auth()->user()->hasPermission('view_settings') || auth()->user()->hasPermission('view_users'))
                        <details class="group select-none dropdown-details"
                            {{ request()->routeIs('pengaturan-umum', 'manajemen-staff-rbac.index') ? 'open' : '' }}>
                            <summary
                                class="dropdown-toggle flex items-center justify-between gap-2 px-3 py-2.5 rounded-lg {{ request()->routeIs('pengaturan-umum', 'manajemen-staff-rbac.index') ? 'bg-primary/10 text-primary font-medium' : 'hover:bg-slate-50 dark:hover:bg-gray-800 text-slate-600 dark:text-slate-400' }} transition-colors cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-[20px] {{ request()->routeIs('pengaturan-umum', 'manajemen-staff-rbac.index') ? '' : 'group-hover:text-slate-800 dark:group-hover:text-slate-200' }} transition-colors">admin_panel_settings</span>
                                    <span
                                        class="sidebar-text text-sm {{ request()->routeIs('pengaturan-umum', 'manajemen-staff-rbac.index') ? 'font-semibold' : 'font-medium group-hover:text-slate-900 dark:group-hover:text-white' }} transition-colors opacity-100">Pengaturan
                                        Sistem</span>
                                </div>
                                <span
                                    class="dropdown-arrow material-symbols-outlined text-[18px] text-slate-400 transition-transform duration-200 group-open:rotate-180 opacity-100">expand_more</span>
                            </summary>
                            <div class="dropdown-content flex flex-col gap-1 mt-1 pl-9 pr-1">
                                @if (auth()->user()->hasPermission('view_settings'))
                                    <a class="flex items-center gap-2 px-2 py-2 rounded-md {{ request()->routeIs('pengaturan-umum') ? 'text-primary bg-blue-50/50 dark:bg-blue-900/20 font-medium' : 'text-slate-500 dark:text-slate-500 hover:text-primary hover:bg-blue-50/50 dark:hover:bg-blue-900/10' }} transition-colors"
                                        href="{{ route('pengaturan-umum') }}">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-current {{ request()->routeIs('pengaturan-umum') ? 'opacity-100' : 'opacity-40' }}"></span>
                                        <span
                                            class="sidebar-text text-xs {{ request()->routeIs('pengaturan-umum') ? 'font-semibold' : 'font-medium' }} opacity-100">Pengaturan
                                            Umum</span>
                                    </a>
                                @endif

                                @if (auth()->user()->hasPermission('view_users'))
                                    <a class="flex items-center gap-2 px-2 py-2 rounded-md {{ request()->routeIs('manajemen-staff-rbac.index') ? 'text-primary bg-blue-50/50 dark:bg-blue-900/20 font-medium' : 'text-slate-500 dark:text-slate-500 hover:text-primary hover:bg-blue-50/50 dark:hover:bg-blue-900/10' }} transition-colors"
                                        href="{{ route('manajemen-staff-rbac.index') }}">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-current {{ request()->routeIs('manajemen-staff-rbac.index') ? 'opacity-100' : 'opacity-40' }}"></span>
                                        <span
                                            class="sidebar-text text-xs {{ request()->routeIs('manajemen-staff-rbac.index') ? 'font-semibold' : 'font-medium' }} opacity-100">Manajemen
                                            Staff &amp; Akses (RBAC)</span>
                                    </a>
                                @endif
                            </div>
                        </details>
                    @endif

                    <div class="h-px bg-slate-100 dark:bg-gray-800 my-2 mx-2"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="group flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/10 text-slate-600 dark:text-slate-400 transition-colors w-full">
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:text-red-500 transition-colors">logout</span>
                            <span
                                class="sidebar-text text-sm font-medium group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors opacity-100">Keluar</span>
                        </button>
                    </form>
                </nav>
            </div>

        </aside>
