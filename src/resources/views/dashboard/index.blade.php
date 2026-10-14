@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <!-- Welcome Hero Banner -->
    <div class="col-12">
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm position-relative overflow-hidden"
             style="background: linear-gradient(135deg, #ed1e28 0%, #b8141d 55%, #74080d 100%);">
            <!-- Decorative SVG Circles -->
            <svg class="position-absolute end-0 top-0 h-100 opacity-25 d-none d-md-block" style="pointer-events: none;" viewBox="0 0 400 400">
                <circle cx="300" cy="200" r="180" stroke="white" stroke-width="2" fill="none" />
                <circle cx="300" cy="200" r="120" stroke="white" stroke-width="1.5" fill="none" />
                <circle cx="300" cy="200" r="60" stroke="white" stroke-width="1" fill="none" />
            </svg>

            <div class="position-relative" style="z-index: 1; max-width: 700px;">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-20 text-white mb-3" style="font-size: 0.75rem; letter-spacing: 0.5px; font-weight: 600;">
                    <span class="rounded-circle bg-white" style="width: 6px; height: 6px;"></span>
                    SESI TERAUTENTIKASI SEBAGAI {{ strtoupper($user->role_badge) }}
                </div>
                <h1 class="display-6 fw-bold mb-2">Selamat Datang, {{ $user->name }}!</h1>
                <p class="lead mb-0 text-white text-opacity-90" style="font-size: 1rem;">
                    Portal pembelajaran digital CeLOE LMS Telkom University. Akses materi perkuliahan, forum diskusi, dan tugas akademik Anda di sini.
                </p>
            </div>
        </div>
    </div>

    <!-- User Profile & Academic Identity Info -->
    <div class="col-12 col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: #1e293b;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ed1e28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    Informasi Akun
                </h5>

                <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom">
                    <div class="rounded-4 text-white d-flex align-items-center justify-content-center fw-bold fs-4 shadow-sm"
                         style="width: 60px; height: 60px; background: linear-gradient(135deg, #ed1e28, #9b0f15);">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div>
                        <div class="fw-bold text-dark">{{ $user->name }}</div>
                        <span class="badge rounded-pill fw-semibold mt-1" style="background-color: #fee2e2; color: #ed1e28;">
                            {{ $user->role_badge }}
                        </span>
                    </div>
                </div>

                <div class="d-flex flex-column gap-2.5 small">
                    <div class="d-flex justify-content-between py-1 border-bottom border-light">
                        <span class="text-muted">{{ $user->identifier_label }}</span>
                        <span class="fw-semibold text-dark">{{ $user->username }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-1 border-bottom border-light">
                        <span class="text-muted">Email SSO</span>
                        <span class="fw-semibold text-dark text-truncate" style="max-width: 180px;" title="{{ $user->email }}">{{ $user->email }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-1 border-bottom border-light">
                        <span class="text-muted">Program Studi</span>
                        <span class="fw-semibold text-dark">{{ $user->prodi ?? 'Telkom University' }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-1 border-bottom border-light">
                        <span class="text-muted">Status Akun</span>
                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">Aktif &bull; Terverifikasi</span>
                    </div>
                    <div class="d-flex justify-content-between py-1">
                        <span class="text-muted">Waktu Masuk</span>
                        <span class="fw-medium text-dark">{{ now()->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB</span>
                    </div>
                </div>

                <hr class="my-4">

                <!-- Quick Logout Action -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger w-100 rounded-3 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        Keluar dari Akun (Logout)
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Course Overview Preview (DPPL B-01 P002_HalamanMainCourse) -->
    <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0 d-flex align-items-center gap-2" style="color: #1e293b;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ed1e28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                            <path d="M6 6h10M6 10h10"/>
                        </svg>
                        Mata Kuliah Terdaftar (P002)
                    </h5>
                    <span class="badge text-secondary border bg-light small rounded-pill px-2.5 py-1">Semester Ganjil 2026/2027</span>
                </div>

                <div class="row g-3 mt-1">
                    @forelse($courses as $course)
                        <div class="col-12">
                            <div class="card border border-light-subtle rounded-3 hover-shadow transition p-3">
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-3 d-flex align-items-center justify-content-center text-white fw-bold"
                                             style="width: 48px; height: 48px; background-color: {{ $course['color'] }}; font-size: 0.75rem;">
                                            {{ substr($course['code'], 0, 3) }}
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-secondary-subtle text-secondary rounded-pill" style="font-size: 0.7rem;">{{ $course['code'] }}</span>
                                                <span class="text-muted" style="font-size: 0.75rem;">{{ $course['semester'] }}</span>
                                            </div>
                                            <h6 class="fw-bold mb-1 mt-0.5 text-dark">{{ $course['name'] }}</h6>
                                            <div class="text-muted small">Dosen: {{ $course['instructor'] }}</div>
                                        </div>
                                    </div>
                                    <div class="text-md-end pt-2 pt-md-0" style="min-width: 140px;">
                                        <div class="d-flex justify-content-between align-items-center small text-muted mb-1">
                                            <span>Progress</span>
                                            <span class="fw-bold text-dark">{{ $course['progress'] }}%</span>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $course['progress'] }}%; background-color: {{ $course['color'] }};" aria-valuenow="{{ $course['progress'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted py-4">Belum ada mata kuliah yang terdaftar.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
