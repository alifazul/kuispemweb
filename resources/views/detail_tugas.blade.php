@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Lihat Status
                    </div>

                    <div class="card-body">
                  
                                    <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label><h5>Judul</h5></label>
                                                   <p>{{ $tasks->judul }}</p>

                                                </div>
                                            
                                          
                                                <div class="form-group col-md-12">
                                                    <label><h5>Deskripsi</h5></label>
                                                    <p>{{ $tasks->deskripsi }}</p>
                                                </div>
                                            <div class="form-group col-md-12">
                                                <label><h5>Status</h5></label><br>
                                                <?php if($tasks->status=='completed'){
                                            echo "<span class='badge badge-success'>$tasks->status</span>";
                                        }else if($tasks->status=='incompleted'){
                                            echo "<span class='badge badge-warning'>$tasks->status</span>";
                                        } ?>
                                                </div>
                                            </div>
                                        
                                        <div class="form-group col-md-12 center">
                                            <div class="row">
                                            <div class="col-md-2">
                                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary btn-reset">Kembali</a>
                                            </div>
                                            </div>
                                        </div>
                                
                    </div>
                    
                </div>
    </div>     
    </div>
                            
</div>

@endsection