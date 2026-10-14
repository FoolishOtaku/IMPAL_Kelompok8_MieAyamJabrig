import * as bootstrap from 'bootstrap';

// Expose Bootstrap globally to window
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Password Visibility Toggle
    const btnTogglePassword = document.getElementById('btnTogglePassword');
    const passwordField = document.getElementById('passwordField');
    const eyeIcon = document.getElementById('eyeIcon');

    if (btnTogglePassword && passwordField && eyeIcon) {
        btnTogglePassword.addEventListener('click', () => {
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';

            if (isPassword) {
                // Eye Off Icon
                eyeIcon.innerHTML = `
                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                    <line x1="2" x2="22" y1="2" y2="22"/>
                `;
                btnTogglePassword.title = 'Sembunyikan kata sandi';
            } else {
                // Eye Open Icon
                eyeIcon.innerHTML = `
                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                    <circle cx="12" cy="12" r="3"/>
                `;
                btnTogglePassword.title = 'Tampilkan kata sandi';
            }
        });
    }

    // 2. 1-Click Quick Dummy Role Switcher
    const roleButtons = document.querySelectorAll('.btn-role-quick');
    const usernameField = document.getElementById('usernameField');
    const activeRoleBadge = document.getElementById('activeRoleBadge');

    roleButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const role = btn.getAttribute('data-role');
            const username = btn.getAttribute('data-username');
            const password = btn.getAttribute('data-password');

            roleButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (usernameField) usernameField.value = username;
            if (passwordField) passwordField.value = password;

            if (activeRoleBadge) {
                activeRoleBadge.textContent = role.toUpperCase();
                activeRoleBadge.className = 'badge bg-primary text-white border-0 fw-semibold';
            }

            // Hide previous alerts when switching role
            hideAlert();
        });
    });

    // 3. Mock Login Form Submission & Validation (Frontend-Only Simulation)
    const loginForm = document.getElementById('dummyLoginForm');
    const btnSubmit = document.getElementById('btnSubmitLogin');
    const btnSubmitText = document.getElementById('btnSubmitText');
    const btnSubmitArrow = document.getElementById('btnSubmitArrow');
    const btnSubmitSpinner = document.getElementById('btnSubmitSpinner');
    const alertBox = document.getElementById('loginAlertBox');
    const alertMessage = document.getElementById('alertMessage');
    const alertIcon = document.getElementById('alertIcon');

    function showAlert(type, message) {
        if (!alertBox || !alertMessage || !alertIcon) return;

        alertBox.className = `auth-alert ${type === 'success' ? 'alert-success-custom' : 'alert-danger-custom'}`;
        alertMessage.textContent = message;

        if (type === 'success') {
            alertIcon.innerHTML = `
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            `;
        } else {
            alertIcon.innerHTML = `
                <circle cx="12" cy="12" r="10"/>
                <line x1="12" y1="8" x2="12" y2="12"/>
                <line x1="12" y1="16" x2="12.01" y2="16"/>
            `;
        }

        alertBox.classList.remove('d-none');
    }

    function hideAlert() {
        if (alertBox) alertBox.classList.add('d-none');
    }

    if (loginForm && btnSubmit) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const username = usernameField ? usernameField.value.trim() : '';
            const password = passwordField ? passwordField.value.trim() : '';

            hideAlert();

            if (!username || !password) {
                showAlert('danger', 'Mohon isi username dan kata sandi terlebih dahulu.');
                return;
            }

            // Button loading state
            btnSubmit.disabled = true;
            if (btnSubmitText) btnSubmitText.textContent = 'Memverifikasi...';
            if (btnSubmitArrow) btnSubmitArrow.classList.add('d-none');
            if (btnSubmitSpinner) btnSubmitSpinner.classList.remove('d-none');

            // Simulate quick verification latency (600ms)
            setTimeout(() => {
                btnSubmit.disabled = false;
                if (btnSubmitText) btnSubmitText.textContent = 'Masuk ke LMS';
                if (btnSubmitArrow) btnSubmitArrow.classList.remove('d-none');
                if (btnSubmitSpinner) btnSubmitSpinner.classList.add('d-none');

                // Determine role name for display feedback
                const activeRoleBtn = document.querySelector('.btn-role-quick.active');
                const roleLabel = activeRoleBtn ? activeRoleBtn.textContent.trim() : 'Pengguna';

                showAlert('success', `Autentikasi prototipe berhasil sebagai ${roleLabel} (${username}). Antarmuka backend & dashboard akan disambungkan pada tahap berikutnya.`);
            }, 600);
        });
    }

    // 4. Modals (Help & Cookies)
    const btnHelpModal = document.getElementById('btnHelpModal');
    const helpModalEl = document.getElementById('helpModal');
    if (btnHelpModal && helpModalEl) {
        const helpModal = new bootstrap.Modal(helpModalEl);
        btnHelpModal.addEventListener('click', () => helpModal.show());
    }

    const btnCookieNotice = document.getElementById('btnCookieNotice');
    const cookieModalEl = document.getElementById('cookieNoticeModal');
    if (btnCookieNotice && cookieModalEl) {
        const cookieModal = new bootstrap.Modal(cookieModalEl);
        btnCookieNotice.addEventListener('click', () => cookieModal.show());
    }

    // 5. Language Switcher (Client-side indicator)
    const langItems = document.querySelectorAll('.lang-select-item');
    const currentLangLabel = document.getElementById('currentLangLabel');

    langItems.forEach(item => {
        item.addEventListener('click', () => {
            const label = item.textContent;
            if (currentLangLabel) currentLangLabel.textContent = label;
        });
    });
});
