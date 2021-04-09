<?php $__env->startSection('content'); ?>
    <div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body col-lg-6">
            <form method="POST" action="<?php echo e(route('update.producte',$productes->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Name</label>
                    <input value="<?php echo e($productes->name); ?>" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input value="<?php echo e($productes->price); ?>" type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>type</label>
                    <input value="<?php echo e($productes->type); ?>" type="text" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input value="<?php echo e($productes->image); ?>" type="file" name="image" class="form-control ">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select" name="category_id">
                        <option selected>Choose...</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/var/www/html/thuc_hanh/resources/views/producte/edit.blade.php ENDPATH**/ ?>