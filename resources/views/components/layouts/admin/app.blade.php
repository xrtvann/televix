<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Televix | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/darkmode.js', 'resources/js/dashboard.js'])
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display">
    <div class="flex h-screen w-full overflow-hidden">
        <x-admin.sidebar />
        <main class="flex-1 flex flex-col h-full relative overflow-hidden bg-background-light dark:bg-background-dark">
            <x-admin.header />
            {{ $slot }}

        </main>
    </div>
</body>

</html>
