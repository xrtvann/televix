<x-layouts.admin.app>
    <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
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
                    <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Manajemen Staff & Akses (RBAC)</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Kelola pengguna, role, dan hak akses
                        sistem</p>
                </div>
                <button onclick="openAddModal()"
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
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">{{ $totalUsers }}</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-blue-50 text-blue-600 rounded-xl dark:bg-blue-900/20 dark:text-blue-400">
                            <span class="material-symbols-outlined text-[28px]">group</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xs text-slate-400">{{ $activeUsers }} Aktif</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Roles</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">{{ $roles->count() }}
                            </h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-purple-50 text-purple-600 rounded-xl dark:bg-purple-900/20 dark:text-purple-400">
                            <span class="material-symbols-outlined text-[28px]">admin_panel_settings</span>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xs text-slate-400">Sistem RBAC</span>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Super Admin</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">{{ $superAdmins }}</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-red-50 text-red-600 rounded-xl dark:bg-red-900/20 dark:text-red-400">
                            <span class="material-symbols-outlined text-[28px]">shield_person</span>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between p-5 bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm hover:shadow-md transition-all duration-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Staff Aktif</p>
                            <h3 class="mt-2 text-2xl font-bold text-[#111418] dark:text-white">{{ $activeUsers }}</h3>
                        </div>
                        <div
                            class="flex items-center justify-center size-12 bg-green-50 text-green-600 rounded-xl dark:bg-green-900/20 dark:text-green-400">
                            <span class="material-symbols-outlined text-[28px]">check_circle</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Staff List --}}
            <div class="bg-white dark:bg-[#111418] rounded-xl border border-slate-200 dark:border-gray-800 shadow-sm">
                <div class="p-5 border-b border-slate-200 dark:border-gray-800">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Daftar Staff</h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-gray-800/50 border-b border-slate-200 dark:border-gray-700">
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
                                    Last Login</th>
                                <th
                                    class="py-4 px-5 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800">
                            @forelse($users as $user)
                                <tr class="group hover:bg-slate-50 dark:hover:bg-gray-800/50 transition-colors">
                                    <td class="py-4 px-5">
                                        <div class="flex items-center gap-3">
                                            @if ($user->avatar)
                                                <img src="{{ asset('storage/' . $user->avatar) }}"
                                                    alt="{{ $user->name }}" class="size-10 rounded-full object-cover">
                                            @else
                                                <div
                                                    class="size-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-semibold shadow-sm">
                                                    {{ strtoupper(substr($user->name, 0, 2)) }}
                                                </div>
                                            @endif
                                            <div>
                                                <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                    {{ $user->name }}</p>
                                                <p class="text-xs text-slate-500">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-5">
                                        @php
                                            $role = $user->roles->first();
                                            $colors = [
                                                'super_admin' =>
                                                    'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-300',
                                                'admin' =>
                                                    'bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300',
                                                'teknisi' =>
                                                    'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300',
                                                'kasir' =>
                                                    'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300',
                                            ];
                                            $colorClass = $colors[$role->name ?? ''] ?? 'bg-slate-100 text-slate-700';
                                        @endphp
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $colorClass }}">
                                            <span class="material-symbols-outlined text-[14px] mr-1">shield</span>
                                            {{ $role->display_name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-5">
                                        @if ($user->is_active)
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300">
                                                <span class="size-1.5 rounded-full bg-green-600"></span>
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400">
                                                <span class="size-1.5 rounded-full bg-slate-400"></span>
                                                Nonaktif
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-5">
                                        <span class="text-sm text-slate-600 dark:text-slate-400">
                                            {{ $user->last_login_at ? $user->last_login_at->diffForHumans() : 'Belum pernah' }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-5">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                onclick="openEditModal({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}', '{{ $user->phone }}', {{ $user->roles->first()->id ?? 'null' }}, {{ $user->is_active ? 'true' : 'false' }})"
                                                class="p-2 rounded-lg text-slate-400 hover:text-primary hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors"
                                                title="Edit">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </button>
                                            <form action="{{ route('manajemen-staff-rbac.toggle-status', $user) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="p-2 rounded-lg text-slate-400 hover:text-yellow-600 hover:bg-yellow-50 dark:hover:bg-yellow-900/20 transition-colors"
                                                    title="Toggle Status">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">{{ $user->is_active ? 'block' : 'check_circle' }}</span>
                                                </button>
                                            </form>
                                            @if ($user->id !== auth()->id())
                                                <button
                                                    onclick="confirmDelete({{ $user->id }}, '{{ $user->name }}')"
                                                    class="p-2 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors"
                                                    title="Hapus">
                                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-8 text-center text-slate-500">Belum ada data staff</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($users->hasPages())
                    <div class="p-4 border-t border-slate-200 dark:border-gray-800">
                        {{ $users->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Add Staff Modal --}}
    <div id="addModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-xl w-full max-w-lg">
            <div class="p-6 border-b border-slate-200 dark:border-gray-800">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Tambah Staff Baru</h3>
            </div>
            <form action="{{ route('manajemen-staff-rbac.store') }}" method="POST" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama
                        Lengkap</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No.
                        Telepon</label>
                    <input type="tel" name="phone"
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Role</label>
                    <select name="role_id" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                        <option value="">Pilih Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" checked
                        class="w-4 h-4 text-primary border-slate-300 rounded focus:ring-primary">
                    <label class="text-sm text-slate-700 dark:text-slate-300">Aktifkan user</label>
                </div>
                <div class="flex gap-3 pt-4">
                    <button type="submit"
                        class="flex-1 bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">Simpan</button>
                    <button type="button" onclick="closeAddModal()"
                        class="flex-1 bg-slate-200 hover:bg-slate-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-slate-900 dark:text-white px-4 py-2 rounded-lg font-medium transition-colors">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Edit Staff Modal --}}
    <div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-[#111418] rounded-xl shadow-xl w-full max-w-lg">
            <div class="p-6 border-b border-slate-200 dark:border-gray-800">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Edit Staff</h3>
            </div>
            <form id="editForm" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama
                        Lengkap</label>
                    <input type="text" id="edit_name" name="name" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Email</label>
                    <input type="email" id="edit_email" name="email" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No.
                        Telepon</label>
                    <input type="tel" id="edit_phone" name="phone"
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Password Baru
                        (kosongkan jika tidak diubah)</label>
                    <input type="password" name="password"
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Role</label>
                    <select id="edit_role_id" name="role_id" required
                        class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="edit_is_active" name="is_active" value="1"
                        class="w-4 h-4 text-primary border-slate-300 rounded focus:ring-primary">
                    <label class="text-sm text-slate-700 dark:text-slate-300">Aktifkan user</label>
                </div>
                <div class="flex gap-3 pt-4">
                    <button type="submit"
                        class="flex-1 bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">Update</button>
                    <button type="button" onclick="closeEditModal()"
                        class="flex-1 bg-slate-200 hover:bg-slate-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-slate-900 dark:text-white px-4 py-2 rounded-lg font-medium transition-colors">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Delete Form (hidden) --}}
    <form id="deleteForm" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <script>
        function openAddModal() {
            document.getElementById('addModal').classList.remove('hidden');
            document.getElementById('addModal').classList.add('flex');
        }

        function closeAddModal() {
            document.getElementById('addModal').classList.add('hidden');
            document.getElementById('addModal').classList.remove('flex');
        }

        function openEditModal(id, name, email, phone, roleId, isActive) {
            const form = document.getElementById('editForm');
            form.action = `/manajemen-staff-rbac/${id}`;

            document.getElementById('edit_name').value = name;
            document.getElementById('edit_email').value = email;
            document.getElementById('edit_phone').value = phone || '';
            document.getElementById('edit_role_id').value = roleId;
            document.getElementById('edit_is_active').checked = isActive;

            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('flex');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
            document.getElementById('editModal').classList.remove('flex');
        }

        function confirmDelete(id, name) {
            if (confirm(`Apakah Anda yakin ingin menghapus user "${name}"? Tindakan ini tidak dapat dibatalkan.`)) {
                const form = document.getElementById('deleteForm');
                form.action = `/manajemen-staff-rbac/${id}`;
                form.submit();
            }
        }

        // Close modal when clicking outside
        document.getElementById('addModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeAddModal();
        });

        document.getElementById('editModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeEditModal();
        });
    </script>
</x-layouts.admin.app>
