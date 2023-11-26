@extends('layout.app')

@section('content')

    <!-- header start here  -->
    <header class="header header_overlay" id="banner">
        <div class="container z_index ">
        {{-- include navbar from nav components --}}
        @include('components.header')
            <div class="row banner-row">
                <div class="col-lg-12">
                    <h1 class="wow fadeInUp">Hey' <br> This is <span>Shohag</span></h1>
                </div>
            </div>
        </div>
        <div class="vimeo-wrapper">
            <iframe src="https://player.vimeo.com/video/830311609?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </header>
    <!-- header end here  -->

    <section class="animated_video">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="animated_content ">
                        <h1 class="wow fadeInUp">Build Professional website that Drives Results.</h1>
                        <div class="wow fadeInUp">
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/858151239?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Shohag"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                        </div>
                        <p class="wow fadeInUp">Whether you want to increase sales, build brand awareness or educate your audience – I build website that help you do it.</p>
                        <a href="contact.html" class="btn btn-contactus wow fadeInUp">Contact Us</a>
                        <a href="portfolio.html" class="btn btn-portfolio wow fadeInUp">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="production_service">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animated_content animated_content_left">
                    <h1 class="wow fadeInUp">Static Website Design Services.</h1>
                    <p class="wow fadeInUp">As a  web developer, my goal is to build website that empower sales teams, marketing departments, and business owners. I always delivers on its promise.</p>
                    <a href="contact.html" class="btn btn-contactus wow fadeInUp">Contact Us</a>
                    <a href="portfolio.html" class="btn btn-portfolio wow fadeInUp">Portfolio</a>
                </div>
                <div class="col-md-6  animated_content_right">
                    <div class="production_img">
                        <img src=" {{asset('images')}}/service.png" class="img-fluid w-100" alt="">
                        <div class="circleimg">
                            <img src=" {{asset('images')}}/circle_shape.png" class="img-fluid" alt="">
                        </div>
                        <div class="squire-img">
                            <img src=" {{asset('images')}}/squire.png" class="img-fluid" alt="">
                        </div>
                        <div>

                            <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/828455053?h=0c365b84a8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="file"></iframe></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="production_service">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-6 ">
                    <div class="laptop">
                        <img src=" {{asset('images')}}/11.png" class="img-fluid" alt="">
                        <div class="owl-carousel service_carousel">
                            <div class="port_after">
                                <!-- <img src=" {{asset('images')}}/download (26).jpg" class="img-fluid" alt=""> -->
                            </div>
                            <div class="port_after second">
                                <!-- <img src=" {{asset('images')}}/download (26).jpg" class="img-fluid" alt=""> -->
                            </div>
                            <div class="port_after third">
                                <!-- <img src=" {{asset('images')}}/download (26).jpg" class="img-fluid" alt=""> -->
                            </div>
                            <div class="port_after fourth">
                                <!-- <img src=" {{asset('images')}}/download (26).jpg" class="img-fluid" alt=""> -->
                            </div>
                            <!-- <div>
                                <img src=" {{asset('images')}}/lp.png" class="img-fluid" alt="">
                            </div>
                            <div>
                                <img src=" {{asset('images')}}/lpslider.png" class="img-fluid" alt="">
                            </div> -->
                        </div>
                    </div>
                  
                </div>
                <div class="col-md-6 animated_content ">
                    <h1 class="wow fadeInUp">Full Dynamic Website Services.</h1>
                    <p class="wow fadeInUp">As a  web developer, my goal is to build website that empower sales teams, marketing departments, and business owners. I always delivers on its promise.</p>
                    <a href="contact.html" class="btn btn-contactus wow fadeInUp">Contact Us</a>
                    <a href="portfolio.html" class="btn btn-portfolio wow fadeInUp">Portfolio</a>
                </div>
            </div>
        </div>
    </section>

    <section class="relationship">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <h1>I Build Relationship.</h1>
                    <p>With my Fornt End Design, WordPress Website, Backend Developemt Service . You can  trust us  to make your content better and get fast delivery.</p>
                </div>
            </div>

            <div class="row service_row gy-5">
                <div class="col-md-4 col-sm-6 content  wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/script.svg" class="img-fluid" alt="">
                    </div>
                    <h2>High Converting Script</h2>
                    <p>Experience the seamless fusion of creativity and excellence that transforms your vision into awe-inspiring reality.</p>
                </div>
                <div class="col-md-4 col-sm-6 content wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/voice-over.png" class="img-fluid" alt="">
                    </div>
                    <h2>Deliver As Described</h2>
                    <p>I always try to give the delivery as my client described about his/her project. </p>
                </div>
                <div class="col-md-4 col-sm-6 content wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/animation.png" class="img-fluid" alt="">
                    </div>
                    <h2>Interactive Animation</h2>
                    <p>Animation makes a website more cool and lookrative. I used smooth animation in website as it's demands.</p>
                </div>
                <!-- <div class="col-md-4 col-sm-6 content wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/music.png" class="img-fluid" alt="">
                    </div>
                    <h2>Music & SFX</h2>
                    <p>Elevate your project with captivating music and immersive sound.</p>
                </div> -->
                <div class="col-md-4 col-sm-6 content wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/unlimited.png" class="img-fluid" alt="">
                    </div>
                    <h2>Unlimited Revisions</h2>
                    <p>Your project will get a wonderful opportunity for 2x revision.</p>
                </div>
                <div class="col-md-4 col-sm-6 content wow fadeInUp">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/faster-delivery.png" class="img-fluid" alt="">
                    </div>
                    <h2>Faster Delivery</h2>
                    <p>Fast-track your project's success with accelerated delivery and exceptional quality.</p>
                </div>
                <div class="col-md-4 col-sm-6 content">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/graphics.png" class="img-fluid" alt="">
                    </div>
                    <h2>Custom Graphics</h2>
                    <p>Unlock a world of creativity with custom graphics that mesmerize and captivate your audience.</p>
                </div>
                <div class="col-md-4 col-sm-6 content ">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/team.png" class="img-fluid" alt="">
                    </div>
                    <h2>Experience Team</h2>
                    <p>The first business platform to bring together all of your products from one place.</p>
                </div>
                <div class="col-md-4 col-sm-6 content">
                    <div class="icon_box">
                        <img src=" {{asset('images')}}/3d animation.png" class="img-fluid" alt="">
                    </div>
                    <h2>After Support</h2>
                    <p>If you need any support to manage your website then I will be there to assist you.</p>
                </div>
                
            </div>
            <div class="wow fadeInUp">
                <a href="" id="loadMore"><i class="fa-solid fa-circle-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <!-- monkey section end here -->
    <!-- img-float section start here -->
    <section class="superman">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="superman-1">
                        <img src=" {{asset('images')}}/superman-1.png" class="img-fluid w-100" alt="">
                    </div>
                    <!-- <div class="superman-2">
                        <img src=" {{asset('images')}}/superman-2.png" class="img-fluid w-100" alt="">
                    </div> -->
                    <div class="box-1">
                        <img src=" {{asset('images')}}/shape-1.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="box-2">
                        <img src=" {{asset('images')}}/shape-2.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="box-3">
                        <img src=" {{asset('images')}}/shape3.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="box-5">
                        <img src=" {{asset('images')}}/rectangle-circle.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="box-4">
                        <img src=" {{asset('images')}}/superman-2.png" class="img-fluid w-100" alt="">
                    </div>
                    <!-- <div class="circle">
                        <img src=" {{asset('images')}}/rectangle-circle.png" class="img-fluid w-100" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- img-float section end here -->
    <!-- bottom part start here -->

  
@endsection