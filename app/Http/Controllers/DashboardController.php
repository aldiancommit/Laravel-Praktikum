<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total keseluruhan
        $totalStudents = Student::count();
        $totalMajors = Majors::count();

        // Mengambil semua jurusan beserta jumlah mahasiswanya
        // Syarat: Model Majors harus punya relasi hasMany ke Student
        $majors = Majors::withCount('students')->get();

        return view('dashboard', compact('totalStudents', 'totalMajors', 'majors'));
    }
}

