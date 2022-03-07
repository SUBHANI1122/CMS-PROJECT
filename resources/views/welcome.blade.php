@include('website.top_header')
@include('website.header')
<!-- Start Header -->
<div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules" style="background-image: url({{asset('website_assets/custom/images/index-background.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                    @foreach($items as $item)
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <h1 class="fables-main-text-color font-weight-bold mb-1">{{$item->title}}
{{--                            <span class="fables-second-text-color">KIND OF BUSINESSES</span>--}}
                        </h1>
                        <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            {!! $item->description !!}
                        </p>
                        <a href="#" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Our Services</a>
                        <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 px-3 px-md-4 py-2 fables-second-hover-background-color">Learn More</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /End Header -->

<!-- Start page content -->
<div class="container">
    <div class="row my-3 my-md-5 overflow-hidden">
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown pt-4" data-wow-delay=".4s" data-wow-duration="1.5s">
            <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">INTERNET OF THINGS</h2>
            <!-- <p class="fables-forth-text-color font-15">
                AXITEQ offers an industrial IOT solution combining smart sensors, custom build control modules and AI based analytics to increase asset availability and optimize maintenance planning. </br>
                We provide end-to-end solution using IOT sensors and advance artificial intelligence to improve overall results including network availability, extend asset lifetime and reduce costs.
            </p> -->
        </div>
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
            <span class="fables-iconbussiness2 fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">AUTOMATION</h2>
            <!-- <p class="fables-forth-text-color font-15">
                AXITEQ is a leading industrial automation solutions provider and system integrator. Offering turnkey PLC, RTU, SCADA based control solutions for different industries. We deliver advanced technological solutions to a wide range of consumers in the grounds of engineering and industrial progressions with the help of our team of competent experts in electrical, energy, instrumentation, robotics, and automation.
            </p> -->
        </div>
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
            <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">CUSTOM BUILD SOLUTIONS</h2>
            <!-- <p class="fables-forth-text-color font-15">
                AXITEQ offers an industrial IOT solution combining smart sensors, custom build control modules and AI based analytics to increase asset availability and optimize maintenance planning. </br>
                We provide end-to-end solution using IOT sensors and advance artificial intelligence to improve overall results including network availability, extend asset lifetime and reduce costs.
            </p> -->
        </div>
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
            <span class="fables-iconbussiness3 fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">MOBILE & WEB DEVELOPER</h2>
            <!-- <p class="fables-forth-text-color font-15">
                Technology is the best solution for every business. We help businesses to grow by keeping record and 24×7 monitoring using high end technology. Experienced engineers developing software and native applications, to engaging them with their customers on their most personal devices — from phones and tablets to wearables and TVs. We are ensuring cost effective and most efficent applications to our clients / end users.
            </p> -->
        </div>
    </div>
    <!-- Start Next Row for Services -->
    <div class="row my-3 my-md-5 overflow-hidden">
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
            <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">SWITCHGEAR FABRICATOR</h2>
            <!-- <p class="fables-forth-text-color font-15">
                We have wide expertise & experience in the fabrication of all type of switchgear products. Providing our services in the switchgear sector including low (LT) and high voltage (HT) switchgear boxes and distribution boards (DB), cable tray, metal enclosures for switchgear systems, control mechanisms and more. We have the capacity to provide high quality and cost competitive products.
            </p> -->
        </div>

        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
            <span class="fables-iconscreen fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">DIGITAL SIGNAGE</h2>
            <!-- <p class="fables-forth-text-color font-15">
                For the Digital Signage market we are providing the solutions for High Quality Commercial & professional grade Video Wall, SMD LED solutions for Indoor, Outdoor & Semi – Outdoor. We are also offering wide variety of customized solutions for digital signage like Digital Poster in different types like LCD, SMD, Interactive and including Multi - touch technology let people use hand & finger gestures to interact with.
            </p> -->
        </div>

        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
            <span class="fables-iconfile fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">MEP SOLUTIONS & SERVICES</h2>
            <!-- <p class="fables-forth-text-color font-15">
                Mechanical, Electrical, Plumbing, and Fire system designs are the lifelines of any building, and it is important they are developed with utmost accuracy and perfection. Our MEP design validation services provide sustainable solutions for projects across industries such as Hospitals, Commercials Buildings, Industrial and others. We are also providing the networking solutions for commercial, private, educational & hospital buildings.
            </p> -->
        </div>

        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
            <span class="fables-iconhead-set-light fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">HEALTH CARE SERVICES</h2>
            <!-- <p class="fables-forth-text-color font-15">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
            </p> -->
        </div>
    </div>
    <!-- /End Next Row for Services -->

    <div class="row my-3 my-md-5 overflow-hidden">
        <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 mt-4 mx-auto px-5 py-2 fables-second-hover-background-color">Learn More</a>
    </div>
</div>
<!-- /End Services Section -->


<!-- Start Health Solutions Section -->
<div class="container-fluid overflow-hidden">
    <div class="row mt-0 mt-lg-5">
        <div class="col-12 col-md-6 p-0">
            <div style="background-image: url(assets/custom/images/overlay1.jpg);">
                <div class="fables-second-color-transparent p-6">
                    <h2 class="white-color font-weight-bold mb-4 font-35 wow fadeInLeft">Discover Our <br> Health Care Services</h2>
                    <p class="fables-third-text-color wow fadeInLeft">
                        We design and develop advanced medical imaging software solutions since 2008. And we do it from the ground up: all our software products have been entirely developed in-house, they are not simply an integration of existing components. We like to do things our own way, and to have total control on our products.
                    </p>
                    <a href="#" class="btn border border-white white-color rounded-0 my-4 py-2 px-5  wow fadeInLeft bg-white-hover fables-second-hover-color">Learn More</a>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-6 px-6 fables-light-background-color">
            <div class="row">
                <div class="col-12 col-sm-6 my-4 text-center text-md-left wow fadeInRight">
                    <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
                    <h2 class="fables-main-text-color font-18 my-2">PACS SERVER & VIEWER</h2>
                    <p class="fables-forth-text-color font-weight-light">
                        Archive & Viewing of medical images, offering full DICOM compliance with high performance and configurability
                    </p>
                </div>
                <div class="col-12 col-sm-6 my-4 text-center text-md-left wow fadeInRight">
                    <span class="fables-iconbussiness2 fables-second-text-color fa-3x"></span>
                    <h2 class="fables-main-text-color font-18 my-2">PACS PRINT & BURNER</h2>
                    <p class="fables-forth-text-color font-weight-light">
                        Providing automatic patient discs production with a complete viewing solution for all of medical images
                    </p>
                </div>
                <div class="col-12 col-sm-6 my-4 text-center text-md-left wow fadeInRight">
                    <span class="fables-iconbussiness3 fables-second-text-color fa-3x"></span>
                    <h2 class="fables-main-text-color font-18 my-2">PACS CLOUD</h2>
                    <p class="fables-forth-text-color font-weight-light">
                        WEB/CLOUD can seamlessly integrate with DICOM-compliant server, providing immediate response
                    </p>
                </div>
                <div class="col-12 col-sm-6 my-4 text-center text-md-left wow fadeInRight">
                    <span class="fables-iconbussiness4 fables-second-text-color fa-3x"></span>
                    <h2 class="fables-main-text-color font-18 my-2">PACS MWL</h2>
                    <p class="fables-forth-text-color font-weight-light">
                        Automating the transfer of patient’s data from HIS/RIS to modalities, for future record
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Health Solutions Section -->

<!-- Start Who we are -->
<div class="container-fluid">
    <div class="row mt-3 mt-md-5">
        <div class="col-12 col-lg-5 offset-lg-1 mb-4 mb-lg-0 overflow-hidden">
            <h2 class="fables-second-text-color font-35 bold-font wow fadeInLeft"> WHO <span class="fables-main-text-color">ARE WE?</span></h2>
            <p class="fables-forth-text-color my-3 wow fadeInLeft">
                We are a company consisting of highly skilled and innovative individuals keen on bringing IOT and automation to those businesses that are willing to take the possibilities of making new clients on a global level.
            </p>
            <p class="fables-forth-text-color my-3 wow fadeInLeft">
                At AXITEQ, we prioritized human resource skill development above all else. Since only an upgraded, updated and fine-tuned team can deliver projects that are compliant with the rigors of today keeping our values and morality at the forefront of everything we do.
            </p>
            <p class="fables-forth-text-color my-3 wow fadeInLeft">
                For our dedicated teams, there is nothing that we cannot connect. As an IOT development company, we build powerful and secure IOT and other engineering solutions with deep perfection that deliver value to consumers and enterprises alike.
            </p>

            <div class="row my-3 my-md-5 overflow-hidden">
                <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 mt-4 mx-auto px-5 py-2 fables-second-hover-background-color">Learn More</a>
            </div>

        </div>

        <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
            <div class="choose-img-border-after fables-second-border-color position-relative">
                <img src="assets/custom/images/choose-us-index.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
<!-- End why choose us -->

<div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
    <div class="container position-relative z-index">
        <div class="row">
            <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
                <img src="assets/custom/images/choose-img.jpg" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s">
                <p class="fables-main-text-color font-25 mb-2 wow fadeInLeft">WHY</p>
                <h2 class="fables-second-text-color font-35 font-weight-bold wow fadeInLeft">CHOOSE  <span class="fables-main-text-color">US</span></h2>
                <p class="fables-forth-text-color mt-4 mb-4">
                    We care, we take a personalized approach to each customer, and our management team is never more than a phone call or email away.
                </p>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".3s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".6s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".9s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay="1.2s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Start why choose us -->
<div class="container-fluid">
    <div class="row mt-3 mt-md-5">
        <div class="col-12 col-lg-5 offset-lg-1 mb-4 mb-lg-0 overflow-hidden">
            <h2 class="fables-second-text-color font-35 bold-font wow fadeInLeft"> WHY  <span class="fables-main-text-color">CHOOSE US</span></h2>
            <p class="fables-forth-text-color my-3 wow fadeInLeft">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor purus ac tellus auctor auctor. Nulla tincidunt lobortis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor purus ac tellus auctor auctor. Nulla tincidunt lobortis aliquam.
            </p>
            <div class="position-relative mb-3 wow bounceInDown">
                <p class="fables-fifth-text-color">
                    <span class="fables-iconDiagonal-arrow"></span>
                    Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                </p>
            </div>
            <div class="position-relative mb-3 wow bounceInDown">
                <p class="fables-fifth-text-color">
                    <span class="fables-iconDiagonal-arrow"></span>
                    Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                </p>
            </div>
            <div class="position-relative mb-3 wow bounceInDown">
                <p class="fables-fifth-text-color">
                    <span class="fables-iconDiagonal-arrow"></span>
                    Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                </p>
            </div>
            <div class="position-relative mb-3 wow bounceInDown">
                <p class="fables-fifth-text-color">
                    <span class="fables-iconDiagonal-arrow"></span>
                    Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                </p>
            </div>
            <a href="#" class="btn fables-second-background-color white-color white-color-hover py-2 px-4 my-2 rounded-0 font-18">Learn More</a>

        </div>
        <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
            <div class="choose-img-border-after fables-second-border-color position-relative">
                <img src="assets/custom/images/choose-us-index.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
<!-- End why choose us -->

<!-- Start Banner Here -->
<div class="fables-price-bg fables-after-overlay py-4 py-lg-5 my-4 my-lg-5 bg-rules overflow-hidden">
    <div class="container position-relative z-index">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center wow zoomIn position-relative z-index">
                <h3 class="fables-second-text-color mb-3 font-30 font-weight-bold">Working towards your business goals</h3>
                <p class="font-weight-light fables-third-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada Class aptent taciti sociosqu Duis congue turpis risus, ac dapibus mi malesuada ut. Duis feugiat nisi orci.Lorem ipsum dolor sit amet.
                </p>
                <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 my-4 py-2 px-5 position-relative z-index fables-second-hover-background-color">Learn More</a>

            </div>
        </div>
    </div>
</div>

<!-- / End Banner here -->

<div class="container mb-4 mb-md-5">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="text-center">
                <h2 class="fables-main-text-color font-35 font-weight-bold mb-4">Latest Works</h2>
                <p class="fables-forth-text-color">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum sunt nam.

                </p>
            </div>
        </div>
    </div>

    <div class="gallery-filter">
        <div class="portfolioFilter my-3 clearfix">
            <a href="#" data-filter="*" class="current">ALL</a>
            <a href="#" data-filter=".webDesign" class="fables-forth-text-color">Web design</a>
            <a href="#" data-filter=".appDesign" class="fables-forth-text-color">App design</a>
            <a href="#" data-filter=".brand" class="fables-forth-text-color">Brand</a>
            <a href="#" data-filter=".development" class="fables-forth-text-color">Development</a>
        </div>
        <div class="portfolioContainer row filter-masonry">
            <div class="drawings places col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial1.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a data-fancybox="gallery" href="assets/custom/images/index-testimonial1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>
            </div>

            <div class="webDesign food col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial2.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a data-fancybox="gallery" href="assets/custom/images/index-testimonial2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="webDesign objects col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial3.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a  data-fancybox="gallery" href="assets/custom/images/index-testimonial3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>

            </div>
            <div class="appDesign brand col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial4.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a data-fancybox="gallery" href="assets/custom/images/index-testimonial4.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>
            </div>

            <div class="webDesign col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial5.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a data-fancybox="gallery" href="assets/custom/images/index-testimonial5.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="webDesign col-sm-6 col-md-3 mb-2">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                    <img src="assets/custom/images/index-testimonial5.jpg" alt="image" class="w-100">
                    <div class="img-filter-overlay fables-main-color-transparent row m-0">
                        <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                        <a data-fancybox="gallery" href="assets/custom/images/index-testimonial5.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                    </div>
                </div>
            </div>


        </div>
        <div class="text-center">
            <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 mt-4 mx-auto px-5 py-2 fables-second-hover-background-color">Show All Projects</a>
        </div>
    </div>
</div>
<div class="fables-testimonial fables-after-overlay py-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="fables-contact-caption-txt">
                    <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">We are the best business consulting company ever!!</h3>
                    <p class="fables-third-text-color position-relative z-index font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada Class aptent taciti sociosqu.</p>

                </div>
            </div>
            <div class="col-12 col-md-4 offset-xl-2 col-xl-2 text-center">
                <a href="contactus1.html" class="btn fables-second-background-color rounded-0 white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Contact us</a>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row overflow-hidden">
        <div class="col-12">
            <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">Latest News</h2>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">
            <div class="image-container translate-effect-right">
                <a href="#"><img src="assets/custom/images/cat-larg4.jpg" alt=""></a>
            </div>
            <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
            <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
            <p class="fables-forth-text-color font-14">
                When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
            </p>
            <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

        </div>
        <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".8s" data-wow-duration="1.5s">
            <div class="image-container translate-effect-right">
                <a href="#"><img src="assets/custom/images/cat-larg5.jpg" alt=""></a>
            </div>
            <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
            <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
            <p class="fables-forth-text-color font-14">
                When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
            </p>
            <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

        </div>
        <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s">
            <div class="image-container translate-effect-right">
                <a href="#"><img src="assets/custom/images/cat-larg6.jpg" alt=""></a>
            </div>
            <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
            <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
            <p class="fables-forth-text-color font-14">
                When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
            </p>
            <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

        </div>
    </div>
</div>
{{--<div class="fables-testimonial fables-after-overlay py-4 py-lg-5 bg-rules">--}}
{{--    <div class="container">--}}
{{--        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">Careers</h2>--}}

{{--        <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">--}}
{{--            <div class="row text-center fables-testimonial-carousel-item rounded py-4">--}}
{{--                <div class="col-12 col-md-3 white-color">--}}
{{--                    <p>No Job Opening</p>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-9 p-0 p-md-2 white-color">--}}
{{--                    <p>No Job Opening</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row text-center fables-testimonial-carousel-item rounded py-4">--}}
{{--                <div class="col-12 col-md-3 white-color">--}}
{{--                    <p>No Job Opening</p>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-9 p-0 p-md-2 white-color">--}}
{{--                    <p>No Job Opening</p>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- /End page content -->
@include('website.brands')
<!-- Start Newsletter Section -->
@include('website.news_letter')
<!-- /End Newsletter Section -->
@include('website.footer')
