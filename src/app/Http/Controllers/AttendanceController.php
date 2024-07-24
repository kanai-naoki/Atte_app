<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function attendance()
    {
        // attendance,restモデルから情報を持ってくる処理
        $Attendances = Attendance::Paginate(5);
        return view('attendance', compact('attendance'));
    }
}
