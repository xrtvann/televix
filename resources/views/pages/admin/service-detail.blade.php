<x-layouts.admin.app>
    {{-- Print Styles --}}
    <style>
        @media print {

            /* Hide non-printable elements */
            .no-print,
            .print-hide,
            nav,
            aside,
            header,
            footer,
            button {
                display: none !important;
            }

            /* Show print-only elements */
            .hidden.print\:block {
                display: block !important;
            }

            /* Show only printable content */
            body {
                background: white !important;
                color: black !important;
                font-size: 11pt !important;
            }

            /* Reset margins for print */
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            /* Page setup */
            @page {
                margin: 1cm;
                size: A4 portrait;
            }

            /* Main container */
            .max-w-\[1200px\] {
                max-width: 100% !important;
                padding: 0 !important;
            }

            /* Grid layout for print - make it single column */
            #printableArea {
                display: block !important;
                column-count: 2;
                column-gap: 15px;
            }

            #printableArea>.hidden.print\:block {
                column-span: all;
            }

            /* Cards - more compact */
            .bg-white,
            .dark\:bg-\[\#111418\],
            .rounded-xl {
                background: white !important;
                border: 1px solid #ccc !important;
                box-shadow: none !important;
                page-break-inside: avoid;
                break-inside: avoid;
                margin-bottom: 10px !important;
                padding: 8px !important;
            }

            /* Card headers - more compact */
            .border-b {
                padding: 4px 0 !important;
                margin-bottom: 6px !important;
            }

            /* Card content */
            .p-6 {
                padding: 6px !important;
            }

            .space-y-4>*+* {
                margin-top: 6px !important;
            }

            /* Text colors */
            .text-slate-900,
            .dark\:text-white {
                color: #000 !important;
            }

            .text-slate-500,
            .dark\:text-slate-400,
            .text-slate-600,
            .dark\:text-slate-300 {
                color: #444 !important;
            }

            .text-primary {
                color: #000 !important;
            }

            /* Icons - hide in print */
            .material-symbols-outlined {
                display: none !important;
            }

            /* Typography - more compact */
            h1 {
                font-size: 18pt !important;
                margin: 0 !important;
            }

            h2 {
                font-size: 12pt !important;
                margin: 0 !important;
                color: #000 !important;
            }

            h3 {
                font-size: 11pt !important;
                color: #000 !important;
            }

            p {
                margin: 2px 0 !important;
                font-size: 10pt !important;
            }

            label {
                font-size: 9pt !important;
                font-weight: bold !important;
                color: #555 !important;
            }

            /* Remove dark mode classes */
            .dark\:bg-gray-800,
            .dark\:bg-gray-800\/50,
            .dark\:border-gray-700,
            .dark\:border-gray-800 {
                background: white !important;
                border-color: #ccc !important;
            }

            /* Hide modals */
            #editOrderModal,
            #assignTechnicianModal,
            #updateStatusModal,
            #deleteOrderModal {
                display: none !important;
            }

            /* Link elements - remove link styling */
            a {
                color: inherit !important;
                text-decoration: none !important;
            }

            /* Grid utilities */
            .col-span-full {
                column-span: all;
            }

            .grid-cols-2 {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            /* Technician info - make compact */
            .w-12.h-12 {
                width: 30px !important;
                height: 30px !important;
                font-size: 10pt !important;
            }

            /* Remove excessive padding */
            .px-6 {
                padding-left: 8px !important;
                padding-right: 8px !important;
            }

            .py-4 {
                padding-top: 4px !important;
                padding-bottom: 4px !important;
            }

            /* Compact text sizes */
            .text-lg {
                font-size: 11pt !important;
            }

            .text-2xl {
                font-size: 14pt !important;
            }

            .text-sm {
                font-size: 9pt !important;
            }

            .text-xs {
                font-size: 8pt !important;
            }
        }
    </style>

    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-[1200px] mx-auto flex flex-col gap-6">
            {{-- Success/Error Messages --}}
            @if (session('success'))
                <div
                    class="print-hide bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-800 dark:text-green-200 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div
                    class="print-hide bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-800 dark:text-red-200 px-4 py-3 rounded-lg flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div
                    class="print-hide bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-800 dark:text-red-200 px-4 py-3 rounded-lg">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined">error</span>
                        <span class="font-semibold">Terdapat kesalahan:</span>
                    </div>
                    <ul class="list-disc list-inside ml-8 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Header Section --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 print-hide">
                <div class="flex items-center gap-3">
                    <a href="{{ route('manajemen-servis.index') }}"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">arrow_back</span>
                    </a>
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Detail Order Servis</h1>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">{{ $order->order_number }}</p>
                    </div>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button id="editOrderBtn"
                        class="flex-1 sm:flex-none bg-white dark:bg-[#111418] border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">edit</span>
                        Edit Order
                    </button>
                    <button id="printOrderBtn"
                        class="flex-1 sm:flex-none bg-primary hover:bg-blue-600 text-white px-4 py-2.5 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors shadow-sm shadow-blue-500/20">
                        <span class="material-symbols-outlined text-[20px]">print</span>
                        Cetak
                    </button>
                </div>
            </div>

            {{-- Status Badge --}}
            <div class="print-hide flex items-center gap-3">
                <span class="px-4 py-2 rounded-lg text-sm font-semibold border {{ $order->status_badge_class }}">
                    {{ $order->status_label }}
                </span>
                @if ($order->completed_at)
                    <span class="text-sm text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined text-[16px] align-middle">schedule</span>
                        Selesai: {{ $order->completed_at->format('d M Y, H:i') }}
                    </span>
                @endif
            </div>

            {{-- Main Content Grid --}}
            <div id="printableArea" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                {{-- Print Header (only visible when printing) --}}
                <div class="hidden print:block col-span-full mb-4">
                    <div class="text-center mb-3 pb-3 border-b-2 border-black">
                        <h1 class="text-2xl font-bold">TELEVIX - Service Center</h1>
                        <p class="text-xs mt-1">Detail Order Servis</p>
                    </div>
                    <div class="grid grid-cols-2 gap-x-8 text-sm mb-3">
                        <div>
                            <p><strong>No. Order:</strong> {{ $order->order_number }}</p>
                            <p><strong>Status:</strong> {{ $order->status_label }}</p>
                            <p><strong>Tanggal Masuk:</strong>
                                {{ $order->received_at ? $order->received_at->format('d/m/Y H:i') : '-' }}</p>
                            @if ($order->completed_at)
                                <p><strong>Tanggal Selesai:</strong> {{ $order->completed_at->format('d/m/Y H:i') }}
                                </p>
                            @endif
                        </div>
                        <div class="text-right">
                            <p><strong>Tanggal Cetak:</strong> {{ now()->format('d/m/Y H:i') }}</p>
                            @if ($order->technician)
                                <p><strong>Teknisi:</strong> {{ $order->technician->name }}</p>
                            @endif
                            @if ($order->final_cost)
                                <p class="mt-2 text-base"><strong>Total Biaya:</strong> Rp
                                    {{ number_format($order->final_cost, 0, ',', '.') }}</p>
                            @elseif ($order->estimated_cost)
                                <p class="mt-2 text-base"><strong>Estimasi:</strong> Rp
                                    {{ number_format($order->estimated_cost, 0, ',', '.') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Left Column - Main Info --}}
                <div class="lg:col-span-2 flex flex-col gap-6">
                    {{-- Customer Information --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                            <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">person</span>
                                Informasi Pelanggan
                            </h2>
                        </div>
                        <div class="p-6 space-y-4">
                            <div>
                                <label class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Nama
                                    Pelanggan</label>
                                <p class="text-slate-900 dark:text-white font-medium mt-1">{{ $order->customer_name }}
                                </p>
                            </div>
                            <div>
                                <label class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">No.
                                    Telepon</label>
                                <p class="text-slate-900 dark:text-white font-medium mt-1 flex items-center gap-2">
                                    {{ $order->customer_phone }}
                                    <a href="tel:{{ $order->customer_phone }}"
                                        class="text-primary hover:text-blue-600 text-sm">
                                        <span class="material-symbols-outlined text-[18px]">call</span>
                                    </a>
                                </p>
                            </div>
                            @if ($order->customer_address)
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Alamat</label>
                                    <p class="text-slate-900 dark:text-white mt-1">{{ $order->customer_address }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Device Information --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                            <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">devices</span>
                                Informasi Perangkat
                            </h2>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Jenis
                                        Perangkat</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->device_type }}
                                    </p>
                                </div>
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Merek</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->device_brand }}
                                    </p>
                                </div>
                            </div>
                            @if ($order->device_model)
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Model</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->device_model }}
                                    </p>
                                </div>
                            @endif
                            <div>
                                <label class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Keluhan
                                    /
                                    Masalah</label>
                                <p class="text-slate-900 dark:text-white mt-1 leading-relaxed">
                                    {{ $order->problem_description }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Service Notes --}}
                    @if ($order->notes)
                        <div
                            class="print-hide bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                            <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                                <h2
                                    class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary">description</span>
                                    Catatan Servis
                                </h2>
                            </div>
                            <div class="p-6">
                                <p class="text-slate-900 dark:text-white leading-relaxed">{{ $order->notes }}</p>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Right Column - Status & Summary --}}
                <div class="flex flex-col gap-6">
                    {{-- Technician Assignment --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                            <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">engineering</span>
                                Teknisi
                            </h2>
                        </div>
                        <div class="p-6">
                            @if ($order->technician)
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary font-semibold">
                                        {{ strtoupper(substr($order->technician->name, 0, 2)) }}
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-900 dark:text-white">
                                            {{ $order->technician->name }}</p>
                                        <p class="print-hide text-sm text-slate-500 dark:text-slate-400">
                                            {{ $order->technician->email }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="text-center py-4">
                                    <span
                                        class="material-symbols-outlined text-slate-300 dark:text-gray-700 text-5xl">person_off</span>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Belum ditugaskan</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Cost Summary --}}
                    <div
                        class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                            <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">payments</span>
                                Biaya Servis
                            </h2>
                        </div>
                        <div class="p-6 space-y-4">
                            @if ($order->estimated_cost)
                                <div class="flex justify-between items-start">
                                    <div>
                                        <label
                                            class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Estimasi</label>
                                        <p class="text-lg font-semibold text-slate-900 dark:text-white mt-1">Rp
                                            {{ number_format($order->estimated_cost, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            @endif

                            @if ($order->final_cost)
                                <div class="pt-4 border-t border-slate-200 dark:border-gray-800">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <label
                                                class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Biaya
                                                Final</label>
                                            <p class="text-2xl font-bold text-primary mt-1">Rp
                                                {{ number_format($order->final_cost, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if (!$order->estimated_cost && !$order->final_cost)
                                <div class="text-center py-4">
                                    <span
                                        class="material-symbols-outlined text-slate-300 dark:text-gray-700 text-4xl">money_off</span>
                                    <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Biaya belum ditentukan
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Timeline Info --}}
                    <div
                        class="print-hide bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                        <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                            <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                                Timeline
                            </h2>
                        </div>
                        <div class="p-6 space-y-4">
                            <div>
                                <label class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Tanggal
                                    Masuk</label>
                                <p class="text-slate-900 dark:text-white font-medium mt-1">
                                    {{ $order->received_at ? $order->received_at->format('d M Y, H:i') : '-' }}
                                </p>
                            </div>
                            @if ($order->completed_at)
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Tanggal
                                        Selesai</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->completed_at->format('d M Y, H:i') }}
                                    </p>
                                </div>
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Durasi
                                        Pengerjaan</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->received_at->diffForHumans($order->completed_at, true) }}
                                    </p>
                                </div>
                            @else
                                <div>
                                    <label
                                        class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase">Durasi
                                        Saat Ini</label>
                                    <p class="text-slate-900 dark:text-white font-medium mt-1">
                                        {{ $order->received_at ? $order->received_at->diffForHumans() : '-' }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Quick Actions --}}
                    <div
                        class="print-hide bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-xl border border-blue-200 dark:border-blue-800 p-6">
                        <h3 class="text-sm font-semibold text-slate-900 dark:text-white mb-4">Aksi Cepat</h3>
                        <div class="space-y-2">
                            @if ($order->status !== App\Models\ServiceOrder::STATUS_COMPLETED)
                                <button id="updateStatusBtn"
                                    class="w-full bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 px-4 py-2 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">sync</span>
                                    Update Status
                                </button>
                            @endif
                            @if (!$order->technician_id)
                                <button id="assignTechnicianBtn"
                                    class="w-full bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 px-4 py-2 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">person_add</span>
                                    Tugaskan Teknisi
                                </button>
                            @endif
                            <button id="viewHistoryBtn"
                                class="w-full bg-white dark:bg-gray-800 border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-700 px-4 py-2 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                                <span class="material-symbols-outlined text-[18px]">history</span>
                                Lihat Riwayat
                            </button>
                            <div class="pt-2 border-t border-blue-200 dark:border-blue-800">
                                <button onclick="openDeleteModal()"
                                    class="w-full bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900/40 px-4 py-2 rounded-lg text-sm font-medium flex items-center justify-center gap-2 transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                    Hapus Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Activity History Section (Optional) --}}
            <div id="activityHistorySection"
                class="print-hide bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm overflow-hidden">
                <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                    <h2 class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history</span>
                        Riwayat Aktivitas
                    </h2>
                </div>
                <div class="p-6">
                    @if ($activityLogs && $activityLogs->count() > 0)
                        <div class="space-y-4">
                            @foreach ($activityLogs as $log)
                                <div
                                    class="flex gap-4 pb-4 border-b border-slate-100 dark:border-gray-800 last:border-0 last:pb-0">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary text-[20px]">
                                                @switch($log->action)
                                                    @case('order_created')
                                                        add_circle
                                                    @break

                                                    @case('order_updated')
                                                        edit
                                                    @break

                                                    @case('order_deleted')
                                                        delete
                                                    @break

                                                    @case('technician_assigned')
                                                        person_add
                                                    @break

                                                    @case('order_status_updated')
                                                        sync
                                                    @break

                                                    @default
                                                        circle
                                                @endswitch
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-2">
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-slate-900 dark:text-white">
                                                    @switch($log->action)
                                                        @case('order_created')
                                                            Order Dibuat
                                                        @break

                                                        @case('order_updated')
                                                            Order Diupdate
                                                        @break

                                                        @case('order_deleted')
                                                            Order Dihapus
                                                        @break

                                                        @case('technician_assigned')
                                                            Teknisi Ditugaskan
                                                        @break

                                                        @case('order_status_updated')
                                                            Status Diupdate
                                                        @break

                                                        @default
                                                            Aktivitas
                                                    @endswitch
                                                </p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">
                                                    oleh <span
                                                        class="font-medium">{{ $log->user->name ?? 'System' }}</span>
                                                    @if ($log->changes)
                                                        @if (isset($log->changes['old_status']) && isset($log->changes['new_status']))
                                                            <br>
                                                            <span class="inline-flex items-center gap-1 mt-1">
                                                                <span
                                                                    class="px-2 py-0.5 rounded bg-slate-100 dark:bg-gray-800 text-xs">
                                                                    {{ ucfirst($log->changes['old_status']) }}
                                                                </span>
                                                                <span
                                                                    class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                                                <span
                                                                    class="px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs">
                                                                    {{ ucfirst($log->changes['new_status']) }}
                                                                </span>
                                                            </span>
                                                        @elseif(isset($log->changes['technician_name']))
                                                            <br>
                                                            <span class="inline-flex items-center gap-1 mt-1">
                                                                <span
                                                                    class="material-symbols-outlined text-[14px]">engineering</span>
                                                                <span
                                                                    class="px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs">
                                                                    {{ $log->changes['technician_name'] }}
                                                                </span>
                                                            </span>
                                                        @endif
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0 text-right">
                                                <p class="text-xs text-slate-500 dark:text-slate-400">
                                                    {{ $log->created_at->format('d M Y') }}
                                                </p>
                                                <p class="text-xs text-slate-400 dark:text-slate-500">
                                                    {{ $log->created_at->format('H:i') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <span
                                class="material-symbols-outlined text-slate-300 dark:text-gray-700 text-5xl">event_note</span>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Belum ada riwayat aktivitas</p>
                        </div>
                    @endif
                </div>
            </div>
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
            <form action="{{ route('manajemen-servis.update', $order) }}" method="POST" class="p-6 space-y-6">
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
                            <input type="text" name="customer_name" value="{{ $order->customer_name }}" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No.
                                Telepon <span class="text-red-500">*</span></label>
                            <input type="text" name="customer_phone" value="{{ $order->customer_phone }}"
                                required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Alamat</label>
                        <textarea name="customer_address" rows="2"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">{{ $order->customer_address }}</textarea>
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
                            <input type="text" name="device_type" value="{{ $order->device_type }}" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Merek
                                <span class="text-red-500">*</span></label>
                            <input type="text" name="device_brand" value="{{ $order->device_brand }}" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Model</label>
                            <input type="text" name="device_model" value="{{ $order->device_model }}"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Keluhan /
                            Masalah <span class="text-red-500">*</span></label>
                        <textarea name="problem_description" rows="3" required
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">{{ $order->problem_description }}</textarea>
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
                            <select name="status" required
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                                @foreach (App\Models\ServiceOrder::getStatuses() as $key => $label)
                                    <option value="{{ $key }}"
                                        {{ $order->status == $key ? 'selected' : '' }}>
                                        {{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Teknisi</label>
                            <select name="technician_id"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                                <option value="">Belum ditugaskan</option>
                                @foreach ($technicians as $tech)
                                    <option value="{{ $tech->id }}"
                                        {{ $order->technician_id == $tech->id ? 'selected' : '' }}>
                                        {{ $tech->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Estimasi
                                Biaya</label>
                            <input type="number" name="estimated_cost" value="{{ $order->estimated_cost }}"
                                step="1000"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Biaya
                                Final</label>
                            <input type="number" name="final_cost" value="{{ $order->final_cost }}" step="1000"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Catatan
                            Servis</label>
                        <textarea name="notes" rows="3"
                            class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">{{ $order->notes }}</textarea>
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
            <form action="{{ route('manajemen-servis.assign-technician', $order) }}" method="POST"
                class="p-6 space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pilih Teknisi
                        <span class="text-red-500">*</span></label>
                    <select name="technician_id" required
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
            <form action="{{ route('manajemen-servis.update-status', $order) }}" method="POST"
                class="p-6 space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Status Baru <span
                            class="text-red-500">*</span></label>
                    <select name="status" required
                        class="w-full px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                        @foreach (App\Models\ServiceOrder::getStatuses() as $key => $label)
                            <option value="{{ $key }}" {{ $order->status == $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    <p class="mt-2 text-xs text-slate-500 dark:text-slate-400">Status saat ini: <span
                            class="font-semibold">{{ $order->status_label }}</span></p>
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

    {{-- Delete Confirmation Modal --}}
    <div id="deleteOrderModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-2xl max-w-md w-full">
            <div class="border-b border-slate-200 dark:border-gray-800 px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Konfirmasi Hapus</h3>
                    <button onclick="closeDeleteModal()"
                        class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">close</span>
                    </button>
                </div>
            </div>
            <div class="p-6 space-y-4">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <span class="material-symbols-outlined text-red-500 text-5xl">warning</span>
                    </div>
                    <div>
                        <p class="text-slate-900 dark:text-white font-medium">Apakah Anda yakin ingin menghapus order
                            ini?</p>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Order: <span
                                class="font-semibold">{{ $order->order_number }}</span></p>
                        <p class="text-sm text-red-600 dark:text-red-400 mt-2">Tindakan ini tidak dapat dibatalkan!</p>
                    </div>
                </div>

                <form action="{{ route('manajemen-servis.destroy', $order) }}" method="POST"
                    class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-gray-800">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="closeDeleteModal()"
                        class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2.5 rounded-lg bg-red-600 hover:bg-red-700 text-white font-medium transition-colors shadow-sm shadow-red-500/20">
                        Ya, Hapus Order
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- JavaScript for Modals --}}
    <script>
        // Edit Order Modal
        function openEditModal() {
            document.getElementById('editOrderModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEditModal() {
            document.getElementById('editOrderModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Assign Technician Modal
        function openAssignModal() {
            document.getElementById('assignTechnicianModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeAssignModal() {
            document.getElementById('assignTechnicianModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Update Status Modal
        function openStatusModal() {
            document.getElementById('updateStatusModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeStatusModal() {
            document.getElementById('updateStatusModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Delete Order Modal
        function openDeleteModal() {
            document.getElementById('deleteOrderModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDeleteModal() {
            document.getElementById('deleteOrderModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Print Order Function
        function printOrder() {
            window.print();
        }

        // Scroll to Activity History
        function scrollToHistory() {
            const historySection = document.getElementById('activityHistorySection');
            if (historySection) {
                historySection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Optional: Add a subtle highlight effect
                historySection.classList.add('ring-2', 'ring-primary', 'ring-opacity-50');
                setTimeout(() => {
                    historySection.classList.remove('ring-2', 'ring-primary', 'ring-opacity-50');
                }, 2000);
            }
        }

        // Attach event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Edit Order Button
            const editBtn = document.getElementById('editOrderBtn');
            if (editBtn) {
                editBtn.addEventListener('click', openEditModal);
            }

            // Print Order Button
            const printBtn = document.getElementById('printOrderBtn');
            if (printBtn) {
                printBtn.addEventListener('click', printOrder);
            }

            // View History Button
            const viewHistoryBtn = document.getElementById('viewHistoryBtn');
            if (viewHistoryBtn) {
                viewHistoryBtn.addEventListener('click', scrollToHistory);
            }

            // Assign Technician Button
            const assignBtn = document.getElementById('assignTechnicianBtn');
            if (assignBtn) {
                assignBtn.addEventListener('click', openAssignModal);
            }

            // Update Status Button
            const statusBtn = document.getElementById('updateStatusBtn');
            if (statusBtn) {
                statusBtn.addEventListener('click', openStatusModal);
            }

            // Close modals on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeEditModal();
                    closeAssignModal();
                    closeStatusModal();
                    closeDeleteModal();
                }
            });

            // Close modals on backdrop click
            const modals = ['editOrderModal', 'assignTechnicianModal', 'updateStatusModal', 'deleteOrderModal'];
            modals.forEach(modalId => {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.addEventListener('click', function(e) {
                        if (e.target === modal) {
                            if (modalId === 'editOrderModal') closeEditModal();
                            if (modalId === 'assignTechnicianModal') closeAssignModal();
                            if (modalId === 'updateStatusModal') closeStatusModal();
                            if (modalId === 'deleteOrderModal') closeDeleteModal();
                        }
                    });
                }
            });
        });
    </script>

</x-layouts.admin.app>
