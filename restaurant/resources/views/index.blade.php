@extends('Layout')

    <!-- **************************************end nav**************************************************** -->

     <!-- **************************************start slider_show**************************************************** -->
     @section('content')
         
     
<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active smg" style="background-image: url({{asset('imgs/bg_1.jpg')}});
                                                         background-repeat: no-repeat;
                                                         background-size: cover;">
               <div class="overlay"></div>
               <div class="content-of-header">
               <div class="container">
                    <div class="row text-center justify-content-center align-items-center">
                        <div class="col">
                            <span>Feliciano</span>
                            <h1>Best Restaurant</h1>
                        </div>
                    </div>
               </div>
               </div>
            </div>
            <div class="carousel-item  smg" style="background-image: url(imgs/bg_2.jpg);
                                                         background-repeat: no-repeat;
                                                         background-size: cover;">
            <div class="overlay"></div>
            <div class="content-of-header">
               <div class="container">
                    <div class="row text-center justify-content-center align-items-center">
                        <div class="col">
                            <span>Feliciano</span>
                            <h1>Nutritious & Tasty</h1>
                        </div>
                    </div>
               </div>
               </div>
            </div>
            <div class="carousel-item  smg" style="background-image: url(imgs/bg_3.jpg);
                                                         background-repeat: no-repeat;
                                                         background-size: cover;">
            <div class="overlay"></div>
            <div class="content-of-header">
               <div class="container">
                    <div class="row text-center justify-content-center align-items-center">
                        <div class="col">
                            <span>Feliciano</span>
                            <h1>Delicious Specialties</h1>
                        </div>
                    </div>
               </div>
               </div>
            </div>
            <div class="carousel-item smg" style="background-image: url(imgs/bg_4.jpg);
                                                         background-repeat: no-repeat;
                                                         background-size: cover;">
            <div class="overlay"></div>
            <div class="content-of-header">
               <div class="container">
                    <div class="row text-center justify-content-center align-items-center">
                        <div class="col">
                            <span>Feliciano</span>
                            <h1>Best Restaurant</h1>
                        </div>
                    </div>
               </div>
               </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
 <!-- **************************************end slider_show**************************************************** -->

  <!-- **************************************start menu_offers**************************************************** -->
<section class="menu mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="feature">
        <div class="row">
            <div class="col-3">
                <div class="pic">
                    <img src="imgs/breakfast-1.jpg">
                </div>
                <div class="txt text-center">
                    <h3>Grilled Beef with potatoes</h3>
                    <p>
                        <span>Meat,</span>
                        <span>Potatoes,</span>
                        <span>Rice,</span>
                        <span>Tomatoe</span>
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="pic">
                    <img src="imgs/breakfast-2.jpg">
                </div>
                <div class="txt txt text-center">
                    <h3>Grilled Beef with potatoes</h3>
                    <p>
                        <span>Meat,</span>
                        <span>Potatoes,</span>
                        <span>Rice,</span>
                        <span>Tomatoe</span>
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="pic">
                    <img src="imgs/breakfast-3.jpg">
                </div>
                <div class="txt txt text-center">
                    <h3>Grilled Beef with potatoes</h3>
                    <p>
                        <span>Meat,</span>
                        <span>Potatoes,</span>
                        <span>Rice,</span>
                        <span>Tomatoe</span>
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div class="pic">
                    <img src="imgs/breakfast-4.jpg">
                </div>
                <div class="txt txt text-center">
                    <h3>Grilled Beef with potatoes</h3>
                    <p>
                        <span>Meat,</span>
                        <span>Potatoes,</span>
                        <span>Rice,</span>
                        <span>Tomatoe</span>
                    </p>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
    </div>
</section>
  <!-- **************************************end menu_offers**************************************************** -->

<!--****************************************** start about**************************************************** -->
<section class="about py-5">
    <div class="container">  
        <div class="row">
            <div class="col-7">
                <div class="d-flex">
                    <div class="f mx-2 ">
            <!-- <img src="img/chif.jpg" alt=""> -->
                    </div>
                     <div class="s mx-3">
            <!-- <img src="img/chif2.jpg" alt=""> -->
                     </div>
                </div>
            </div>
            <div class="col-5">
                <div class="parent">
                    <h1 class="papa">about</h1>
                    <h1 class="child">Feliciano<br>  Restaurant</h1>
                 </div>
                <div class="paragraph my-5">
                    <p>A small river named Duden flows by their place and<br> supplies it with the necessary regelialia. It is a<br> paradisematic country, in which roasted parts of<br> sentences fly into your mouth.</p>
                    <p>Mon - Fri<span class="fw-bold"> 8 AM - 11 PM</span></p>
                    <p>phone number: <span class="num">+ 1-978-123-4567</span> </p>
                </div>
            </div>
        </div>
    </div>
