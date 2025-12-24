document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar-menu");
    const toggleBtn = document.getElementById("sidebar-toggle-btn");
    const sidebarBrand = document.getElementById("sidebar-brand");
    const toggleIcon = document.getElementById("toggle-icon");
    const containerSidebarBrand = document.getElementById(
        "container-sidebar-brand"
    );
    const sidebarTexts = document.querySelectorAll(".sidebar-text");
    const menuDetails = document.querySelectorAll("details");
    const dropdownArrows = document.querySelectorAll(".dropdown-arrow");
    const dropdownContents = document.querySelectorAll(".dropdown-content");

    toggleBtn.addEventListener("click", () => {
        const isCollapsed = sidebar.classList.contains("w-65");

        if (isCollapsed) {
            sidebar.classList.replace("w-65", "w-20");
            sidebar.classList.replace("p-4", "p-3");
            sidebar.classList.add("sidebar-collapsed");
            sidebarBrand.classList.add("hidden");
            containerSidebarBrand.classList.add("flex-col");

            sidebarTexts.forEach((text) => {
                text.classList.replace("opacity-100", "opacity-0");
                // Gunakan timeout kecil sebelum hidden agar animasi opacity terlihat
                setTimeout(() => text.classList.add("hidden"), 300);
            });

            // Sembunyikan dropdown arrow saat sidebar collapsed
            dropdownArrows.forEach((arrow) => {
                arrow.classList.replace("opacity-100", "opacity-0");
                setTimeout(() => arrow.classList.add("hidden"), 300);
            });

            // Tutup semua dropdown dan sembunyikan kontennya
            menuDetails.forEach((detail) => {
                detail.removeAttribute("open");
            });

            // Sembunyikan dropdown content
            dropdownContents.forEach((content) => {
                content.classList.add("hidden");
            });

            toggleIcon.textContent = "menu";
        } else {
            sidebar.classList.replace("w-20", "w-65");
            sidebar.classList.replace("p-3", "p-4");
            sidebar.classList.remove("sidebar-collapsed");
            containerSidebarBrand.classList.remove("flex-col");
            sidebarBrand.classList.remove("hidden");

            sidebarTexts.forEach((text) => {
                text.classList.remove("hidden");
                text.classList.replace("opacity-0", "opacity-100");
            });

            // Tampilkan kembali dropdown arrow
            dropdownArrows.forEach((arrow) => {
                arrow.classList.remove("hidden");
                arrow.classList.replace("opacity-0", "opacity-100");
            });

            // Tampilkan kembali dropdown content
            dropdownContents.forEach((content) => {
                content.classList.remove("hidden");
            });

            toggleIcon.textContent = "menu_open";
        }
    });

    // Prevent dropdown dari dibuka saat sidebar collapsed
    menuDetails.forEach((detail) => {
        detail.addEventListener("toggle", (e) => {
            if (sidebar.classList.contains("sidebar-collapsed")) {
                e.preventDefault();
                detail.removeAttribute("open");
            }
        });
    });
});
