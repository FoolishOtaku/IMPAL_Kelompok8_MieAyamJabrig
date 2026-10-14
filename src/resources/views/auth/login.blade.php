@extends('layouts.auth')

@section('title', 'Masuk ke Akun')

@section('content')
<div class="auth-card">
    <!-- Left Hero Panel (Telkom Red Gradient with Orbital Graphics) -->
    <div class="auth-hero-panel">
        <!-- SVG Orbital Graphic from Reference Design -->
        <svg class="hero-orbital-graphic" viewBox="0 0 500 500" aria-hidden="true">
            <circle class="orbit-outer" cx="340" cy="250" r="230" />
            <circle class="orbit-middle" cx="340" cy="250" r="160" />
            <circle class="orbit-inner" cx="340" cy="250" r="95" />
            <circle class="orbit-glow-point" cx="180" cy="250" r="30" />
            <circle class="orbit-node" cx="180" cy="250" r="5" />
        </svg>

        <div class="hero-inner-content">
            <!-- Top Kicker -->
            <div class="hero-kicker">
                &mdash; LEARN WITHOUT BOUNDARIES
            </div>

            <!-- Main Hero Typography -->
            <div class="hero-center-block">
                <div class="hero-category">LEARNING PORTAL</div>
                <h1 class="hero-title">Your learning<br>starts here.</h1>
                <p class="hero-lead">One place for every step of your learning journey.</p>
            </div>

            <!-- Bottom Tagline -->
            <div class="hero-footer-divider">
                <div class="hero-subtagline">LEARN &middot; GROW &middot; CONNECT</div>
            </div>
        </div>
    </div>

    <!-- Right Form Panel (Clean White with Dummy Account Auth) -->
    <div class="auth-form-panel">
        <div class="form-header-area">
            <div class="form-kicker">WELCOME</div>
            <h2 class="form-main-heading">Hi, welcome to LMS</h2>
            <div class="form-subheading">Learning Management System</div>
            <p class="form-helper-text">Pilih akun demo di bawah atau masukkan kredensial untuk masuk</p>
        </div>

        <!-- 1-Click Dummy Account Quick-Fill Switcher -->
        <div class="demo-role-section">
            <div class="demo-label">
                <span>PILIH AKUN DEMO:</span>
                <span class="badge text-white border-0 fw-semibold" id="activeRoleBadge" style="background-color: #ed1e28;">Klik salah satu</span>
            </div>
            <div class="demo-buttons-grid">
                <button type="button" class="btn-role-quick" id="btnRoleMahasiswa" onclick="selectDummyRole('mahasiswa')">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                    Mahasiswa
                </button>
                <button type="button" class="btn-role-quick" id="btnRoleDosen" onclick="selectDummyRole('dosen')">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                        <path d="M6 6h10M6 10h10"/>
                    </svg>
                    Dosen
                </button>
                <button type="button" class="btn-role-quick" id="btnRoleAdmin" onclick="selectDummyRole('admin')">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    Admin
                </button>
            </div>
        </div>

        <!-- Alert Notification Box -->
        <div id="loginAlertBox" class="auth-alert d-none" role="alert">
            <svg id="alertIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></svg>
            <span id="alertMessage"></span>
        </div>

        <!-- Dummy Credentials Form -->
        <form id="dummyLoginForm" class="login-form" onsubmit="handleLoginSubmit(event)">
            <!-- Username / NIM Field -->
            <div class="form-group-custom">
                <label for="usernameField" class="field-label">Username atau NIM / NIP</label>
                <div class="input-icon-wrapper">
                    <input type="text"
                           id="usernameField"
                           class="form-control-custom"
                           placeholder="Contoh: 103012400346 atau username"
                           autocomplete="username"
                           required>
                    <svg class="field-leading-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
            </div>

            <!-- Password Field with Visibility Toggle -->
            <div class="form-group-custom">
                <label for="passwordField" class="field-label">Kata Sandi</label>
                <div class="input-icon-wrapper">
                    <input type="password"
                           id="passwordField"
                           class="form-control-custom"
                           placeholder="Masukkan kata sandi"
                           autocomplete="current-password"
                           required>
                    <svg class="field-leading-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                    <button type="button" id="btnTogglePassword" class="btn-toggle-password" onclick="togglePasswordVisibility()" title="Tampilkan kata sandi">
                        <svg id="eyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Form Actions Row (Remember me & Help) -->
            <div class="form-actions-row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMeCheck" checked>
                    <label class="form-check-label" for="rememberMeCheck">Ingat saya</label>
                </div>
                <a href="javascript:void(0)" class="link-helper" data-bs-toggle="modal" data-bs-target="#helpModal">Bantuan login</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" id="btnSubmitLogin" class="btn-submit-login">
                <span id="btnSubmitText">Masuk ke LMS</span>
                <svg id="btnSubmitArrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
                <span id="btnSubmitSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
            </button>

            <!-- Security Footnote -->
            <div class="login-security-notice">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
                <span>Autentikasi prototipe CeLOE LMS Telkom University</span>
            </div>
        </form>

        <!-- Card Bottom Links (Language Dropdown & Cookie Notice) -->
        <div class="card-footer-row">
            <div class="dropdown language-dropdown-wrapper">
                <button class="btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="2" x2="22" y1="12" y2="12"/>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                    <span id="currentLangLabel">Bahasa Indonesia (id)</span>
                </button>
                <ul class="dropdown-menu shadow-sm border-0 py-1" style="font-size: 0.8125rem;">
                    <li><a class="dropdown-item py-1.5" href="javascript:void(0)" onclick="setLanguage('Bahasa Indonesia (id)')">Bahasa Indonesia (id)</a></li>
                    <li><a class="dropdown-item py-1.5" href="javascript:void(0)" onclick="setLanguage('English (en)')">English (en)</a></li>
                </ul>
            </div>

            <a href="javascript:void(0)" class="link-cookie-notice" data-bs-toggle="modal" data-bs-target="#cookieNoticeModal">
                <span>Pemberitahuan kuki</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17 17 7"/>
                    <path d="M7 7h10v10"/>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Modal for Cookie Notice -->
