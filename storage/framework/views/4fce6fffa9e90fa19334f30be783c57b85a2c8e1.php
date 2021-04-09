<?php $__env->startSection('content'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a href="<?php echo e(route('create.producte')); ?>">Add Producte</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                      class="form-control form-control-sm"
                                                                                                      placeholder=""
                                                                                                      aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                   role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                                <tr>
                                    <th rowspan="1" colspan="1">Name_Category</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">price</th>
                                    <th rowspan="1" colspan="1">image</th>
                                    <th rowspan="1" colspan="1">type</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>

                                <tbody>
                                <?php $__currentLoopData = $productes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><?php echo e($producte->category->name); ?></td>
                                    <td><?php echo e($producte->name); ?></td>
                                    <td><?php echo e($producte->price); ?></td>
                                    <td><img style="width: 100px" class="media-object" src="<?php echo e(asset('storage/'.$producte->image)); ?>"></td>
                                    <td><?php echo e($producte->type); ?></td>
                                    <td> <a href="<?php echo e(route('edit.producte',['id'=>$producte->id])); ?>" class="btn btn-dark "><i
                                                class="fa fa-pencil"></i>Edit</a>
                                      <a href="<?php echo e(route('delete',$producte->id)); ?>}"class="btn btn-danger btn-icon-anim "><i
                                                class="icon-trash"></i>Delete</a></td>
                                </tr>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/var/www/html/thuc_hanh/resources/views/producte/list.blade.php ENDPATH**/ ?>