

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Tambah Tugas
                    </div>

                    <div class="card-body">
                    <form class="needs-validation" action="<?php echo e(route('tasks.store')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                            <div class="col">
                                                <div class="form-group col-md-12">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="judul" value="<?php echo e(old('judul')); ?>" required>
                                                    <div class="invalid-feedback">Judul tidak boleh kosong.</div>
                                                </div>
                                            
                                          
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" required></textarea>
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
                                            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary btn-reset">Batal</a>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                    
                </div>
    </div>     
    </div>
                            
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis_pemweb\resources\views/tambah_tugas.blade.php ENDPATH**/ ?>