<div class="modal fade" id="cookieNoticeModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold" id="cookieModalLabel" style="color: #ed1e28;">Pemberitahuan Kuki</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary small py-3">
                CeLOE LMS Telkom University menggunakan kuki sesi esensial untuk menjaga status autentikasi, preferensi bahasa, dan keamanan sesi pengguna. Data kuki tidak dibagikan kepada pihak ketiga.
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-sm rounded-3 px-3 text-white" style="background-color: #ed1e28;" data-bs-dismiss="modal">Saya Mengerti</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Login Help -->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold" id="helpModalLabel" style="color: #ed1e28;">Bantuan Login LMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary small py-3">
                <p class="mb-2">Pada prototipe ini, Anda dapat mengklik tombol <strong>PILIH AKUN DEMO</strong> di atas form login untuk langsung mengisi akun contoh:</p>
                <ul class="mb-2 ps-3">
                    <li><strong>Mahasiswa:</strong> NIM <code>103012400346</code> / Password: <code>password123</code></li>
                    <li><strong>Dosen:</strong> NIP <code>19850101201012</code> / Password: <code>password123</code></li>
                    <li><strong>Admin:</strong> Username <code>admin.lms</code> / Password: <code>password123</code></li>
                </ul>
                <p class="mb-0 text-muted">Untuk kendala akun akademik riil, hubungi Unit IT Telkom University.</p>
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-sm rounded-3 px-3 text-white" style="background-color: #ed1e28;" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Robust Direct Inline Script for Instant Interactivity -->
<script>
    // 1. One-Click Dummy Role Auto-Fill
    window.selectDummyRole = function(role) {
        var credentials = {
            mahasiswa: { username: '103012400346', password: 'password123', label: 'MAHASISWA' },
            dosen:     { username: '19850101201012', password: 'password123', label: 'DOSEN' },
            admin:     { username: 'admin.lms',      password: 'password123', label: 'ADMIN' }
        };

        var cred = credentials[role];
        if (!cred) return;

        var uField = document.getElementById('usernameField');
        var pField = document.getElementById('passwordField');
        var badge  = document.getElementById('activeRoleBadge');

        if (uField) {
            uField.value = cred.username;
            uField.dispatchEvent(new Event('input', { bubbles: true }));
        }
        if (pField) {
            pField.value = cred.password;
            pField.dispatchEvent(new Event('input', { bubbles: true }));
        }

        // Highlight active button
        document.querySelectorAll('.btn-role-quick').forEach(function(b) {
            b.classList.remove('active');
        });
        var activeBtn = document.getElementById('btnRole' + role.charAt(0).toUpperCase() + role.slice(1));
        if (activeBtn) activeBtn.classList.add('active');

        // Update badge
        if (badge) {
            badge.textContent = cred.label;
            badge.style.backgroundColor = '#ed1e28';
        }

        // Hide alert if visible
        var alertBox = document.getElementById('loginAlertBox');
        if (alertBox) alertBox.classList.add('d-none');
    };

    // 2. Password Visibility Toggle
    window.togglePasswordVisibility = function() {
        var pField = document.getElementById('passwordField');
        var icon = document.getElementById('eyeIcon');
        var btn = document.getElementById('btnTogglePassword');
        if (!pField || !icon) return;

        var isPassword = pField.type === 'password';
        pField.type = isPassword ? 'text' : 'password';

        if (isPassword) {
            icon.innerHTML = '<path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/><line x1="2" x2="22" y1="2" y2="22"/>';
            if (btn) btn.title = 'Sembunyikan kata sandi';
        } else {
            icon.innerHTML = '<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>';
            if (btn) btn.title = 'Tampilkan kata sandi';
        }
    };

    // 3. Form Submission Simulation
    window.handleLoginSubmit = function(e) {
        if (e) e.preventDefault();

        var uField = document.getElementById('usernameField');
        var pField = document.getElementById('passwordField');
        var u = uField ? uField.value.trim() : '';
        var p = pField ? pField.value.trim() : '';

        var alertBox = document.getElementById('loginAlertBox');
        var alertMsg = document.getElementById('alertMessage');
        var alertIcon = document.getElementById('alertIcon');

        if (!u || !p) {
            if (alertBox && alertMsg && alertIcon) {
                alertBox.className = 'auth-alert alert-danger-custom';
                alertIcon.innerHTML = '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>';
                alertMsg.textContent = 'Mohon isi username dan kata sandi terlebih dahulu.';
                alertBox.classList.remove('d-none');
            }
            return false;
        }

        var btnSubmit = document.getElementById('btnSubmitLogin');
        var btnText = document.getElementById('btnSubmitText');
        var btnArrow = document.getElementById('btnSubmitArrow');
        var btnSpinner = document.getElementById('btnSubmitSpinner');

        if (btnSubmit) btnSubmit.disabled = true;
        if (btnText) btnText.textContent = 'Memverifikasi...';
        if (btnArrow) btnArrow.classList.add('d-none');
        if (btnSpinner) btnSpinner.classList.remove('d-none');

        setTimeout(function() {
            if (btnSubmit) btnSubmit.disabled = false;
            if (btnText) btnText.textContent = 'Masuk ke LMS';
            if (btnArrow) btnArrow.classList.remove('d-none');
            if (btnSpinner) btnSpinner.classList.add('d-none');

            var activeBtn = document.querySelector('.btn-role-quick.active');
            var roleName = activeBtn ? activeBtn.textContent.trim() : 'Pengguna';

            if (alertBox && alertMsg && alertIcon) {
                alertBox.className = 'auth-alert alert-success-custom';
                alertIcon.innerHTML = '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>';
                alertMsg.textContent = 'Autentikasi prototipe berhasil sebagai ' + roleName + ' (' + u + '). Integrasi backend & dashboard akan disambungkan pada tahap berikutnya.';
                alertBox.classList.remove('d-none');
            }
        }, 500);

        return false;
    };

    // 4. Language Switcher
    window.setLanguage = function(lang) {
        var label = document.getElementById('currentLangLabel');
        if (label) label.textContent = lang;
    };
</script>
@endsection
