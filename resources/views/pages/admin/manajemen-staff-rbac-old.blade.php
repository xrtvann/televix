<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
            {{-- Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Manajemen Staff & Akses (RBAC)</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Kelola pengguna, role, dan hak akses
                        sistem
                    </p>
                </div>
                <button
                    class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                    <span class="material-symbols-outlined text-[20px]">person_add</span>
                    Tambah Staff Baru
                </button>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Staff</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">8</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-blue-50 text-blue-600 rounded-xl dark:bg-blue-900/20 dark:text-blue-400">
                            <span class="material-symbols-outlined text-[28px]">group</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xs text-slate-400">3 Admin, 5 Staff</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Aktif Hari Ini</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">6</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-green-50 text-green-600 rounded-xl dark:bg-green-900/20 dark:text-green-400">
                            <span class="material-symbols-outlined text-[28px]">check_circle</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                            75% Online
                        </span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Role</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">4</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-purple-50 text-purple-600 rounded-xl dark:bg-purple-900/20 dark:text-purple-400">
                            <span class="material-symbols-outlined text-[28px]">badge</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xs text-slate-400">Owner, Admin, Teknisi, CS</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending Approval</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">2</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-orange-50 text-orange-600 rounded-xl dark:bg-orange-900/20 dark:text-orange-400">
                            <span class="material-symbols-outlined text-[28px]">pending</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xs text-orange-600 dark:text-orange-400">Butuh persetujuan</span>
                    </div>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Daftar Staff --}}
                <div class="lg:col-span-2 space-y-6">
                    {{-- Filter & Search --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-4">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div class="relative sm:col-span-2">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[18px]">search</span>
                                <input
                                    class="w-full pl-9 pr-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    placeholder="Cari nama atau email staff..." type="text" />
                            </div>
                            <select
                                class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua Role</option>
                                <option value="owner">Owner</option>
                                <option value="admin">Admin</option>
                                <option value="teknisi">Teknisi</option>
                                <option value="cs">Customer Service</option>
                            </select>
                        </div>
                    </div>

                    {{-- Staff List --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                        <th
                                            class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                            Staff</th>
                                        <th
                                            class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                            Role</th>
                                        <th
                                            class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                            Last Active</th>
                                        <th
                                            class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                        <td class="py-4 px-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    AP
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Andi
                                                        Pratama</p>
                                                    <p class="text-xs text-slate-500">andi.pratama@televix.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300">
                                                <span class="material-symbols-outlined text-[14px] mr-1">shield</span>
                                                Owner
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                                <span class="size-1.5 rounded-full bg-green-600 animate-pulse"></span>
                                                Online
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">Sekarang</span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 dark:hover:bg-gray-700 transition-colors"
                                                    title="More">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                        <td class="py-4 px-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    SA
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Siti
                                                        Aminah</p>
                                                    <p class="text-xs text-slate-500">siti.aminah@televix.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
                                                <span
                                                    class="material-symbols-outlined text-[14px] mr-1">admin_panel_settings</span>
                                                Admin
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                                <span class="size-1.5 rounded-full bg-green-600 animate-pulse"></span>
                                                Online
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">2 menit
                                                lalu</span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 dark:hover:bg-gray-700 transition-colors"
                                                    title="More">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                        <td class="py-4 px-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    DK
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                        Dedi
                                                        Kurniawan</p>
                                                    <p class="text-xs text-slate-500">dedi.k@televix.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300">
                                                <span
                                                    class="material-symbols-outlined text-[14px] mr-1">engineering</span>
                                                Teknisi
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                                <span class="size-1.5 rounded-full bg-green-600 animate-pulse"></span>
                                                Online
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">5 menit
                                                lalu</span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 dark:hover:bg-gray-700 transition-colors"
                                                    title="More">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                        <td class="py-4 px-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    RH
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                        Rudi
                                                        Hartono</p>
                                                    <p class="text-xs text-slate-500">rudi.h@televix.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300">
                                                <span
                                                    class="material-symbols-outlined text-[14px] mr-1">engineering</span>
                                                Teknisi
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300">
                                                <span class="size-1.5 rounded-full bg-slate-400"></span>
                                                Offline
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">1 jam lalu</span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 dark:hover:bg-gray-700 transition-colors"
                                                    title="More">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                        <td class="py-4 px-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    LP
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                        Lisa
                                                        Permata</p>
                                                    <p class="text-xs text-slate-500">lisa.p@televix.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700 dark:bg-teal-900/30 dark:text-teal-300">
                                                <span
                                                    class="material-symbols-outlined text-[14px] mr-1">support_agent</span>
                                                CS
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                                <span class="size-1.5 rounded-full bg-green-600 animate-pulse"></span>
                                                Online
                                            </span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <span class="text-sm text-slate-600 dark:text-slate-400">Sekarang</span>
                                        </td>
                                        <td class="py-4 px-5">
                                            <div class="flex items-center justify-end gap-2">
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button
                                                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 dark:hover:bg-gray-700 transition-colors"
                                                    title="More">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Sidebar - Role & Permissions --}}
                <div class="space-y-6">
                    {{-- Role Management --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Role Management</h3>
                            <button
                                class="p-2 rounded-lg text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                            </button>
                        </div>
                        <div class="space-y-3">
                            <div
                                class="p-4 rounded-lg border-2 border-purple-200 dark:border-purple-800 bg-purple-50 dark:bg-purple-900/10">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-purple-600 dark:text-purple-400">shield</span>
                                        <h4 class="text-sm font-bold text-purple-900 dark:text-purple-100">Owner</h4>
                                    </div>
                                    <span
                                        class="text-xs px-2 py-0.5 rounded-full bg-purple-200 dark:bg-purple-800 text-purple-900 dark:text-purple-100">1
                                        User</span>
                                </div>
                                <p class="text-xs text-purple-700 dark:text-purple-300 mb-2">Full akses ke semua fitur
                                    sistem</p>
                                <div class="flex flex-wrap gap-1">
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-purple-200 dark:bg-purple-800 text-purple-900 dark:text-purple-100">All
                                        Permissions</span>
                                </div>
                            </div>
                            <div
                                class="p-4 rounded-lg border border-slate-200 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-700 transition-colors cursor-pointer">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-blue-600 dark:text-blue-400">admin_panel_settings</span>
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Admin</h4>
                                    </div>
                                    <span
                                        class="text-xs px-2 py-0.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">2
                                        Users</span>
                                </div>
                                <p class="text-xs text-slate-600 dark:text-slate-400 mb-2">Kelola order, staff, dan
                                    laporan</p>
                                <div class="flex flex-wrap gap-1">
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Orders</span>
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Staff</span>
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Reports</span>
                                </div>
                            </div>
                            <div
                                class="p-4 rounded-lg border border-slate-200 dark:border-gray-700 hover:border-orange-300 dark:hover:border-orange-700 transition-colors cursor-pointer">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-orange-600 dark:text-orange-400">engineering</span>
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Teknisi</h4>
                                    </div>
                                    <span
                                        class="text-xs px-2 py-0.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">3
                                        Users</span>
                                </div>
                                <p class="text-xs text-slate-600 dark:text-slate-400 mb-2">Update order & diagnosa</p>
                                <div class="flex flex-wrap gap-1">
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">View
                                        Orders</span>
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Update
                                        Status</span>
                                </div>
                            </div>
                            <div
                                class="p-4 rounded-lg border border-slate-200 dark:border-gray-700 hover:border-teal-300 dark:hover:border-teal-700 transition-colors cursor-pointer">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="material-symbols-outlined text-teal-600 dark:text-teal-400">support_agent</span>
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Customer Service
                                        </h4>
                                    </div>
                                    <span
                                        class="text-xs px-2 py-0.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">2
                                        Users</span>
                                </div>
                                <p class="text-xs text-slate-600 dark:text-slate-400 mb-2">Kelola pelanggan & order
                                    baru
                                </p>
                                <div class="flex flex-wrap gap-1">
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Customers</span>
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Create
                                        Orders</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Activity Log --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-6">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Activity Log</h3>
                        <div class="space-y-4">
                            <div class="flex gap-3">
                                <div
                                    class="size-8 rounded-full bg-blue-100 dark:bg-blue-900/20 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-blue-600 dark:text-blue-400">login</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-slate-900 dark:text-white font-medium">Siti Aminah login</p>
                                    <p class="text-xs text-slate-500 mt-0.5">2 menit lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div
                                    class="size-8 rounded-full bg-green-100 dark:bg-green-900/20 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-green-600 dark:text-green-400">person_add</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-slate-900 dark:text-white font-medium">Teknisi baru
                                        ditambahkan</p>
                                    <p class="text-xs text-slate-500 mt-0.5">1 jam lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div
                                    class="size-8 rounded-full bg-orange-100 dark:bg-orange-900/20 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-orange-600 dark:text-orange-400">edit</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-slate-900 dark:text-white font-medium">Permission updated
                                    </p>
                                    <p class="text-xs text-slate-500 mt-0.5">3 jam lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div
                                    class="size-8 rounded-full bg-red-100 dark:bg-red-900/20 flex items-center justify-center shrink-0">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-red-600 dark:text-red-400">logout</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-slate-900 dark:text-white font-medium">Rudi Hartono logout
                                    </p>
                                    <p class="text-xs text-slate-500 mt-0.5">1 jam lalu</p>
                                </div>
                            </div>
                        </div>
                        <button class="w-full mt-4 text-sm text-primary font-medium hover:underline">
                            Lihat Semua Activity
                        </button>
                    </div>
                </div>
            </div>

            {{-- Permissions Matrix --}}
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-200 dark:border-gray-800">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Permissions Matrix</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Kontrol akses berdasarkan role</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                <th
                                    class="py-3 px-6 text-sm font-bold text-slate-700 dark:text-slate-300 sticky left-0 bg-slate-50 dark:bg-gray-800/50">
                                    Module / Permission
                                </th>
                                <th
                                    class="py-3 px-6 text-sm font-bold text-purple-700 dark:text-purple-300 text-center">
                                    Owner</th>
                                <th class="py-3 px-6 text-sm font-bold text-blue-700 dark:text-blue-300 text-center">
                                    Admin</th>
                                <th
                                    class="py-3 px-6 text-sm font-bold text-orange-700 dark:text-orange-300 text-center">
                                    Teknisi</th>
                                <th class="py-3 px-6 text-sm font-bold text-teal-700 dark:text-teal-300 text-center">CS
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Dashboard
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Create Order
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Edit Order
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-orange-600">edit</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Delete Order
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Manage Customers
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    View Reports
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    Manage Staff
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50">
                                <td
                                    class="py-3 px-6 text-sm font-semibold text-slate-900 dark:text-white sticky left-0 bg-white dark:bg-[#111418] group-hover:bg-slate-50 dark:group-hover:bg-gray-800/50">
                                    System Settings
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="material-symbols-outlined text-slate-300">cancel</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.app>
