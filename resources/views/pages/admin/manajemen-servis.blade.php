<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-[1400px] mx-auto flex flex-col gap-6">
            {{-- Success/Error Messages --}}
            @if (session('success'))
                <div
                    class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-800 dark:text-green-200 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div
                    class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-800 dark:text-red-200 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex gap-2 items-center">
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Daftar Order Servis</h1>
                    <span
                        class="px-2 py-0.5 rounded-full bg-slate-100 dark:bg-gray-800 text-slate-600 dark:text-slate-400 text-xs font-semibold">Total:
                        {{ $totalOrders }}</span>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button id="exportCsvBtn"
                        class="cursor-pointer flex-1 sm:flex-none bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">file_download</span>
                        <span class="hidden sm:inline">Export CSV</span>
                    </button>
                    <button id="createOrderBtn"
                        class="flex-1 sm:flex-none cursor-pointer bg-primary hover:bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        Buat Order Baru
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#111418] p-4 rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm">
                <form method="GET" action="{{ route('manajemen-servis.index') }}"
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="relative">
                        <label class="block text-xs font-medium text-slate-500 mb-1">Pencarian</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">search</span>
                            <input name="search" value="{{ request('search') }}"
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                placeholder="ID Order, Nama Pelanggan..." type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 mb-1">Filter Status</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-2 text-slate-400 text-[18px]">filter_list</span>
                            <select name="status" onchange="this.form.submit()"
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua Status</option>
                                <option value="baru" {{ request('status') == 'baru' ? 'selected' : '' }}>Baru Masuk
                                </option>
                                <option value="diagnosa" {{ request('status') == 'diagnosa' ? 'selected' : '' }}>
                                    Diagnosa</option>
                                <option value="pengerjaan" {{ request('status') == 'pengerjaan' ? 'selected' : '' }}>
                                    Sedang Dikerjakan</option>
                                <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>
                                    Menunggu Sparepart</option>
                                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai
                                </option>
                                <option value="batal" {{ request('status') == 'batal' ? 'selected' : '' }}>Dibatalkan
                                </option>
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
                            <select name="technician_id" onchange="this.form.submit()"
                                class="w-full pl-9 pr-8 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none cursor-pointer">
                                <option value="">Semua Teknisi</option>
                                @foreach ($technicians as $tech)
                                    <option value="{{ $tech->id }}"
                                        {{ request('technician_id') == $tech->id ? 'selected' : '' }}>
                                        {{ $tech->name }}
                                    </option>
                                @endforeach
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
                            <input name="date" value="{{ request('date') }}" onchange="this.form.submit()"
                                class="w-full pl-9 pr-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/50"
                                type="date" />
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
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap w-16">
                                    No</th>
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
                            @forelse($orders as $order)
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-4 px-6 whitespace-nowrap text-center">
                                        <span class="text-sm text-slate-600 dark:text-slate-400">
                                            {{ $orders->firstItem() + $loop->index }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                            href="{{ route('manajemen-servis.show', $order) }}">
                                            #{{ $order->order_number }}
                                        </a>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">
                                                {{ $order->customer_name }}
                                            </span>
                                            <span class="text-xs text-slate-500">{{ $order->customer_phone }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col">
                                            <span class="text-sm font-medium text-slate-900 dark:text-white">
                                                {{ $order->device_brand }} {{ $order->device_type }}
                                                @if ($order->device_model)
                                                    {{ $order->device_model }}
                                                @endif
                                            </span>
                                            <span class="text-xs text-slate-500 truncate max-w-[200px]"
                                                title="{{ $order->problem_description }}">
                                                {{ $order->problem_description }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($order->technician)
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="p-2 rounded-full bg-linear-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-semibold text-[10px] shadow-sm">
                                                    {{ strtoupper(substr($order->technician->name, 0, 2)) }}
                                                </div>
                                                <span
                                                    class="text-sm text-slate-600 dark:text-slate-300">{{ $order->technician->name }}</span>
                                            </div>
                                        @else
                                            <span class="text-sm text-slate-400 italic">- Belum ditentukan -</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">
                                            {{ $order->received_at ? $order->received_at->format('d M Y') : '-' }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $order->status_badge_class }}">
                                            {{ $order->status_label }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('manajemen-servis.show', $order) }}"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                                title="Lihat Detail Order">
                                                <span class="material-symbols-outlined text-[16px]">visibility</span>
                                                <span>Detail</span>
                                            </a>
                                            <div class="relative group/menu">
                                                <button
                                                    class="inline-flex items-center justify-center size-10 rounded-lg text-slate-600 dark:text-slate-400 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-700 border border-slate-200 dark:border-gray-600 transition-all hover:shadow-sm"
                                                    title="Menu Aksi">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                                <div
                                                    class="absolute right-0 top-full mt-1 w-44 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-slate-200 dark:border-gray-700 opacity-0 invisible group-hover/menu:opacity-100 group-hover/menu:visible transition-all duration-200 z-10">
                                                    <div class="py-1">
                                                        <button onclick="openEditModal({{ $order->id }})"
                                                            class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                            <span
                                                                class="material-symbols-outlined text-[18px]">edit</span>
                                                            <span>Edit Order</span>
                                                        </button>
                                                        @if (!$order->technician_id)
                                                            <button onclick="openAssignModal({{ $order->id }})"
                                                                class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                                <span
                                                                    class="material-symbols-outlined text-[18px]">person_add</span>
                                                                <span>Assign Teknisi</span>
                                                            </button>
                                                        @endif
                                                        <button
                                                            onclick="openStatusModal({{ $order->id }}, '{{ $order->status }}')"
                                                            class="w-full flex items-center gap-2 px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                                                            <span
                                                                class="material-symbols-outlined text-[18px]">sync</span>
                                                            <span>Update Status</span>
                                                        </button>
                                                        <div class="h-px bg-slate-200 dark:bg-gray-700 my-1"></div>
                                                        <form action="{{ route('manajemen-servis.destroy', $order) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus order {{ $order->order_number }}?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                                                                <span
                                                                    class="material-symbols-outlined text-[18px]">delete</span>
                                                                <span>Hapus</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-12 text-center">
                                        <div class="flex flex-col items-center gap-2">
                                            <span
                                                class="material-symbols-outlined text-[48px] text-slate-300">inbox</span>
                                            <p class="text-slate-500">Belum ada data order servis</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{-- Pagination --}}
                <div
                    class="p-4 border-t border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <span class="text-sm text-slate-500 dark:text-slate-400">
                        Menampilkan <span
                            class="font-medium text-slate-900 dark:text-white">{{ $orders->firstItem() ?? 0 }}</span>
                        sampai <span
                            class="font-medium text-slate-900 dark:text-white">{{ $orders->lastItem() ?? 0 }}</span>
                        dari <span class="font-medium text-slate-900 dark:text-white">{{ $orders->total() }}</span>
                        hasil
                    </span>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>

    {{-- Create Order Modal --}}
    <div id="createOrderModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div
                class="sticky top-0 bg-white dark:bg-[#111418] border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Buat Order Servis Baru</h3>
                    <button onclick="closeCreateModal()"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">close</span>
                    </button>
                </div>
            </div>
            <form action="{{ route('manajemen-servis.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                {{-- Customer Information --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">person</span>
                        Informasi Pelanggan
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama
                                Pelanggan <span class="text-red-500">*</span></label>
                            <input type="text" name="customer_name" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No.
                                Telepon <span class="text-red-500">*</span></label>
                            <input type="text" name="customer_phone" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Alamat</label>
                        <textarea name="customer_address" rows="2"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"></textarea>
                    </div>
                </div>

                {{-- Device Information --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">devices</span>
                        Informasi Perangkat
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Jenis
                                Perangkat <span class="text-red-500">*</span></label>
                            <input type="text" name="device_type" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"
                                placeholder="TV, Kulkas, AC, dll">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Merek
                                <span class="text-red-500">*</span></label>
                            <input type="text" name="device_brand" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"
                                placeholder="Samsung, LG, Panasonic, dll">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Model</label>
                            <input type="text" name="device_model"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Keluhan /
                            Masalah <span class="text-red-500">*</span></label>
                        <textarea name="problem_description" rows="3" required
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="Jelaskan masalah atau kerusakan yang dialami..."></textarea>
                    </div>
                </div>

                {{-- Service Details --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">settings</span>
                        Detail Servis (Opsional)
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Teknisi</label>
                            <select name="technician_id"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                                <option value="">Belum ditugaskan</option>
                                @foreach ($technicians as $tech)
                                    <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Estimasi
                                Biaya</label>
                            <input type="number" name="estimated_cost" step="1000"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"
                                placeholder="0">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Catatan
                            Awal</label>
                        <textarea name="notes" rows="2"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="Catatan tambahan (opsional)..."></textarea>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-gray-800">
                    <button type="button" onclick="closeCreateModal()"
                        class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white font-medium transition-colors shadow-sm shadow-blue-500/20">
                        Buat Order
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Edit Order Modal --}}
    <div id="editOrderModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div
                class="sticky top-0 bg-white dark:bg-[#111418] border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Edit Order Servis</h3>
                    <button onclick="closeEditModal()"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">close</span>
                    </button>
                </div>
            </div>
            <form id="editOrderForm" method="POST" class="p-6 space-y-6">
                @csrf
                @method('PUT')

                {{-- Customer Information --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">person</span>
                        Informasi Pelanggan
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama
                                Pelanggan <span class="text-red-500">*</span></label>
                            <input type="text" name="customer_name" id="edit_customer_name" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No.
                                Telepon <span class="text-red-500">*</span></label>
                            <input type="text" name="customer_phone" id="edit_customer_phone" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Alamat</label>
                        <textarea name="customer_address" id="edit_customer_address" rows="2"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"></textarea>
                    </div>
                </div>

                {{-- Device Information --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">devices</span>
                        Informasi Perangkat
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Jenis
                                Perangkat <span class="text-red-500">*</span></label>
                            <input type="text" name="device_type" id="edit_device_type" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Merek
                                <span class="text-red-500">*</span></label>
                            <input type="text" name="device_brand" id="edit_device_brand" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Model</label>
                            <input type="text" name="device_model" id="edit_device_model"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Keluhan /
                            Masalah <span class="text-red-500">*</span></label>
                        <textarea name="problem_description" id="edit_problem_description" rows="3" required
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"></textarea>
                    </div>
                </div>

                {{-- Service Details --}}
                <div class="space-y-4">
                    <h4 class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">settings</span>
                        Detail Servis
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Status
                                <span class="text-red-500">*</span></label>
                            <select name="status" id="edit_status" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                                @foreach (App\Models\ServiceOrder::getStatuses() as $key => $label)
                                    <option value="{{ $key }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Teknisi</label>
                            <select name="technician_id" id="edit_technician_id"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                                <option value="">Belum ditugaskan</option>
                                @foreach ($technicians as $tech)
                                    <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Estimasi
                                Biaya</label>
                            <input type="number" name="estimated_cost" id="edit_estimated_cost" step="1000"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Biaya
                                Final</label>
                            <input type="number" name="final_cost" id="edit_final_cost" step="1000"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Catatan
                            Servis</label>
                        <textarea name="notes" id="edit_notes" rows="3"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50"></textarea>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-gray-800">
                    <button type="button" onclick="closeEditModal()"
                        class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white font-medium transition-colors shadow-sm shadow-blue-500/20">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Assign Technician Modal --}}
    <div id="assignTechnicianModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-md w-full">
            <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Tugaskan Teknisi</h3>
                    <button onclick="closeAssignModal()"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">close</span>
                    </button>
                </div>
            </div>
            <form id="assignTechnicianForm" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pilih Teknisi
                        <span class="text-red-500">*</span></label>
                    <select name="technician_id" id="assign_technician_id" required
                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        <option value="">-- Pilih Teknisi --</option>
                        @foreach ($technicians as $tech)
                            <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                        @endforeach
                    </select>
                    <p class="mt-2 text-xs text-slate-500 dark:text-slate-400">Status akan otomatis berubah menjadi
                        "Diagnosa"</p>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-gray-800">
                    <button type="button" onclick="closeAssignModal()"
                        class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white font-medium transition-colors shadow-sm shadow-blue-500/20">
                        Tugaskan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Update Status Modal --}}
    <div id="updateStatusModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-md w-full">
            <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Update Status Order</h3>
                    <button onclick="closeStatusModal()"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">close</span>
                    </button>
                </div>
            </div>
            <form id="updateStatusForm" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Status Baru <span
                            class="text-red-500">*</span></label>
                    <select name="status" id="update_status" required
                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        @foreach (App\Models\ServiceOrder::getStatuses() as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    <p class="mt-2 text-xs text-slate-500 dark:text-slate-400">Status saat ini: <span
                            id="current_status_label" class="font-semibold"></span></p>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-gray-800">
                    <button type="button" onclick="closeStatusModal()"
                        class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white font-medium transition-colors shadow-sm shadow-blue-500/20">
                        Update Status
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Load Manajemen Servis JavaScript --}}
    @vite(['resources/js/manajemen-servis.js'])

    {{-- Initialize Orders Data --}}
    <script>
        // Pass orders data to JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof setOrdersData === 'function') {
                const ordersData = {!! json_encode(
                    $orders->map(function ($order) {
                            return [
                                'id' => $order->id,
                                'order_number' => $order->order_number,
                                'customer_name' => $order->customer_name,
                                'customer_phone' => $order->customer_phone,
                                'customer_address' => $order->customer_address,
                                'device_type' => $order->device_type,
                                'device_brand' => $order->device_brand,
                                'device_model' => $order->device_model,
                                'problem_description' => $order->problem_description,
                                'status' => $order->status,
                                'status_label' => $order->status_label,
                                'technician_id' => $order->technician_id,
                                'technician_name' => $order->technician ? $order->technician->name : '',
                                'estimated_cost' => $order->estimated_cost,
                                'final_cost' => $order->final_cost,
                                'notes' => $order->notes,
                                'received_at' => $order->received_at ? $order->received_at->format('Y-m-d H:i') : '',
                                'completed_at' => $order->completed_at ? $order->completed_at->format('Y-m-d H:i') : '',
                            ];
                        })->values(),
                ) !!};
                setOrdersData(ordersData);
            }
        });
    </script>
</x-layouts.admin.app>