</section class="sec"> 
    <section class="container numb">
      <div class="row ">
        <div class="col-8">
            <div class="incre d-flex justify-content-between">
                <div class="num-content">
                    <span class="count">18</span>
                    <span class="tex">YEARS OF EXPERINCES</span>
                </div>     
                <div class="content">
                    <span class="count">100</span>
                    <span class="tex">MENUS/DISH</span>
                </div>
                <div class="content">
                    <span class="count">50</span>
                    <span class="tex">STAFFS</span>
                </div>
                <div class="content">
                    <span class="count">15000</span>
                    <span class="tex">HAPPY CUSTOMER</span>
                </div>
            </div>
        </div>
        <div class="col-4">  
            <div class="text-content">
                <p>A small river named Duden<br> flows by their place and<br> supplies it with the necessary<br> regelialia.</p>
            </div>      
        </div>        
      </div>
</section>

<!--****************************************** end about**************************************************** -->

<!--****************************************** start services**************************************************** -->
<section class="services my-5 py-5">
    <div class="container">
        <div class="row my-5 text-center heading_title">
            <span class="mt-5">Services</span>
            <h2 class="mt-5">Catering Services</h2>
        </div>
        <div class="row">
            <div class="col-4 d-block justify-content-center align-item-center">
                <div class="ic1 text-center mb-4"><i class="fas fa-birthday-cake"></i></div>
                <div class="ser_body text-center">
                    <h3>Business Meetings</h3>
                    <p>Even the all-powerful Pointing <br> has no control about the blind<br> texts it is an almost<br> unorthographic.</p>
                </div>
            </div>
            <div class="col-4 d-block justify-content-center align-item-center">
                <div class="ic1 text-center mb-4"><i class="far fa-handshake"></i></div>
                <div class="ser_body text-center">
                    <h3>Business Meetings</h3>
                    <p>Even the all-powerful Pointing <br> has no control about the blind<br> texts it is an almost<br> unorthographic.</p>
                </div>
            </div>
            <div class="col-4 d-block justify-content-center align-item-center">
                <div class="ic1 text-center mb-4"><i class="fas fa-ring"></i></div>
                <div class="ser_body text-center">
                    <h3>Wedding Party</h3>
                    <p>Even the all-powerful Pointing<br> has no control about the blind<br> texts it is an almost<br> unorthographic.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--****************************************** end services**************************************************** -->

<div class="pt-5">    
        <div class="row my-5 text-center heading_title">
            <span class="mt-5">Chef</span>
            <h2 class="mt-5">Our Master Chef</h2>
        </div>   
    <div class="swiper-container swiper-container-crd mt-5">
    <div class="swiper-wrapper">
<!--    ************fist card ******************    -->
      <div class="swiper-slide slidecrd mb-5 shadow rounded">
        <img src="imgs/chef-1.jpg" class="rounded-circle mb-4" alt="...">  
        <h5 class="mb-2 font-weight-bold">Abdo Elzayat</h5>
        <p class="text-muted mt-4">Restaurant Owner.</p>
        <ul class="nav justify-content-center flex-nowrap star">
                  <li class="nav-item ">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
            </ul>      
        </div>
      <!--    ************fist card ******************    -->
      <div class="swiper-slide slidecrd mb-5 shadow rounded">
        <img src="imgs/chef-2.jpg" class="rounded-circle mb-4" alt="...">  
        <h5 class="mb-2 font-weight-bold">Esraa Elrefaey</h5>
        <p class="text-muted mt-4">Head Chef.</p>
        <ul class="nav justify-content-center flex-nowrap star">
                  <li class="nav-item ">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
            </ul>   
        </div>
<!--    ************fist card ******************    -->
      <div class="swiper-slide slidecrd mb-5 shadow rounded">
        <img src="imgs/chef-3.jpg" class="rounded-circle mb-4" alt="...">  
        <h5 class="mb-2 font-weight-bold">Mostafa Gad</h5>
        <p class="text-muted mt-4">Chef</p>
        <ul class="nav justify-content-center flex-nowrap star">
                  <li class="nav-item ">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
            </ul>     
        </div>


<!--    ************fist card ******************    -->
      <div class="swiper-slide slidecrd mb-5 shadow rounded">
        <img src="imgs/chef-4.jpg" class="rounded-circle mb-4" alt="...">  
        <h5 class="mb-2 font-weight-bold">Ammar Ashraf</h5>
        <p class="text-muted mt-4">Chef.</p>
        <ul class="nav justify-content-center flex-nowrap star">
                  <li class="nav-item ">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link Testimonials-card-icons" href="#"><i class="fab fa-twitter"></i></a>
                  </li>
            </ul>     
        </div>

    </div>

    @endsection


