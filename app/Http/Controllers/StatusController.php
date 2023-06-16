<?php

namespace App\Http\Controllers;
use App\Models\Tugas;
use Illuminate\View\View;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function showcompleted(): View
    {
        
       $tasks = Tugas::where('status','completed')->get();
       return view('tugas_selesai', ['tasks' => $tasks]);
    }

    public function showincompleted(): View
    {
        $tasks = Tugas::where('status','incompleted')->get();
        return view('tugas_belumselesai', compact('tasks'));
    }
}
