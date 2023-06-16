@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">       
                <div class="card">
                    <div class="card-header">
                        List Tugas
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach($tasks as $a)
                                    <tr>     
                                        <td>{{ $no }}</td>
                                        <td>{{ $a->judul }}</td>
                                        <td>{{ $a->deskripsi }}</td>
                                        <td><span class='badge badge-warning'>{{ $a->status }}</span>
                                        </td>
                                        <td class="text-center">
                                        <a href="{{ route('tasks.show', $a->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-info-circle"></i>Lihat Tugas</a> &nbsp;
                                            <a href="{{ route('tasks.edit', $a->id) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>Edit Tugas</a> &nbsp;
                                            <a href="{{ route('tasks.editstatus',[$a->id,$a->status]) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-edit"></i>Edit Status</a>
                                            @method('DELETE')
                                            <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Tugas Ini?');" action="{{ route('tasks.destroy', $a->id) }}" method="GET">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection