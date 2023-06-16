<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Tugas;
use Illuminate\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    public function index(): View
    {
        $tasks = Tugas::latest()->paginate(7);
        return view('index', compact('tasks'));
    }
    
    public function create(): View
    {
        return view('tambah_tugas');
    }

    
    
    public function show($id): View
    {
        $tasks = Tugas::findOrFail($id);
        return view('detail_tugas',compact('tasks'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'judul'=>'required',
            'deskripsi'=>'required'
        ]);

        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status
        ]);

        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('tasks.index');
    }    

    public function editstatus($id,$status): View
    {
        $tasks = Tugas::findOrFail($id);
        return view('edit_status', compact('tasks'));
    }

    public function changestatus(Request $request, $id): RedirectResponse
    {
       
        $tasks = Tugas::findOrFail($id);

        $tasks->update([
            'status' => $request->status
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('tasks.index');
      
    }

    
    public function edit($id): View
    {
        $tasks = Tugas::findOrFail($id);
        return view('edit_tugas', compact('tasks'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request,[
            'judul'=>'required',
            'deskripsi'=>'required'
        ]);

        $tasks = Tugas::findOrFail($id);

        $tasks->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('tasks.index');
    }

    public function destroy($id): RedirectResponse
    {
        $tasks = Tugas::findOrFail($id);
        $tasks->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('tasks.index');
    }
}