@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Tambah Tugas
                    </div>

                    <div class="card-body">
                    <form class="needs-validation" action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required>
                                                    <div class="invalid-feedback">Judul tidak boleh kosong.</div>
                                                </div>
                                            
                                          
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required></textarea>
                                                    <div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>
                                                </div>
                                            <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <select class="form-control select" name="status" style="width: 100%;">
                                                    <option value="completed">Selesai</option>
                                                    <option value="incompleted">Belum Selesai</option>
                                                </select>
                                                </div>
                                            </div>
                                        
                                        <div class="form-group col-md-12 center">
                                            <div class="row">
                                                <div class="col-md-10">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Tambah" >
                                            </div>
                                            <div class="col-md-2">
                                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary btn-reset">Batal</a>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                    
                </div>
    </div>     
    </div>
                            
</div>

@endsection