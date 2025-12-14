<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Televix | Lupa Kata Sandi</title>
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
                    <p class="text-white/80 text-sm font-medium">Atur Ulang Kata Sandi</p>
                </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-6">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl md:text-2xl font-bold text-[#111418] dark:text-white">Lupa Password?</h2>
                    <p class="text-sm text-[#60758a] dark:text-[#93adc8] leading-relaxed">
                        Masukkan alamat email Anda yang terdaftar untuk menerima kode verifikasi (OTP) guna mengatur
                        ulang kata sandi.
                    </p>
                </div>
                <form class="flex flex-col gap-5">
                    <label class="flex flex-col gap-2">
                        <span class="text-[#111418] dark:text-gray-200 text-sm font-medium">Email</span>
                        <div class="relative flex items-center">
                            <span class="absolute left-4 top-3 text-[#60758a]">
                                <span class="material-symbols-outlined">mail</span>
                            </span>
                            <input
                                class="w-full py-3 rounded-lg border border-[#dbe0e6] dark:border-[#3e4c59] bg-white dark:bg-[#111923] pl-11 pr-4 text-base text-[#111418] dark:text-white placeholder:text-[#9ca3af] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors"
                                placeholder="nama@email.com" type="email" />
                        </div>
                    </label>
                    <button
                        class="mt-2 w-full h-12 bg-primary hover:bg-blue-600 active:scale-[0.99] text-white rounded-lg font-bold text-sm tracking-wide shadow-md transition-all flex items-center justify-center gap-2 group"
                        type="button">
                        <span>Kirim Kode OTP</span>
                        <span
                            class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">send</span>
                    </button>
                    <div class="flex justify-center mt-2">
                        <a class="flex items-center gap-2 text-sm font-medium text-[#60758a] hover:text-primary dark:text-[#93adc8] dark:hover:text-white transition-colors"
                            href="{{ route('login') }}">
                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                            Kembali ke Login
                        </a>
                    </div>
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
        </div>
    </main>
</body>

</html>
