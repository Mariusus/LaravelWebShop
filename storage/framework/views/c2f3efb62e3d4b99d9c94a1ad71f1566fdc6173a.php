<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<html>


<head>

    <title>Shrek Store</title>
    <meta charset="utf-8" />
    <meta name="viewpoint" content="width=device-width,initial-scal=1.0">
    <meta http-equip="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/products.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="jquery.store.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
                                                       <!-- Navigation Bar -->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('main')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a>

                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="CreateProduct">Create Product</a>
                </li>
                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="<?php echo e(route('products')); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="">Cart</a>
                </li>

                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="#contact">Contact</a>
                </li>


            </ul>
        </div>
    </nav>


                                                      <!-- Navigation Bar -->

    <div class="row">

    <?php $__currentLoopData = \App\Models\Product::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="row" style="width: 20em; text-align: center"   >

    <div>
        <div style="width: 33%; padding: 20px; size: 233px; color: darkkhaki; border-style: inset; width: 233px">
         <b style="color: darkorange"><?php echo e($Product->itemname); ?> </b>
            <a href="<?php echo e($Product -> id); ?>">
                <img src="<?php echo e($Product->image); ?>" width="200" height="100">
            </a>
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
                    <p><input type="submit" value="Buy Now" class="px-4 py-2 text-red bg-blue-800 rounded" /></p>
            <form method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('POST')); ?>

                     <input type="hidden" value="<?php echo e($Product->id); ?>" name="id">
                     <input type="hidden" value="<?php echo e($Product->itemname); ?>" name="itemname">
                     <input type="hidden" value="<?php echo e($Product->price); ?>" name="price">
                     <input type="hidden" value="<?php echo e($Product->image); ?>"  name="image">
                     <input type="hidden" value="<?php echo e($Product->description); ?>"  name="description">
                     <input type="hidden" value="<?php echo e($Product->quantity); ?>"  name="quantity">
                     <input type="hidden" value="1" name=<?php echo e($Product->quantity); ?>>
                     <button class="px-4 py-2">Add To Cart</button>
                 </form>
        </div>

    </div>
</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    </section>
                                                       <!------COntact------------>
        <section id="contact">

            <div class="container">
                <h1>Get In Touch</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form class="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name..">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Phone no.">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email..">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Message.."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-info">
                        <div class="follow"><b><i class="fa fa-map-marker"></i>  </b>UCN,Aalborg,Denmark</div>
                        <div class="follow"><b><i class="fa fa-mobile"></i>  </b>(407) 560-2547 </div>
                        <div class="follow"><b><i class="fa fa-envelope"></i>  </b>guest.services@disneyparks.com</div>

                    </div>

                </div>

            </div>

        </section>
    </section>
</section>



</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Howl\example-app\resources\views/products.blade.php ENDPATH**/ ?>