
<?php $__env->startSection('title', 'Create Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="card">
    <h2>Create Data Mahasiswa</h2>
    <form class="form-horizontal" action="/mahasiswa/store" method="post">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger" role="alert">
        Please fix the following errors
      </div>
      <?php endif; ?>
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="nim">NIM:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nim" placeholder="Enter NIM" name="nim">
        </div>
        <?php if($errors->has('nim')): ?>
        <span class="help-block"><?php echo e($errors->first('nim')); ?></span>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="nama">Nama:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama">
        </div>
        <?php if($errors->has('nama')): ?>
        <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="jurusan">Prodi:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Jurusan" name="jurusan">
        </div>
        <?php if($errors->has('nama')): ?>
        <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="fakultas">Jurusan:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Fakultas" name="fakultas">
        </div>
        <?php if($errors->has('nama')): ?>
        <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/unibava/resources/views/mahasiswa_create.blade.php ENDPATH**/ ?>