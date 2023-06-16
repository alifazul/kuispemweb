

<?php $__env->startSection('content'); ?>
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
                                                   <p><?php echo e($tasks->judul); ?></p>

                                                </div>
                                            
                                          
                                                <div class="form-group col-md-12">
                                                    <label><h5>Deskripsi</h5></label>
                                                    <p><?php echo e($tasks->deskripsi); ?></p>
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
                                            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary btn-reset">Kembali</a>
                                            </div>
                                            </div>
                                        </div>
                                
                    </div>
                    
                </div>
    </div>     
    </div>
                            
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis_pemweb\resources\views/detail_tugas.blade.php ENDPATH**/ ?>