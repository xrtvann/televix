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

            {{-- Header --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Pembayaran Servis</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Kelola pembayaran untuk order yang sudah
                        selesai</p>
                </div>
                <div class="flex gap-3">
                    <div
                        class="bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 px-4 py-2 rounded-lg">
                        <div class="text-xs text-slate-500 dark:text-slate-400">Belum Dibayar</div>
                        <div class="text-lg font-bold text-red-600 dark:text-red-400">{{ $totalUnpaid }}</div>
                    </div>
                    <div
                        class="bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 px-4 py-2 rounded-lg">
                        <div class="text-xs text-slate-500 dark:text-slate-400">Total Tagihan</div>
                        <div class="text-lg font-bold text-slate-900 dark:text-white">Rp
                            {{ number_format($totalUnpaidAmount, 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>

            {{-- Filter & Search --}}
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-4">
                <form method="GET" action="{{ route('pembayaran.index') }}" class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari order number, nama pelanggan, atau nomor telepon..."
                            class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <select name="payment_status"
                        class="px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Semua Status</option>
                        <option value="unpaid" {{ request('payment_status') === 'unpaid' ? 'selected' : '' }}>Belum
                            Dibayar</option>
                        <option value="paid" {{ request('payment_status') === 'paid' ? 'selected' : '' }}>Sudah
                            Dibayar</option>
                    </select>
                    <button type="submit"
                        class="px-6 py-2 bg-primary hover:bg-blue-700 text-white rounded-lg font-medium transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">search</span>
                        <span>Cari</span>
                    </button>
                    @if (request('search') || request('payment_status'))
                        <a href="{{ route('pembayaran.index') }}"
                            class="px-4 py-2 bg-slate-100 dark:bg-gray-800 hover:bg-slate-200 dark:hover:bg-gray-700 text-slate-700 dark:text-slate-300 rounded-lg font-medium transition-colors">
                            Reset
                        </a>
                    @endif
                </form>
            </div>

            {{-- Table --}}
            <div
                class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Order ID</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Pelanggan</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Device</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Teknisi</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Tgl Selesai</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Biaya</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Status</th>
                                <th
                                    class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                            @forelse($orders as $order)
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <a class="text-primary font-semibold hover:underline"
                                            href="{{ route('manajemen-servis.show', $order) }}">#{{ $order->order_number }}</a>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm font-medium text-slate-900 dark:text-white">{{ $order->customer_name }}</span>
                                            <span class="text-xs text-slate-500">{{ $order->customer_phone }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="text-sm text-slate-900 dark:text-white">
                                            {{ $order->device_brand }} {{ $order->device_type }}
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($order->technician)
                                            <span
                                                class="text-sm text-slate-600 dark:text-slate-300">{{ $order->technician->name }}</span>
                                        @else
                                            <span class="text-sm text-slate-400">-</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <span class="text-sm text-slate-600 dark:text-slate-300">
                                            {{ $order->completed_at ? $order->completed_at->format('d M Y') : '-' }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">
                                            Rp {{ number_format($order->final_cost, 0, ',', '.') }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        @if ($order->paid_at)
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border bg-green-50 text-green-700 border-green-200 dark:bg-green-900/30 dark:text-green-300 dark:border-green-800">
                                                <span
                                                    class="material-symbols-outlined text-[14px] mr-1">check_circle</span>
                                                Lunas
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border bg-red-50 text-red-700 border-red-200 dark:bg-red-900/30 dark:text-red-300 dark:border-red-800">
                                                <span class="material-symbols-outlined text-[14px] mr-1">schedule</span>
                                                Belum Bayar
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap">
                                        @if (!$order->paid_at)
                                            <button
                                                onclick="openPaymentModal({{ $order->id }}, '{{ $order->order_number }}', {{ $order->final_cost }})"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-white bg-green-600 hover:bg-green-700 border border-green-700 transition-all hover:shadow-sm">
                                                <span class="material-symbols-outlined text-[16px]">payment</span>
                                                <span>Bayar</span>
                                            </button>
                                        @else
                                            <div class="text-xs text-slate-500">
                                                <div class="font-medium">{{ ucfirst($order->payment_method) }}</div>
                                                <div>{{ $order->paid_at->format('d M Y H:i') }}</div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-12 text-center text-slate-400">
                                        <div class="flex flex-col items-center gap-3">
                                            <span class="material-symbols-outlined text-[64px]">receipt_long</span>
                                            <p class="text-base font-medium">Tidak ada data pembayaran</p>
                                            <p class="text-sm">Belum ada order yang selesai atau sesuai filter</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                @if ($orders->hasPages())
                    <div class="px-6 py-4 border-t border-slate-200 dark:border-gray-800">
                        {{ $orders->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Payment Modal --}}
    <div id="paymentModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div
            class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-md w-full border border-slate-200 dark:border-gray-800">
            <div class="flex items-center justify-between p-6 border-b border-slate-200 dark:border-gray-800">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Konfirmasi Pembayaran</h3>
                <button onclick="closePaymentModal()"
                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <form id="paymentForm" method="POST">
                @csrf
                <div class="p-6 space-y-4">
                    <div class="bg-slate-50 dark:bg-gray-800/50 p-4 rounded-lg">
                        <div class="text-sm text-slate-600 dark:text-slate-400">Order Number</div>
                        <div id="modalOrderNumber" class="text-lg font-bold text-slate-900 dark:text-white"></div>
                    </div>

                    <div
                        class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg border border-blue-200 dark:border-blue-800">
                        <div class="text-sm text-blue-600 dark:text-blue-400">Total Pembayaran</div>
                        <div id="modalTotalCost" class="text-2xl font-bold text-blue-700 dark:text-blue-300"></div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Metode Pembayaran <span class="text-red-500">*</span>
                        </label>
                        <select name="payment_method" required
                            class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Pilih Metode</option>
                            <option value="cash">Cash / Tunai</option>
                            <option value="transfer">Transfer Bank</option>
                            <option value="qris">QRIS</option>
                            <option value="debit">Kartu Debit</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Catatan (Opsional)
                        </label>
                        <textarea name="payment_notes" rows="3"
                            class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Catatan tambahan untuk pembayaran..."></textarea>
                    </div>
                </div>

                <div class="flex gap-3 p-6 border-t border-slate-200 dark:border-gray-800">
                    <button type="button" onclick="closePaymentModal()"
                        class="flex-1 px-4 py-2 border border-slate-200 dark:border-gray-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 font-medium transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="flex-1 px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">check_circle</span>
                        <span>Konfirmasi Bayar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openPaymentModal(orderId, orderNumber, totalCost) {
            const modal = document.getElementById('paymentModal');
            const form = document.getElementById('paymentForm');
            const modalOrderNumber = document.getElementById('modalOrderNumber');
            const modalTotalCost = document.getElementById('modalTotalCost');

            form.action = `/pembayaran/${orderId}/pay`;
            modalOrderNumber.textContent = '#' + orderNumber;
            modalTotalCost.textContent = 'Rp ' + totalCost.toLocaleString('id-ID');

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closePaymentModal() {
            const modal = document.getElementById('paymentModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePaymentModal();
            }
        });

        // Close on backdrop click
        document.getElementById('paymentModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closePaymentModal();
            }
        });
    </script>
</x-layouts.admin.app>
