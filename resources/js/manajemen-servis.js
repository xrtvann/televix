// Manajemen Servis JavaScript
let ordersData = [];

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    initializeModals();
    initializeButtons();
});

// Initialize all modals
function initializeModals() {
    // Close modals on ESC key
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeAllModals();
        }
    });

    // Close modals on backdrop click
    const modals = [
        "createOrderModal",
        "editOrderModal",
        "assignTechnicianModal",
        "updateStatusModal",
    ];
    modals.forEach((modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.addEventListener("click", function (e) {
                if (e.target === modal) {
                    closeModal(modalId);
                }
            });
        }
    });
}

// Initialize all buttons
function initializeButtons() {
    // Create Order Button
    const createBtn = document.getElementById("createOrderBtn");
    if (createBtn) {
        createBtn.addEventListener("click", openCreateModal);
    }

    // Export CSV Button
    const exportBtn = document.getElementById("exportCsvBtn");
    if (exportBtn) {
        exportBtn.addEventListener("click", exportToCSV);
    }

    // Initialize auto-search
    initializeAutoSearch();
}

// Initialize auto-search functionality
function initializeAutoSearch() {
    const searchInput = document.querySelector('input[name="search"]');
    if (!searchInput) return;

    let debounceTimer;

    searchInput.addEventListener("input", function (e) {
        // Clear previous timer
        clearTimeout(debounceTimer);

        // Set new timer (delay 500ms after user stops typing)
        debounceTimer = setTimeout(() => {
            // Submit the form
            const form = searchInput.closest("form");
            if (form) {
                form.submit();
            }
        }, 500);
    });
}

// Set orders data from PHP
function setOrdersData(data) {
    ordersData = data;
}

// ==================== CREATE ORDER MODAL ====================
function openCreateModal() {
    const modal = document.getElementById("createOrderModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeCreateModal() {
    const modal = document.getElementById("createOrderModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== EDIT ORDER MODAL ====================
function openEditModal(orderId) {
    const order = ordersData.find((o) => o.id === orderId);
    if (!order) {
        console.error("Order not found:", orderId);
        return;
    }

    // Set form action
    const form = document.getElementById("editOrderForm");
    if (form) {
        form.action = `/manajemen-servis/${orderId}`;
    }

    // Populate form fields
    setInputValue("edit_customer_name", order.customer_name);
    setInputValue("edit_customer_phone", order.customer_phone);
    setInputValue("edit_customer_address", order.customer_address);
    setInputValue("edit_device_type", order.device_type);
    setInputValue("edit_device_brand", order.device_brand);
    setInputValue("edit_device_model", order.device_model);
    setInputValue("edit_problem_description", order.problem_description);
    setInputValue("edit_status", order.status);
    setInputValue("edit_technician_id", order.technician_id || "");
    setInputValue("edit_estimated_cost", order.estimated_cost || "");
    setInputValue("edit_final_cost", order.final_cost || "");
    setInputValue("edit_notes", order.notes);

    // Show modal
    const modal = document.getElementById("editOrderModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeEditModal() {
    const modal = document.getElementById("editOrderModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== ASSIGN TECHNICIAN MODAL ====================
function openAssignModal(orderId) {
    // Set form action
    const form = document.getElementById("assignTechnicianForm");
    if (form) {
        form.action = `/manajemen-servis/${orderId}/assign-technician`;
    }

    // Reset select
    const select = document.getElementById("assign_technician_id");
    if (select) {
        select.value = "";
    }

    // Show modal
    const modal = document.getElementById("assignTechnicianModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeAssignModal() {
    const modal = document.getElementById("assignTechnicianModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== UPDATE STATUS MODAL ====================
function openStatusModal(orderId, currentStatus) {
    const order = ordersData.find((o) => o.id === orderId);

    // Set form action
    const form = document.getElementById("updateStatusForm");
    if (form) {
        form.action = `/manajemen-servis/${orderId}/update-status`;
    }

    // Set current status
    setInputValue("update_status", currentStatus);

    const statusLabel = document.getElementById("current_status_label");
    if (statusLabel && order) {
        statusLabel.textContent = order.status_label || currentStatus;
    }

    // Show modal
    const modal = document.getElementById("updateStatusModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeStatusModal() {
    const modal = document.getElementById("updateStatusModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== EXPORT CSV ====================
function exportToCSV() {
    if (!ordersData || ordersData.length === 0) {
        alert("Tidak ada data untuk di-export");
        return;
    }

    // Build CSV content with BOM for Excel
    let csv = "\uFEFF"; // UTF-8 BOM
    csv +=
        "No Order,Pelanggan,Telepon,Perangkat,Merek,Model,Keluhan,Status,Teknisi,Estimasi Biaya,Biaya Final,Tanggal Masuk,Tanggal Selesai\n";

    ordersData.forEach((order) => {
        const row = [
            escapeCSV(order.order_number || ""),
            escapeCSV(order.customer_name || ""),
            escapeCSV(order.customer_phone || ""),
            escapeCSV(order.device_type || ""),
            escapeCSV(order.device_brand || ""),
            escapeCSV(order.device_model || ""),
            escapeCSV((order.problem_description || "").replace(/\n/g, " ")),
            escapeCSV(order.status_label || ""),
            escapeCSV(order.technician_name || ""),
            order.estimated_cost || "0",
            order.final_cost || "0",
            order.received_at || "",
            order.completed_at || "",
        ].join(",");
        csv += row + "\n";
    });

    // Create download link
    const blob = new Blob([csv], { type: "text/csv;charset=utf-8;" });
    const link = document.createElement("a");
    const url = URL.createObjectURL(blob);

    const timestamp = new Date().toISOString().slice(0, 10);
    link.setAttribute("href", url);
    link.setAttribute("download", `order-servis-${timestamp}.csv`);
    link.style.visibility = "hidden";

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    // Show success message (optional)
    console.log("CSV exported successfully");
}

// ==================== UTILITY FUNCTIONS ====================
function closeAllModals() {
    closeCreateModal();
    closeEditModal();
    closeAssignModal();
    closeStatusModal();
}

function closeModal(modalId) {
    if (modalId === "createOrderModal") closeCreateModal();
    if (modalId === "editOrderModal") closeEditModal();
    if (modalId === "assignTechnicianModal") closeAssignModal();
    if (modalId === "updateStatusModal") closeStatusModal();
}

function setInputValue(elementId, value) {
    const element = document.getElementById(elementId);
    if (element) {
        element.value = value || "";
    }
}

function escapeCSV(str) {
    if (str === null || str === undefined) return '""';
    str = String(str);
    if (str.includes('"') || str.includes(",") || str.includes("\n")) {
        return '"' + str.replace(/"/g, '""') + '"';
    }
    return str;
}

// Export functions to global scope for onclick handlers
window.openCreateModal = openCreateModal;
window.closeCreateModal = closeCreateModal;
window.openEditModal = openEditModal;
window.closeEditModal = closeEditModal;
window.openAssignModal = openAssignModal;
window.closeAssignModal = closeAssignModal;
window.openStatusModal = openStatusModal;
window.closeStatusModal = closeStatusModal;
window.exportToCSV = exportToCSV;
window.setOrdersData = setOrdersData;
