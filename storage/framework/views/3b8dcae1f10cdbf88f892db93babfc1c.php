

<?php $__env->startSection('content'); ?>
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
                                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>     
                                        <td><?php echo e($no); ?></td>
                                        <td><?php echo e($a->judul); ?></td>
                                        <td><?php echo e($a->deskripsi); ?></td>
                                        <td><span class='badge badge-success'><?php echo e($a->status); ?></span>
                                        </td>
                                        <td class="text-center">
                                        <a href="<?php echo e(route('tasks.show', $a->id)); ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-info-circle"></i>Lihat Tugas</a> &nbsp;
                                            <a href="<?php echo e(route('tasks.edit', $a->id)); ?>" class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>Edit Tugas</a> &nbsp;
                                            <a href="<?php echo e(route('tasks.editstatus',[$a->id,$a->status])); ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-edit"></i>Edit Status</a>
                                            <?php echo method_field('DELETE'); ?>
                                            <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Tugas Ini?');" action="<?php echo e(route('tasks.destroy', $a->id)); ?>" method="GET">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis_pemweb\resources\views/tugas_selesai.blade.php ENDPATH**/ ?>