@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Edit Status
                    </div>

                    <div class="card-body">
                    <form class="needs-validation" action="{{ route('tasks.changestatus', [$tasks->id,$tasks->status]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $tasks->judul) }}" disabled required>
                                                    <div class="invalid-feedback">Judul tidak boleh kosong.</div>
                                                </div>
                                            
                                          
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi', $tasks->deskripsi) }}" required disabled>{{ $tasks->deskripsi }}</textarea>
                                                    <div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>
                                                </div>
                                            <div class="form-group col-md-12">
                                                <label>Status</label>
                                                <select class="form-control select" name="status" style="width: 100%;">
                                                    <option value="completed" {{ old('status', $tasks->status) == 'completed' ? 'selected':'' }}>Selesai</option>
                                                    <option value="incompleted" {{ old('status', $tasks->status) == 'incompleted' ? 'selected':'' }}>Belum Selesai</option>
                                                </select>
                                                </div>
                                            </div>
                                        
                                        <div class="form-group col-md-12 center">
                                            <div class="row">
                                                <div class="col-md-10">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Simpan" >
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