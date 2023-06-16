

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Tambah Tugas
                    </div>

                    <div class="card-body">
                    <form class="needs-validation" action="<?php echo e(route('tasks.store')); ?>" method="post" enctype="multipart/form-data" novalidate>
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control" name="judul" value="<?php echo e(old('judul')); ?>" required>
                                                    <div class="invalid-feedback">Judul tidak boleh kosong.</div>
                                                </div>
                                            </div>
                                        <div class="my-md-4 pt-md-1 border-top"> </div>
                                        <div class="form-group col-md-12 right">
                                            <input type="submit" class="btn btn-info btn-submit mr-2" value="Tambah" >
                                            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary btn-reset">Batal</a>
                                        </div>
                                    </form>
                    </div>
                    
                </div>
    </div>     
    </div>
                            
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis_pemweb\resources\views/tambahmagang.blade.php ENDPATH**/ ?>