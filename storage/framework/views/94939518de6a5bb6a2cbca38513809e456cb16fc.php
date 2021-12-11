<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
       <?php echo csrf_field(); ?>

        <div class="row" align="center" >
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Product</h1>
                </div>


                <div class="row pt-4">
                    <button class="btn btn-primary"; style="padding: 10px">
                        Submit
                    </button>
                </div>

                <div class="form-group row">
                    <label for="itemname" class="col-md-4 col-form-label">Name</label>

                    <input id="itemname"
                           type="text"
                           class="form-control<?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>"
                           name="itemname"
                           value="<?php echo e(old('itemname')); ?>"
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
           value="<?php echo e(old('quantity')); ?>">

</div>
                <div>
                    <label> Price (Euros) </label>
                    <input id="price"
                           type="float" size="5px"
                           class="form-control"
                           name="price"
                           value="<?php echo e(old('price')); ?>">

                </div>
                <div class="form-group row">
                    <label style="padding: 1em" for="description" class="col-md-4 col-form-label">Description</label>

                    <textarea id="description"
                              type="textarea"
                              style="width: 300px; height: 80px ; resize: none; text-align-all: start;"
                              name="description"
                              value="<?php echo e(old('description')); ?>"></textarea>
                </div>

            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Howl\example-app\resources\views/CreateProduct.blade.php ENDPATH**/ ?>