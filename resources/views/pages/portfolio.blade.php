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
    <div class="aboutpg portfoliopg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="wow fadeInUp">My WORK</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- about heading ends  -->

    <!-- video starts -->
    <div class="mission work c-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 abpg_texts mt-5">
                    <h3 class="mb-2 wow fadeInUp">PSD <span>TO</span> HTML</h3>
                    <div class="work_video">
                        <div class="port_after">
                            
                        </div>
                    </div>
                    <div class="toggle wow fadeInUp">
                        <p>

                            <button class="btn btn-primary btn_drop " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 abpg_texts mt-5">
                    <h3 class="mb-2 wow fadeInUp">PSD <span>TO</span> HTML</h3>
                    <div class="work_video">
                        <div class="port_after second">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop  " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body wow fadeInUp">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>

                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after third">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>

                            <button class="btn btn-primary btn_drop wow fadeInUp " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <div class="card card-body">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>

                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after fourth">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample4">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>

                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after fifth">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#fifth" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="fifth">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>


                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after six">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#six" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="six">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>


                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after seven">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#seven" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="seven">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>


                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after eight">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#eight" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="eight">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>


                <div class="col-md-4 abpg_texts mt-5 wow fadeInUp">
                    <h3 class="mb-2">PSD <span>TO </span>HTML</h3>
                    <div class="work_video">
                        <div class="port_after nine">
                            
                        </div>
                    </div>
                    <div class="toggle">
                        <p>
                            <button class="btn btn-primary btn_drop wow fadeInUp" type="button" data-bs-toggle="collapse"
                                data-bs-target="#nine" aria-expanded="false" aria-controls="collapseExample">
                                Description <i class="fa-solid fa-chevron-right rotate"></i>
                            </button>
                        </p>
                        <div class="collapse" id="nine">
                            <div class="card card-body ">
                                <p>
                                    Our team at the video content company has a wealth of experience in the field of
                                    video production and content creation. With years of experience working with
                                    businesses of all sizes and across a variety of industries, we have developed a deep
                                    understanding of what it takes to create impactful and effective video content.
                                    <br> <br>
                                    We stay up to date with the latest trends and technologies in video production,
                                    enabling us to provide our clients with innovative solutions that stand out in
                                    today's
                                    crowded marketplace. Our experience and expertise, combined with our commitment to
                                    quality and customer focus, make us the ideal partner for businesses looking to
                                    enhance their communication and marketing efforts through video content.
                                </p>
                                <div class="more">
                                    <a href="#" class="btn btn-contactus">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="more">
                        <a href="#" class="btn btn_drop btn_more">More</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
@endsection
   