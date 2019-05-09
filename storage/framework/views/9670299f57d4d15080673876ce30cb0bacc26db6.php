
<?php $__env->startSection('title', 'Submit Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit" method="post">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>

                <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo e(old('title')); ?>">
                    <?php if($errors->has('title')): ?>
                        <span class="help-block"><?php echo e($errors->first('title')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="<?php echo e(old('url')); ?>">
                    <?php if($errors->has('url')): ?>
                        <span class="help-block"><?php echo e($errors->first('url')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description"><?php echo e(old('description')); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <span class="help-block"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/unibava/resources/views/mahasiswa_submit.blade.php ENDPATH**/ ?>