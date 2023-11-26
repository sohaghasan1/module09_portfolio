@extends('layout.app')

@section('content')
    <!-- header start here  -->
    <header id="banner">
    {{-- include header nav from header components --}}
    @include('components.header')
    </header>
    <!-- header end here  -->

    <!-- about page-->
    <!-- about heading starts -->
    <div class="aboutpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 wow fadeInUp">
                    <h2>About</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- about heading ends  -->

    <!-- values starst -->
    <div class="values">
        <div class="container">
            <div class="row align-items-center values_box ">
                <div class="col-md-12 col-lg-6">
                   
                    <img src=" {{asset('images')}}/core_values.png" class="img-fluid w-100 desktop" alt="">
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="values_text abpg_texts">
                        <h3 class="wow fadeInUp">About <span>Me</span></h3>
                        <p class="wow fadeInUp"> I am web developer who build professional website for every stage of
                        your sales process and corporate communications. I am creative and
                        I love to do what client want. Over the years I’ve been building website that tell inspiring
                        stories about brands, businesses, and many other things. Give us a call or send a quick note —
                        I’d love to hear from you.I strive to help businesses
                        of all sizes communicate effectively with their target audiences through engaging and impactful
                        website. My mission is to provide high-quality video content that caters to every stage
                        of the sales process and corporate communications, all while leveraging the expertise of our
                        compact and dynamic team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="coreval">
        <div class="container-fluid ps-0">

            <div class="core_value_section">
                <div class="container">
                    <div class="row align-items-center values_box c-60 pb-5">
                      
                        <div class="col-md-12 col-lg-6 order-md-1 order-2">
                            <div class="cval_text abpg_texts">
                                <h3 class="wow fadeInUp">My <span>Skills</span></h3>
                                <div class="skills-bar mt-4">

                                <div class="bar">
                                    <div class="info">
                                        <span>HTML and CSS</span>
                                    </div>
                                    <div class="progress-line html">
                                        <span></span>
                                    </div>
                                </div>

                                <div class="bar">
                                    <div class="info">
                                        <span>JAVASCRIPT</span>
                                    </div>
                                    <div class="progress-line javascript">
                                        <span></span>
                                    </div>
                                </div>


                                <div class="bar">
                                    <div class="info">
                                        <span>PHP</span>
                                    </div>
                                    <div class="progress-line php">
                                        <span></span>
                                    </div>
                                </div>


                                <div class="bar">
                                    <div class="info">
                                        <span>WORDPRESS</span>
                                    </div>
                                    <div class="progress-line python">
                                        <span></span>
                                    </div>
                                </div>


                                <div class="bar">
                                    <div class="info">
                                    <span>MYSQL</span>
                                    </div>
                                    <div class="progress-line mysql">
                                        <span></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                      
                    </div>
                    <div class="col-md-12 col-lg-6 order-md-2 order-1">
                            <img src=" {{asset('images')}}/Rectangle_2156-removebg-preview.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
         
          

            <div class="cval_passion_section">
                <div class="container">
                    <div class="row align-items-center values_box">
                        <div class="col-md-12 col-lg-6 order-md-1 order-1">
                            <div class="values_image">
                                <img src=" {{asset('images')}}/purpous.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 order-md-2 order-2">
                            <div class="cval_text abpg_texts cval_passion">
                                <h3 class="wow fadeInUp">Our Passion — <span>Our Purpose</span></h3>
                                <p class="wow fadeInUp"> <b>We’re All About Results</b> <br>
                                    We get out of bed each morning looking forward to meet new people and help solve new
                                    problems.
                                    Our motivation is results — a motivation to create content solutions that deliver real
                                    results,
                                    and generate good return on investment.You <br>
                                    <b>Have A Story to Tell</b> <br>
                                    We believe everyone has a story to tell. Whether it’s a funny or not so exciting story,
                                    we’ll
                                    help find that shining star that reveals your unique story and tell it with video. If we’re
                                    not
                                    the best fit, we make sure to point you in the right direction. <br>
                                    <b> We Love What We Do</b> <br>
                                    The joy of finally seeing a story come to life. A Story that reveals authenticity, depth and
                                    value in what you do. We tell the stories we love and love them
                                </p>
                            </div>
                        </div>
                    </div>
                   </div>
            </div>
       

            <div class="leadership_section">
                <div class="container">
                    <div class="row align-items-center values_box c-60">
                        <div class="col-md-12 col-lg-6 order-md-1 order-2">
                            <div class="cval_text abpg_texts">
                                <h3 class="wow fadeInUp">Experience <span>Leadership</span></h3>
                                <p class="wow fadeInUp">
                                    We’re an animated video content creation company that makes video content for every stage of
                                    your sales process and corporate communications. We’re a compact team of creative creatives
                                    and we love what we do. <br>
                                    Over the years we’ve been crafting captivating videos that tell inspiring stories about
                                    brands, businesses, and many other things. Give us a call or send a quick note — we’d love
                                    to hear from you.
                                    At our video content creation company, we strive to help businesses of all sizes communicate
                                    effectively with their target audiences through engaging and impactful video content. Our
                                    mission is to provide high-quality video content that caters to every stage of the sales
                                    process and corporate communications, all while leveraging the expertise of our compact and
                                    dynamic team.</p>
                            </div>
                        </div>
        
                        <div class="col-md-12 col-lg-6 order-md-2 order-1">
                            <div class="values_image">
                                <img src=" {{asset('images')}}/Rectangle_2132-removebg-preview.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 tnx">
                    <h3 class="wow fadeInUp">Thank You..!!</h3>
                </div>
            </div>
        </div>
    </div>

   
    <!-- footer end here  -->
  
@endsection
