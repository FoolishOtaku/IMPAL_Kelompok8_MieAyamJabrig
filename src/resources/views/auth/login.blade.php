@extends('layouts.auth')

@section('title', 'Masuk ke Akun')

@section('content')
<div class="auth-card">
    <!-- Left Hero Panel (Deep Navy with Orbital Graphics) -->
    <div class="auth-hero-panel">
        <!-- SVG Orbital Graphic from Reference Design -->
        <svg class="hero-orbital-graphic" viewBox="0 0 500 500" aria-hidden="true">
            <circle class="orbit-outer" cx="340" cy="250" r="230" />
            <circle class="orbit-middle" cx="340" cy="250" r="160" />
            <circle class="orbit-inner" cx="340" cy="250" r="95" />
            <circle class="orbit-glow-point" cx="180" cy="250" r="28" />
            <circle class="orbit-node" cx="180" cy="250" r="4.5" />
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
            <p class="form-helper-text">Pilih akun dummy atau masukkan kredensial untuk masuk</p>
        </div>

        <!-- 1-Click Dummy Account Quick-Fill Switcher -->
        <div class="demo-role-section">
            <div class="demo-label">
                <span>AKUN DEMO PROTOTIPE</span>
                <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle fw-semibold" id="activeRoleBadge">Pilih Peran</span>
            </div>
            <div class="demo-buttons-grid">
                <button type="button" class="btn-role-quick" data-role="mahasiswa" data-username="103012400346" data-password="password123">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                    Mahasiswa
                </button>
                <button type="button" class="btn-role-quick" data-role="dosen" data-username="19850101201012" data-password="password123">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                        <path d="M6 6h10M6 10h10"/>
                    </svg>
                    Dosen
                </button>
                <button type="button" class="btn-role-quick" data-role="admin" data-username="admin.lms" data-password="password123">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    Admin
                </button>
            </div>
        </div>

        <!-- Alert Notification (Dismissible Demo / Error Message) -->
        <div id="loginAlertBox" class="auth-alert d-none" role="alert">
            <svg id="alertIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></svg>
            <span id="alertMessage"></span>
        </div>

        <!-- Dummy Credentials Form -->
        <form id="dummyLoginForm" class="login-form" onsubmit="return false;">
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
                    <button type="button" id="btnTogglePassword" class="btn-toggle-password" title="Tampilkan kata sandi">
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
                <a href="javascript:void(0)" id="btnHelpModal" class="link-helper">Bantuan login</a>
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
                    <li><a class="dropdown-item py-1.5 lang-select-item" href="javascript:void(0)" data-lang="id">Bahasa Indonesia (id)</a></li>
                    <li><a class="dropdown-item py-1.5 lang-select-item" href="javascript:void(0)" data-lang="en">English (en)</a></li>
                </ul>
            </div>

            <a href="javascript:void(0)" id="btnCookieNotice" class="link-cookie-notice">
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
                <h5 class="modal-title fw-bold text-navy" id="cookieModalLabel">Pemberitahuan Kuki</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary small py-3">
                CeLOE LMS Telkom University menggunakan kuki sesi esensial untuk menjaga status autentikasi, preferensi bahasa, dan keamanan sesi pengguna. Data kuki tidak dibagikan kepada pihak ketiga.
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-primary btn-sm rounded-3 px-3" data-bs-dismiss="modal">Saya Mengerti</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Login Help -->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold text-navy" id="helpModalLabel">Bantuan Login LMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary small py-3">
                <p class="mb-2">Pada prototipe ini, Anda dapat menggunakan tombol <strong>Akun Demo</strong> di atas form login untuk langsung mengisi akun contoh:</p>
                <ul class="mb-2 ps-3">
                    <li><strong>Mahasiswa:</strong> NIM <code>103012400346</code> / Password: <code>password123</code></li>
                    <li><strong>Dosen:</strong> NIP <code>19850101201012</code> / Password: <code>password123</code></li>
                    <li><strong>Admin:</strong> Username <code>admin.lms</code> / Password: <code>password123</code></li>
                </ul>
                <p class="mb-0 text-muted">Untuk kendala akun akademik riil, hubungi Unit IT Telkom University.</p>
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-primary btn-sm rounded-3 px-3" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection
