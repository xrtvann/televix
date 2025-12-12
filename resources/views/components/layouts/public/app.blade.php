<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jasa Service TV Profesional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/darkmode.js'])
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-gray-200">
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <x-public.header />
        <main class="flex-grow">
            {{ $slot }}
        </main>
        <x-public.footer />
    </div>
</body>

</html>
