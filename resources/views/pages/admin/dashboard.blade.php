<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-8">
            @if (auth()->user()->hasPermission('view_orders'))
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Ringkasan
                            Layanan</h3>
                        <div
                            class="flex bg-white dark:bg-[#111418] rounded-lg p-1 border border-slate-200 dark:border-gray-700 shadow-sm">
                            <button id="btnDaily" onclick="togglePeriod('daily')"
                                class="px-3 py-1 text-xs font-medium rounded-md bg-slate-100 dark:bg-gray-700 text-slate-900 dark:text-white transition-colors">Harian</button>
                            <button id="btnWeekly" onclick="togglePeriod('weekly')"
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
                                    <h3 id="newOrdersValue"
                                        class="mt-2 text-2xl font-bold text-[#111418] dark:text-white"
                                        data-daily="{{ $newOrders }}" data-weekly="{{ $newOrdersWeek }}">
                                        {{ $newOrders }}</h3>
                                </div>
                                <div
                                    class="flex items-center justify-center size-10 bg-primary/10 text-primary rounded-lg dark:bg-primary/20">
                                    <span class="material-symbols-outlined text-[24px]">assignment_add</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span id="newOrdersChange" data-daily="{{ $newOrdersChange }}"
                                    data-weekly="{{ $newOrdersWeekChange }}"
                                    class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium {{ $newOrdersChange >= 0 ? 'bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400' : 'bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-400' }}">
                                    <span id="newOrdersIcon"
                                        class="material-symbols-outlined text-[14px]">{{ $newOrdersChange >= 0 ? 'trending_up' : 'trending_down' }}</span>
                                    <span id="newOrdersPercent">{{ abs($newOrdersChange) }}%</span>
                                </span>
                                <span id="newOrdersLabel" class="text-xs text-slate-400">vs kemarin</span>
                            </div>
                        </div>
                        <div
                            class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Sedang
                                        Berlangsung</p>
                                    <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">
                                        {{ $ongoingOrders }}</h3>
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
                                    <p id="completedLabel"
                                        class="text-sm font-medium text-slate-500 dark:text-slate-400">Selesai Hari
                                        Ini</p>
                                    <h3 id="completedValue"
                                        class="mt-2 text-2xl font-bold text-[#111418] dark:text-white"
                                        data-daily="{{ $completedToday }}" data-weekly="{{ $completedWeek }}">
                                        {{ $completedToday }}</h3>
                                </div>
                                <div
                                    class="flex items-center justify-center size-10 bg-green-50 text-green-600 rounded-lg dark:bg-green-900/20 dark:text-green-400">
                                    <span class="material-symbols-outlined text-[24px]">check_circle</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span id="completedChange" data-daily="{{ $completedChange }}"
                                    data-weekly="{{ $completedWeekChange }}"
                                    class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium {{ $completedChange >= 0 ? 'bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400' : 'bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-400' }}">
                                    <span id="completedIcon"
                                        class="material-symbols-outlined text-[14px]">{{ $completedChange >= 0 ? 'trending_up' : 'trending_down' }}</span>
                                    <span id="completedPercent">{{ abs($completedChange) }}%</span>
                                </span>
                                <span id="completedChangeLabel" class="text-xs text-slate-400">Siap diambil</span>
                            </div>
                        </div>
                        @if (auth()->user()->hasPermission('view_payments'))
                            <div
                                class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pendapatan
                                            Bersih</p>
                                        <h3 id="revenueValue"
                                            class="mt-2 text-2xl font-bold text-[#111418] dark:text-white"
                                            data-daily="{{ $todayRevenue }}" data-weekly="{{ $revenueWeek }}">Rp
                                            {{ number_format($todayRevenue / 1000, 1) }}k
                                        </h3>
                                    </div>
                                    <div
                                        class="flex items-center justify-center size-10 bg-blue-50 text-blue-600 rounded-lg dark:bg-blue-900/20 dark:text-blue-400">
                                        <span class="material-symbols-outlined text-[24px]">payments</span>
                                    </div>
                                </div>
                                <div class="mt-4 flex items-center gap-2">
                                    <span id="revenueChange" data-daily="{{ $revenueChange }}"
                                        data-weekly="{{ $revenueWeekChange }}"
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium {{ $revenueChange >= 0 ? 'bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400' : 'bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-400' }}">
                                        <span id="revenueIcon"
                                            class="material-symbols-outlined text-[14px]">{{ $revenueChange >= 0 ? 'trending_up' : 'trending_down' }}</span>
                                        <span id="revenuePercent">{{ abs($revenueChange) }}%</span>
                                    </span>
                                    <span id="revenueLabel" class="text-xs text-slate-400">Estimasi hari ini</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if (auth()->user()->hasPermission('view_orders'))
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[#111418] dark:text-white text-xl font-bold leading-tight">Antrean Aktif
                        </h3>
                        <a href="{{ route('manajemen-servis.index') }}"
                            class="text-sm text-primary font-medium hover:underline">Lihat Semua</a>
                    </div>
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Order ID</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Pelanggan</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Unit & Keluhan</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Teknisi</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Status</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider whitespace-nowrap">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                                    @forelse($activeQueue as $order)
                                        <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                            <td class="py-4 px-6 whitespace-nowrap">
                                                <a class="text-primary font-semibold hover:underline hover:text-blue-700 dark:hover:text-blue-400"
                                                    href="{{ route('manajemen-servis.show', $order) }}">#{{ $order->order_number }}</a>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-slate-900 dark:text-white">{{ $order->customer_name }}</span>
                                                    <span
                                                        class="text-xs text-slate-500">{{ $order->customer_phone }}</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-slate-900 dark:text-white">{{ $order->device_brand }}
                                                        {{ $order->device_type }}</span>
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
                                                    <span class="text-sm text-slate-400 italic">- Belum ditentukan
                                                        -</span>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $order->status_badge_class }}">
                                                    {{ $order->status_label }}
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 whitespace-nowrap">
                                                <a href="{{ route('manajemen-servis.show', $order) }}"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-primary bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 border border-blue-200 dark:border-blue-800 transition-all hover:shadow-sm"
                                                    title="Lihat Detail Order">
                                                    <span
                                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                                    <span>Detail</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="py-8 text-center text-slate-400">
                                                <div class="flex flex-col items-center gap-2">
                                                    <span class="material-symbols-outlined text-[48px]">inbox</span>
                                                    <p class="text-sm">Tidak ada order aktif saat ini</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        @if ($activeQueue->count() > 0)
                            <div
                                class="p-4 border-t border-slate-200 dark:border-gray-800 bg-slate-50 dark:bg-gray-800/30 flex justify-center">
                                <a href="{{ route('manajemen-servis.index') }}"
                                    class="text-sm text-slate-500 hover:text-primary font-medium flex items-center gap-1 transition-colors">
                                    Lihat semua order
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                @if (auth()->user()->hasPermission('view_reports'))
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
                                <span>{{ $maxRevenue > 0 ? number_format($maxRevenue / 1000, 1) : '3.0' }}k</span>
                                <span>{{ $maxRevenue > 0 ? number_format(($maxRevenue * 0.66) / 1000, 1) : '2.0' }}k</span>
                                <span>{{ $maxRevenue > 0 ? number_format(($maxRevenue * 0.33) / 1000, 1) : '1.0' }}k</span>
                                <span>0</span>
                            </div>
                            <div class="flex-1 flex flex-col h-full justify-end">
                                <div
                                    class="flex-1 flex items-end justify-between gap-2 px-2 border-l border-b border-slate-200 dark:border-gray-700">
                                    @foreach ($weeklyRevenue as $day)
                                        @php
                                            $heightPercent =
                                                $maxRevenue > 0 ? ($day['revenue'] / $maxRevenue) * 100 : 0;
                                        @endphp
                                        <div class="w-full {{ $day['is_today'] ? 'bg-primary shadow-lg shadow-blue-500/30' : 'bg-blue-100 dark:bg-blue-900/20' }} rounded-t-sm relative group"
                                            style="height: {{ max(20, $heightPercent) }}%">
                                            <div
                                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 whitespace-nowrap">
                                                Rp {{ number_format($day['revenue'] / 1000, 0) }}k</div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="flex justify-between mt-2 text-xs text-slate-400 px-2">
                                    @foreach ($weeklyRevenue as $day)
                                        <span
                                            class="{{ $day['is_today'] ? 'text-primary font-bold' : '' }}">{{ $day['day'] }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (auth()->user()->hasPermission('view_users'))
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm p-5 h-full">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-base font-bold text-[#111418] dark:text-white">Status Teknisi</h4>
                            <a class="text-xs text-primary font-medium hover:underline" href="#">Kelola</a>
                        </div>
                        <div class="flex flex-col gap-4">
                            @forelse($technicians as $tech)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="relative">
                                            <div
                                                class="size-10 rounded-full bg-slate-200 flex items-center justify-center text-sm font-semibold text-slate-600">
                                                {{ substr($tech['name'], 0, 1) }}
                                            </div>
                                            <div
                                                class="absolute bottom-0 right-0 size-2.5 {{ $tech['status_color'] === 'green' ? 'bg-green-500' : 'bg-slate-300' }} rounded-full border-2 border-white dark:border-[#111418]">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                {{ $tech['name'] }}</p>
                                            <p class="text-xs text-slate-500">{{ $tech['active_orders'] }} order aktif
                                            </p>
                                        </div>
                                    </div>
                                    <span
                                        class="text-xs font-medium {{ $tech['status_color'] === 'green' ? 'text-green-600 bg-green-50 dark:bg-green-900/20' : 'text-slate-500 bg-slate-100 dark:bg-slate-800' }} px-2 py-1 rounded">{{ $tech['status'] }}</span>
                                </div>
                            @empty
                                <div class="text-center py-8 text-slate-400">
                                    <span class="material-symbols-outlined text-[48px]">person_off</span>
                                    <p class="text-sm mt-2">Tidak ada teknisi</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function togglePeriod(period) {
            const btnDaily = document.getElementById('btnDaily');
            const btnWeekly = document.getElementById('btnWeekly');

            // Toggle button styles
            if (period === 'daily') {
                btnDaily.classList.add('bg-slate-100', 'dark:bg-gray-700', 'text-slate-900', 'dark:text-white');
                btnDaily.classList.remove('text-slate-500');
                btnWeekly.classList.remove('bg-slate-100', 'dark:bg-gray-700', 'text-slate-900', 'dark:text-white');
                btnWeekly.classList.add('text-slate-500');
            } else {
                btnWeekly.classList.add('bg-slate-100', 'dark:bg-gray-700', 'text-slate-900', 'dark:text-white');
                btnWeekly.classList.remove('text-slate-500');
                btnDaily.classList.remove('bg-slate-100', 'dark:bg-gray-700', 'text-slate-900', 'dark:text-white');
                btnDaily.classList.add('text-slate-500');
            }

            // Update values
            updateCard('newOrders', period);
            updateCard('completed', period);
            updateCard('revenue', period);

            // Update labels
            const completedLabel = document.getElementById('completedLabel');
            const newOrdersLabel = document.getElementById('newOrdersLabel');
            const revenueLabel = document.getElementById('revenueLabel');

            if (period === 'daily') {
                completedLabel.textContent = 'Selesai Hari Ini';
                newOrdersLabel.textContent = 'vs kemarin';
                revenueLabel.textContent = 'Estimasi hari ini';
            } else {
                completedLabel.textContent = 'Selesai Minggu Ini';
                newOrdersLabel.textContent = 'vs minggu lalu';
                revenueLabel.textContent = 'Estimasi minggu ini';
            }
        }

        function updateCard(cardId, period) {
            const valueEl = document.getElementById(cardId + 'Value');
            const changeEl = document.getElementById(cardId + 'Change');
            const iconEl = document.getElementById(cardId + 'Icon');
            const percentEl = document.getElementById(cardId + 'Percent');

            if (!valueEl || !changeEl) return;

            const value = parseInt(valueEl.dataset[period]);
            const change = parseInt(changeEl.dataset[period]);

            // Update value
            if (cardId === 'revenue') {
                valueEl.innerHTML = 'Rp ' + (value / 1000).toFixed(1) + 'k';
            } else {
                valueEl.textContent = value;
            }

            // Update change percentage
            percentEl.textContent = Math.abs(change) + '%';

            // Update icon and color
            if (change >= 0) {
                iconEl.textContent = 'trending_up';
                changeEl.classList.remove('bg-red-50', 'text-red-700', 'dark:bg-red-900/30', 'dark:text-red-400');
                changeEl.classList.add('bg-green-50', 'text-green-700', 'dark:bg-green-900/30', 'dark:text-green-400');
            } else {
                iconEl.textContent = 'trending_down';
                changeEl.classList.remove('bg-green-50', 'text-green-700', 'dark:bg-green-900/30', 'dark:text-green-400');
                changeEl.classList.add('bg-red-50', 'text-red-700', 'dark:bg-red-900/30', 'dark:text-red-400');
            }
        }
    </script>
</x-layouts.admin.app>
