(function loadTheme() {
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Tambahkan class 'dark' jika tema tersimpan adalah gelap atau sistem preferensi adalah gelap
    if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
})();
console.log("Darkmode script loaded successfully.");
window.toggleDarkMode = function() {
    console.log("Button clicked!");
    const htmlElement = document.documentElement;
    const isDark = htmlElement.classList.toggle('dark');

    if (isDark) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
};
