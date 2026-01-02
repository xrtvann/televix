<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-[1400px] mx-auto flex flex-col gap-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex gap-2 items-center">
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Daftar Pelanggan</h1>
                    <span
                        class="px-2 py-0.5 rounded-full bg-slate-100 dark:bg-gray-800 text-slate-600 dark:text-slate-400 text-xs font-semibold">Total:
                        {{ $totalCustomers }}</span>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button id="exportCsvBtn"
                        class="flex-1 sm:flex-none bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">file_download</span>
                        <span class="hidden sm:inline">Export CSV</span>
                    </button>
                    <button id="createCustomerBtn"
                        class="flex-1 sm:flex-none bg-primary hover:bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">person_add</span>
                        Tambah Pelanggan Baru
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] p-4 rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm">
                <form method="GET" action="{{ route('manajemen-pelanggan.index') }}"
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="relative col-span-1 lg:col-span-2">
                        <label class="block text-xs font-medium text-slate-500 mb-1">Pencarian</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-2 top-2 text-slate-400 text-[18px]">search</span>
                            <input name="search" value="{{ request('search') }}"
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                placeholder="Nama, Telepon, atau Email..." type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Urutkan Berdasarkan</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-2 top-2 text-slate-400 text-[18px]">sort</span>
                            <select name="sort" onchange="this.form.submit()"
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="nama_asc" {{ request('sort') == 'nama_asc' ? 'selected' : '' }}>Nama
                                    (A-Z)</option>
                                <option value="nama_desc" {{ request('sort') == 'nama_desc' ? 'selected' : '' }}>Nama
                                    (Z-A)</option>
                                <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Pelanggan
                                    Terbaru</option>
                                <option value="servis_terbanyak"
                                    {{ request('sort') == 'servis_terbanyak' ? 'selected' : '' }}>Servis Terbanyak
                                </option>
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
                            <select name="status" onchange="this.form.submit()"
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua</option>
                                <option value="aktif" {{ request('status') == 'aktif' ? 'selected' : '' }}>Sedang
                                    Servis</option>
                                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Pernah
                                    Servis</option>
                                <option value="baru" {{ request('status') == 'baru' ? 'selected' : '' }}>Pelanggan
                                    Baru</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-[18px] pointer-events-none">expand_more</span>
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden flex-1">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="sticky top-0 z-10">
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
                            @forelse($customers as $customer)
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="size-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 flex items-center justify-center font-bold text-xs">
                                                {{ strtoupper(substr($customer->name, 0, 2)) }}
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-slate-900 dark:text-white hover:text-primary cursor-pointer">{{ $customer->name }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-0.5">
                                            <div
                                                class="flex items-center gap-1.5 text-xs text-slate-600 dark:text-slate-300">
                                                <span
                                                    class="material-symbols-outlined text-[14px] text-slate-400">call</span>
                                                {{ $customer->phone }}
                                            </div>
                                            @if ($customer->email)
                                                <div
                                                    class="flex items-center gap-1.5 text-xs text-slate-500 dark:text-slate-400">
                                                    <span
                                                        class="material-symbols-outlined text-[14px] text-slate-400">mail</span>
                                                    {{ $customer->email }}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($customer->address)
                                            <div class="flex items-start gap-1.5 max-w-[200px]">
                                                <span
                                                    class="material-symbols-outlined text-[14px] text-slate-400 mt-0.5 shrink-0">location_on</span>
                                                <span
                                                    class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $customer->address }}</span>
                                            </div>
                                        @else
                                            <span class="text-xs text-slate-400">-</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="text-sm font-semibold text-slate-900 dark:text-white">{{ $customer->total_services }}
                                                Unit</span>
                                            @php
                                                $activeCount = $customer->activeServices()->count();
                                            @endphp
                                            @if ($activeCount > 0)
                                                <span
                                                    class="px-1.5 py-0.5 rounded text-[10px] bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300 font-medium">{{ $activeCount }}
                                                    Sedang Servis</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">
                                            {{ $customer->last_service_at ? $customer->last_service_at->format('d M Y') : '-' }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('manajemen-pelanggan.show', $customer) }}"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                                title="Lihat Detail Pelanggan">
                                                <span class="material-symbols-outlined text-[16px]">visibility</span>
                                                <span>Detail</span>
                                            </a>
                                            <div class="relative group/menu">
                                                <button
                                                    class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                    title="Menu Aksi">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                                <div
                                                    class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                    <div class="py-1">
                                                        <button onclick="openEditModal({{ $customer->id }})"
                                                            class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                            <span
                                                                class="material-symbols-outlined text-[18px]">edit</span>
                                                            <span>Edit Pelanggan</span>
                                                        </button>
                                                        <a href="{{ route('manajemen-pelanggan.show', $customer) }}"
                                                            class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                            <span
                                                                class="material-symbols-outlined text-[18px]">history</span>
                                                            <span>Riwayat Servis</span>
                                                        </a>
                                                        <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                        <button
                                                            onclick="openDeleteModal({{ $customer->id }}, '{{ $customer->name }}')"
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
                            @empty
                                <tr>
                                    <td colspan="6" class="py-12 text-center">
                                        <div class="flex flex-col items-center gap-2">
                                            <span
                                                class="material-symbols-outlined text-slate-300 dark:text-gray-700 text-5xl">person_off</span>
                                            <p class="text-slate-500 dark:text-slate-400 text-sm">Tidak ada data
                                                pelanggan</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($customers->hasPages())
                    <div
                        class="p-4 border-t border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-slate-500 dark:text-slate-400">
                            Menampilkan <span
                                class="font-medium text-slate-900 dark:text-white">{{ $customers->firstItem() }}</span>
                            sampai <span
                                class="font-medium text-slate-900 dark:text-white">{{ $customers->lastItem() }}</span>
                            dari <span
                                class="font-medium text-slate-900 dark:text-white">{{ $customers->total() }}</span>
                            pelanggan
                        </span>
                        {{ $customers->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Set customers data for JavaScript
        const customersData = @json($customers->items());
        if (typeof setCustomersData === 'function') {
            setCustomersData(customersData);
        }
    </script>

    @vite('resources/js/manajemen-pelanggan.js')
</x-layouts.admin.app>
