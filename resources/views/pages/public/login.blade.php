<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Televix | Masuk Portal</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/darkmode.js'])
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white overflow-x-hidden min-h-screen flex flex-col group/design-root">
    <main class="flex-grow flex items-center justify-center p-4 py-10">
        <div
            class="w-full max-w-[480px] bg-white dark:bg-[#1a2632] rounded-xl shadow-[0_4px_24px_rgba(0,0,0,0.06)] border border-[#f0f2f5] dark:border-[#2a3b4d] overflow-hidden flex flex-col">
            <div class="h-40 bg-cover bg-center relative flex flex-col justify-end p-6"
                data-alt="Technical electronic repair workspace background"
                style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0W4O-wKASP70yA1f9oKMmVjuVdThX-60bRRSNM5OX31WddBPB8xIlWZwAGWn1GGr6OxoaDG5UXRe6IA_aakz6VzpKcAY707ZkrbVk5gJbL7KwyupiymtKXV_dbQ2ic3tRFqFieJ19YmgSC_d7SimeGmWYZwQ1L-48Lv6_rOJQtRgDTV3a3KPpP7WmdYRTmRS6n1SYO0md4PvESxjYy8Ro7baA1gzfNwd6fMPmPk-1gfKPHgZA7B7Pcnd-255b8oEJtHRiLhe7DbeI");'>
                <div class="relative z-10">
                    <p class="text-white tracking-wide text-2xl font-bold leading-tight drop-shadow-md mb-2">Televix
                    </p>
                    <p class="text-white/80 text-sm font-medium">Login Khusus Owner &amp; Teknisi</p>
                </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-6">
                {{-- Alert Messages --}}
                @if (session('success'))
                    <div
                        class="flex items-center gap-3 p-3.5 bg-green-50 dark:bg-green-500/10 rounded-lg border border-green-100 dark:border-green-500/20">
                        <span
                            class="material-symbols-outlined text-green-600 dark:text-green-400 text-[20px] shrink-0">check_circle</span>
                        <p class="text-sm text-green-900 dark:text-green-100 font-medium leading-snug">
                            {{ session('success') }}
                        </p>
                    </div>
                @endif

                @if (session('error'))
                    <div
                        class="flex items-center gap-3 p-3.5 bg-red-50 dark:bg-red-500/10 rounded-lg border border-red-100 dark:border-red-500/20">
                        <span
                            class="material-symbols-outlined text-red-600 dark:text-red-400 text-[20px] shrink-0">error</span>
                        <p class="text-sm text-red-900 dark:text-red-100 font-medium leading-snug">
                            {{ session('error') }}
                        </p>
                    </div>
                @endif

                @if ($errors->any())
                    <div
                        class="flex items-start gap-3 p-3.5 bg-red-50 dark:bg-red-500/10 rounded-lg border border-red-100 dark:border-red-500/20">
                        <span
                            class="material-symbols-outlined text-red-600 dark:text-red-400 text-[20px] shrink-0 mt-0.5">error</span>
                        <div class="flex-1">
                            <p class="text-sm text-red-900 dark:text-red-100 font-medium leading-snug mb-1">
                                Terjadi kesalahan:
                            </p>
                            <ul class="text-sm text-red-800 dark:text-red-200 list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div
                    class="flex items-center align-middle gap-3 p-3.5 bg-blue-50 dark:bg-blue-500/10 rounded-lg border border-blue-100 dark:border-blue-500/20">
                    <span
                        class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5 me-1">lock_person</span>
                    <p class="text-sm text-blue-900 dark:text-blue-100 font-medium leading-snug">
                        Hanya Owner dan Teknisi yang dapat mengakses portal ini.
                    </p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <label class="flex flex-col gap-2">
                        <span class="text-[#111418] dark:text-gray-200 text-sm font-medium">Email</span>
                        <div class="relative flex items-center">
                            <span class="absolute left-4 top-3 text-[#60758a]">
                                <span class="material-symbols-outlined">mail</span>
                            </span>
                            <input name="email" value="{{ old('email') }}"
                                class="w-full py-3 flex rounded-lg border @error('email') border-red-500 @else border-[#dbe0e6] dark:border-[#3e4c59] @enderror bg-white dark:bg-[#111923] pl-11 pr-4 text-base text-[#111418] dark:text-white placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors"
                                placeholder="contoh@televix.com" type="email" required autofocus />
                        </div>
                        @error('email')
                            <span class="text-xs text-red-600 dark:text-red-400 mt-1">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        <span class="text-[#111418] dark:text-gray-200 text-sm font-medium">Kata Sandi</span>
                        <div class="relative flex items-center">
                            <span class="absolute left-4 top-3 text-[#60758a]">
                                <span class="material-symbols-outlined">lock</span>
                            </span>
                            <input id="password" name="password"
                                class="w-full p-3 rounded-lg border @error('password') border-red-500 @else border-[#dbe0e6] dark:border-[#3e4c59] @enderror bg-white dark:bg-[#111923] pl-11 pr-12 text-base text-[#111418] dark:text-white placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors"
                                placeholder="Masukkan kata sandi" type="password" required />
                            <button id="togglePassword"
                                class="absolute right-0 h-full px-4 text-[#60758a] hover:text-[#111418] dark:hover:text-white transition-colors flex items-center justify-center rounded-r-lg focus:outline-none focus:text-primary"
                                type="button" onclick="togglePasswordVisibility()">
                                <span id="passwordIcon" class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                        @error('password')
                            <span class="text-xs text-red-600 dark:text-red-400 mt-1">{{ $message }}</span>
                        @enderror
                    </label>

                    <div class="flex justify-between items-center mt-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input name="remember"
                                class="p-2 w-4 h-4 rounded-lg border-gray-400 text-primary focus:ring-primary dark:bg-[#111923] dark:border-[#3e4c59]"
                                type="checkbox" />
                            <span class="text-sm text-[#60758a] dark:text-[#93adc8] font-medium">Ingat Saya</span>
                        </label>
                        <a class="text-xs font-medium text-primary hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                            href="{{ route('reset-password') }}">Lupa Kata Sandi?</a>
                    </div>

                    <button
                        class="mt-2 w-full h-12 bg-primary hover:bg-blue-600 active:scale-[0.99] text-white rounded-lg font-bold text-sm tracking-wide shadow-md transition-all flex items-center justify-center gap-2 group"
                        type="submit">
                        <span>Masuk</span>
                        <span
                            class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">login</span>
                    </button>

                    <div class="relative flex py-1 items-center">
                        <div class="flex-grow border-t border-[#dbe0e6] dark:border-[#3e4c59]"></div>
                        <span class="flex-shrink-0 mx-4 text-[#60758a] text-xs font-medium">Atau masuk dengan</span>
                        <div class="flex-grow border-t border-[#dbe0e6] dark:border-[#3e4c59]"></div>
                    </div>

                    <button
                        class="w-full h-12 bg-white dark:bg-[#111923] border border-[#dbe0e6] dark:border-[#3e4c59] hover:bg-gray-50 dark:hover:bg-[#1a2632] active:scale-[0.99] text-[#111418] dark:text-white rounded-lg font-bold text-sm transition-all flex items-center justify-center gap-2.5 shadow-sm"
                        type="button">
                        <svg class="w-5 h-5" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"
                                fill="#EA4335"></path>
                            <path
                                d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"
                                fill="#4285F4"></path>
                            <path
                                d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"
                                fill="#FBBC05"></path>
                            <path
                                d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"
                                fill="#34A853"></path>
                        </svg>
                        <span>Masuk dengan Google</span>
                    </button>
                </form>
            </div>
            <div
                class="px-8 py-4 bg-[#f9fafb] dark:bg-[#15202b] border-t border-[#f0f2f5] dark:border-[#2a3b4d] text-center">
                <p class="text-xs text-[#60758a] dark:text-[#93adc8]">
                    Belum memiliki akun staff? <a class="text-primary font-medium hover:underline"
                        href="#">Hubungi Admin</a>
                </p>
            </div>
        </div>
    </main>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                passwordIcon.textContent = 'visibility';
            }
        }
    </script>
</body>

</html>
