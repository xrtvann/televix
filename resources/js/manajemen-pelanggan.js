// Manajemen Pelanggan JavaScript
let customersData = [];

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    initializeModals();
    initializeButtons();
    initializeAutoSearch();
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
        "createCustomerModal",
        "editCustomerModal",
        "deleteCustomerModal",
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
    // Create Customer Button
    const createBtn = document.getElementById("createCustomerBtn");
    if (createBtn) {
        createBtn.addEventListener("click", openCreateModal);
    }

    // Export CSV Button
    const exportBtn = document.getElementById("exportCsvBtn");
    if (exportBtn) {
        exportBtn.addEventListener("click", exportToCSV);
    }
}

// Initialize auto-search functionality
function initializeAutoSearch() {
    const searchInput = document.querySelector('input[name="search"]');
    if (!searchInput) return;

    let debounceTimer;

    searchInput.addEventListener("input", function (e) {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const form = searchInput.closest("form");
            if (form) {
                form.submit();
            }
        }, 500);
    });
}

// Set customers data from PHP
function setCustomersData(data) {
    customersData = data;
}

// ==================== CREATE CUSTOMER MODAL ====================
function openCreateModal() {
    const modal = document.getElementById("createCustomerModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeCreateModal() {
    const modal = document.getElementById("createCustomerModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== EDIT CUSTOMER MODAL ====================
function openEditModal(customerId) {
    const customer = customersData.find((c) => c.id === customerId);
    if (!customer) {
        console.error("Customer not found:", customerId);
        return;
    }

    // Set form action
    const form = document.getElementById("editCustomerForm");
    if (form) {
        form.action = `/manajemen-pelanggan/${customerId}`;
    }

    // Populate form fields
    setInputValue("edit_name", customer.name);
    setInputValue("edit_phone", customer.phone);
    setInputValue("edit_email", customer.email);
    setInputValue("edit_address", customer.address);
    setInputValue("edit_notes", customer.notes);

    // Show modal
    const modal = document.getElementById("editCustomerModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeEditModal() {
    const modal = document.getElementById("editCustomerModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== DELETE CUSTOMER MODAL ====================
function openDeleteModal(customerId, customerName) {
    const form = document.getElementById("deleteCustomerForm");
    if (form) {
        form.action = `/manajemen-pelanggan/${customerId}`;
    }

    const nameSpan = document.getElementById("delete_customer_name");
    if (nameSpan) {
        nameSpan.textContent = customerName;
    }

    const modal = document.getElementById("deleteCustomerModal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeDeleteModal() {
    const modal = document.getElementById("deleteCustomerModal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto";
    }
}

// ==================== EXPORT CSV ====================
function exportToCSV() {
    window.location.href = "/manajemen-pelanggan/export/csv";
}

// ==================== UTILITY FUNCTIONS ====================
function closeAllModals() {
    closeCreateModal();
    closeEditModal();
    closeDeleteModal();
}

function closeModal(modalId) {
    if (modalId === "createCustomerModal") closeCreateModal();
    if (modalId === "editCustomerModal") closeEditModal();
    if (modalId === "deleteCustomerModal") closeDeleteModal();
}

function setInputValue(elementId, value) {
    const element = document.getElementById(elementId);
    if (element) {
        element.value = value || "";
    }
}

// Export functions to global scope
window.openCreateModal = openCreateModal;
window.closeCreateModal = closeCreateModal;
window.openEditModal = openEditModal;
window.closeEditModal = closeEditModal;
window.openDeleteModal = openDeleteModal;
window.closeDeleteModal = closeDeleteModal;
window.exportToCSV = exportToCSV;
window.setCustomersData = setCustomersData;
