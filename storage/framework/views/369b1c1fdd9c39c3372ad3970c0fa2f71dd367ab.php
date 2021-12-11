<?php $__env->startSection('content'); ?>

    <div class="container" style="width: 80em"  >
        <div class="container" style="width: 100em"  >

            <form action=<?php echo e($Product -> id); ?> method="post" name="update" value="update" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
         <?php echo method_field('PATCH'); ?>
                <!------ update product ------>
                <div style="width:300px; height: 400px; float:right;" align="center" >
                    <div class="col-8 offset-2">
                        <div class="row">
                            <h1>Update Product</h1>
                        </div>
                        <div class="row pt-4 " style="padding: 10px" >
                            <button class="btn btn-primary"; style="padding: 10px">
                                Update
                            </button>



                        </div>

                        <div class="form-group row">
                            <label for="itemname" class="col-md-4 col-form-label">Name</label>

                            <input id="itemname"
                                   type="text"
                                   class="form-control<?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>"
                                   name="itemname"
                                   value="<?php echo e($Product -> itemname); ?>"
                                   autocomplete="itemname" autofocus>
                        </div>

                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Post Image</label>

                            <input type="file" class="form-control-file" id="image" name="image">

                            <?php if($errors->has('image')): ?>
                                <strong><?php echo e($errors->first('image')); ?></strong>
                            <?php endif; ?>
                        </div>

                        <label for="category">Item Category:</label>

                        <select name="category" id="category">
                            <option value="Shirt">Shirt</option>
                            <option value="Sweater">Sweater</option>
                            <option value="Pants">Pants</option>
                            <option value="Hat">Hat</option>
                        </select>
                        <div>
                            <label> Items Available </label>
                            <input id="quantity"
                                   type="number" size="5px"
                                   class="form-control"
                                   name="quantity"
                                   value="<?php echo e($Product -> quantity); ?>">

                        </div>
                        <div>
                            <label> Price (Euros) </label>
                            <input id="price"
                                   type="float" size="5px"
                                   class="form-control"
                                   name="price"
                                   value="<?php echo e($Product -> price); ?>">

                        </div>
                        <div class="form-group row">
                            <label style="padding: 1em" for="description" class="col-md-4 col-form-label">Description</label>

                            <textarea id="description"
                                      type="textarea"
                                      style="width: 300px; height: 80px ; resize: none;"
                                      name="description"
                                      value="<?php echo e($Product-> description); ?>"></textarea>
                        </div>
                    </div>

                </div>

            </form>


        </div>
        <img src="<?php echo e($Product-> image); ?>" style="height: 35em; width: 40%" >
        <div class="container" style="width:300px; float:left;">
            <div>

                <form action="<?php echo e($Product->id); ?>" name="delete" value = "delete" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button>Delete Product</button>
                </form>
            </div>

            <div style="text-align: center">
                <div>
                    <h1><?php echo e($Product->itemname); ?> </h1>
                </div>
                <div style="padding: 20px">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <p><?php echo e($Product->price); ?>&euro; </p>
                    <p><?php echo e($Product->category); ?> </p>
                        <div>
                            <label  for="quantity">Available</label>
                            <input type="label" size="3px" id="quantity" style="text-align: center" disabled value="<?php echo e($Product->quantity); ?>"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label style="padding: 1em" for="description" class="col-md-4 col-form-label"></label>

                    <input id="description"
                              type="textarea"
                              style="width: 300px; height: 80px ; resize: none;"
                              name="description"
                              disabled value="<?php echo e($Product->description); ?>">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Howl\example-app\resources\views/productShow.blade.php ENDPATH**/ ?>