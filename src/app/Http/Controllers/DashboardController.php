<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the main LMS dashboard (P002_HalamanMainCourse).
     */
    public function index(Request $request): View
    {
        $user = Auth::user();

        // Sample contextual courses for development preview
        $courses = [
            [
                'code'       => 'CSG3H3',
                'name'       => 'Implementasi Perangkat Lunak',
                'semester'   => 'Semester Ganjil 2026/2027',
                'instructor' => 'Dr. Ir. Siti Dosen Rahayu, M.T.',
                'progress'   => 75,
                'color'      => '#ed1e28',
            ],
            [
                'code'       => 'CSG3I3',
                'name'       => 'Pengembangan Aplikasi Web Modern',
                'semester'   => 'Semester Ganjil 2026/2027',
                'instructor' => 'Tim Dosen Informatika',
                'progress'   => 60,
                'color'      => '#18212f',
            ],
            [
                'code'       => 'CSG3J3',
                'name'       => 'Basis Data Terdistribusi & Cloud',
                'semester'   => 'Semester Ganjil 2026/2027',
                'instructor' => 'Tim Dosen Basis Data',
                'progress'   => 45,
                'color'      => '#475569',
            ],
        ];

        return view('dashboard.index', compact('user', 'courses'));
    }
}
