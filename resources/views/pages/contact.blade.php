@extends('layout.app')

@section('content')

    <!-- header start here  -->
    <header id="banner">
    {{-- include header nav from header components --}}
        @include('components.header')
    </header>
    <!-- header end here  -->

    <!-- contact page-->
    <!-- contact heading starts -->
    <div class="aboutpg contactpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="wow fadeInUp">Contact</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- contact heading ends  -->

    <div class="contact_us c-100">
        <div class="container">
            <div class="row contact_info">
                <h1 class="wow fadeInUp">Transform Your Vision into Engaging Webiste: Contact with me Today!</h1>
                <div class="col-md-6 ">
                   
                    <p class="wow fadeInUp">Ready to bring your ideas to life with captivating website? Contact me today and let our team of experts create stunning visuals that leave a lasting impact. Phone: <a href="tel:01941583987" class="tel_mail">01941583987</a> Email: <a href="mailto:sohaghasan1112@gmail.com" class="tel_mail">sohaghasan1112@gmail.com</a> I am here to answer any questions you may have or provide further information about our comprehensive website service. My dedicated team will work closely with you to understand your project requirements and deliver exceptional results. Don't miss the opportunity to captivate your audience with our professional animation services. Reach out to us now and unlock the full potential of your vision!</p>

                    <ul class="wow fadeInUp">
                        <li><span>Phone: </span><a class="tel_mail" href="tel:01941583987">01941583987</a></li>
                        <li><span>Email: </span><a class="tel_mail" href="mailto:sohaghasan1112@gmail.com">sohaghasan1112@gmail.com</a></li>
                    </ul>
                    <span class="wow fadeInUp">Contact us through this email or phone. Thank you.</span>
                </div>

                <div class="col-md-6">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Full Name" class="form-control mb-3">
                        <input type="email" placeholder="Email Address" class="form-control mb-3">
                        <textarea name="" placeholder="Message" class="form-control mb-3" id="" cols="30" rows="7"></textarea>
                        <input type="submit" value="Send" class="btn submit">
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection