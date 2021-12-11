<!DOCTYPE html>
<html>
<head>
    <title>Online Store</title>
    <meta charset="utf-8" />
    <meta name="viewpoint" content="width=device-width,initial-scal=1.0">
    <meta http-equip="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.store.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="topnav">
            <a style="color:black;" class="active" href="#home">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="#featured-categories">Products</a>
                </li>
                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="#masthread">Cart</a>
                </li>

                <li class="nav-item">
                    <a style="color:black;" class="nav-link" href="#contact">Contact</a>
                </li>


            </ul>
        </div>
    </nav>


    <div class="slider">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="images/image1.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="images/image2.jpeg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
                </div>
                <div class="carousel-item">
                    <img src="images/image4.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <section class="featured-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/bed5.jpg">
                </div>
                <div class="col-md-3">
                    <img src="images/sofa5.jpg">
                </div>
                <div class="col-md-3">
                    <img src="images/table5.jpg">
                </div>
                <div class="col-md-3">
                    <img src="images/mirror5.jpg">
                </div>


            </div>

        </div>
    </section>


    <section class="products">
        <div id="site">
            <div class="container">
                <div class="title-box">
                    <h2>Products</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/mirror1.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Buy Now">
                                    <i class="fa fa-eye"></i>
                                </button>

                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Mirror-1</h3>
                            <div class="product-description" data-name="Mirror" data-price="10">

                                <p class="product-price">&euro; 10</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/sofa1.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>



                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Couch</h3>
                            <div class="product-description" data-name="Couch" data-price="15">

                                <p class="product-price">&euro; 15</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/table1.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <h3>Table</h3>
                            <div class="product-description" data-name="Table" data-price="14">

                                <p class="product-price">&euro; 14</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/bed1.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <h3>Bed</h3>
                            <div class="product-description" data-name="Bed" data-price="30">

                                <p class="product-price">&euro; 30</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/mirror2.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Mirror-1</h3>
                            <div class="product-description" data-name="Mirror-1" data-price="31">

                                <p class="product-price">&euro; 31</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/sofa2.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>



                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star-half-o"></i>
                            <h3>Couch</h3>
                            <div class="product-description" data-name="Couch" data-price="30">

                                <p class="product-price">&euro; 30</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/table2.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <h3>Table</h3>
                            <div class="product-description" data-name="Table" data-price="16">

                                <p class="product-price">&euro; 16</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/bed2.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>



                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Bed</h3>
                            <div class="product-description" data-name="Bed" data-price="40">

                                <p class="product-price">&euro; 40</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>


    <section class="on-sale">
        <div id="site">
            <div class="container">
                <div class="title-box">
                    <h2>On Sale</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/mirror3.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Mirror-1</h3>
                            <div class="product-description" data-name="Mirror-1" data-price="12">

                                <p class="product-price">&euro; 12</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/sofa3.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Couch</h3>

                            <div class="product-description" data-name="Couch" data-price="34">

                                <p class="product-price">&euro; 34</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/table3.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Table</h3>
                            <div class="product-description" data-name="Table" data-price="20">

                                <p class="product-price">&euro; 20</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/bed3.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>

                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Bed</h3>
                            <div class="product-description" data-name="Bed" data-price="60">

                                <p class="product-price">&euro; 60</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/mirror4.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Mirror-1</h3>
                            <div class="product-description" data-name="Mirror" data-price="17">

                                <p class="product-price">&euro; 17</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/sofa4.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Couch</h3>
                            <div class="product-description" data-name="Couch" data-price="28">

                                <p class="product-price">&euro; 28</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/table4.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>


                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>


                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <h3>Table</h3>
                            <div class="product-description" data-name="Table" data-price="21">

                                <p class="product-price">&euro; 21</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="product-top">
                            <img src="images/bed4.jpg">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                    <i class="fa fa-eye"></i>
                                </button>



                                <button type="button" class="btn btn-secondary" title="Add to Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-bottom text-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <div class="product-description" data-name="Bed" data-price="25">
    <!-- REIKIA          //    <h1> {{}}</h1>  -->
        <p class="product-price ">&euro; 25</p>
                                <form class="add-to-cart" action="cart.html" method="post">
                                    <div>
                                        <label for="qty-2">Quantity</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="submit" value="Add to cart" class="btn" /></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
                        <div class="follow"><b><i class="fa fa-map-marker"></i>  </b>Streep Road,Copenhagen,Denmark</div>
                        <div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+91)7862097585</div>
                        <div class="follow"><b><i class="fa fa-envelope"></i>  </b>sportscompass@gmail.com</div>

                    </div>

                </div>

            </div>

        </section>
    </section>
</section>
</body>
</html>
<?php /**PATH C:\Users\Howl\example-app\resources\views/productsController.blade.php ENDPATH**/ ?>
