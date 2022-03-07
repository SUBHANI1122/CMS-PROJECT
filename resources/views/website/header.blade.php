<!-- Start Top Header -->

<div class="fables-transparent header-fixed-height-large">
<!-- Start Top Header -->
<div class="fables-top-header-signin position-relative z-index">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-3 col-lg-5">
                <a href="signin.html" class="top-link fables-third-text-color fables-second-hover-color font-13 px-3 d-inline-block pl-0"><span class="fables-iconuser"></span> Sign in</a>
                <a href="register.html" class="top-link fables-third-text-color fables-second-hover-color font-13 px-3 d-inline-block border-left-0"><i class="fas fa-user-plus"></i> Register </a>
                <a href="#search" class="fables-third-text-color fables-second-hover-color px-3 d-inline-block border-left-0">
                    <span class="fables-iconsearch-icon"></span>
                </a>
            </div>
            <div class="col-12 col-sm-5 col-lg-4 text-left text-lg-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone :  +92 51 410 6952, +92 345 550 6116</p>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 text-left text-lg-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: info@axiteq.com</p>
            </div>

        </div>
    </div>
</div>
<div class="fables-transparent header-fixed-height-large py-3 py-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-11 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
                    <a class="navbar-brand pl-0" href="{{url('/')}}"><img src="{{asset('website_assets/custom/images/fables-logo.png')}}" alt="AXITEQ (Private) Limited" class="fables-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="fablesNavDropdown">

                        <ul class="navbar-nav mx-auto fables-nav">

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="sub-nav1" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('about')}}" id="sub-nav2" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="services.html" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="sub-nav3">

                                    <li><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li><a class="dropdown-item dropdown-toggle" href="#">Header 1</a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    <li><a class="dropdown-item" href="header1-transparent.html">Header 1 Transparent</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header1-light.html">Header 1 Light</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header1-dark.html">Header 1 Dark</a></li><li><a class="dropdown-item" href="header-megamenu.html">Header Mega menu</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="dropdown-item dropdown-toggle" href="#">Header 2</a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    <li><a class="dropdown-item" href="header2-transparent.html">Header 2 Transparent</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header2-light.html">Header 2 Light</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header2-dark.html">Header 2 Dark</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="dropdown-item dropdown-toggle" href="#">Header 3</a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    <li><a class="dropdown-item" href="header3-transparent.html">Header 3 Transparent</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header3-light.html">Header 3 Light</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header3-dark.html">Header 3 Dark</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="dropdown-item dropdown-toggle" href="#">Header 4</a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    <li><a class="dropdown-item" href="header4-transparent.html">Header 4 Transparent</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header4-light.html">Header 4 Light</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header4-dark.html">Header 4 Dark</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="dropdown-item dropdown-toggle" href="#">Header 5</a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    <li><a class="dropdown-item" href="header5-transparent.html">Header 5 Transparent</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header5-light.html">Header 5 Light</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="header5-dark.html">Header 5 Dark</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Solutions
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                    <li><a class="dropdown-item" href="404.html">404</a></li>
                                    <li><a class="dropdown-item" href="comming-soon.html">Comming Soon</a></li>
                                    <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                    <li><a class="dropdown-item" href="gallery-filter.html">Gallery Filter</a></li>
                                    <li><a class="dropdown-item" href="gallery-filter-masonry.html">Gallery Filter Masonry</a></li>
                                    <li><a class="dropdown-item" href="gallery-history.html">Gallery History</a></li>
                                    <li><a class="dropdown-item" href="gallery-history2.html">Gallery History 2</a></li>
                                    <li><a class="dropdown-item" href="gallery-single.html">Gallery Single</a></li>
                                    <li><a class="dropdown-item" href="gallery-timeline.html">Gallery Timeline </a></li>
                                    <li><a class="dropdown-item" href="gallery-timeline2.html">Gallery Timeline 2</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="portfolio.html" id="sub-nav5" aria-haspopup="true" aria-expanded="false">
                                    Portfolio
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="careers.html" id="sub-nav6" aria-haspopup="true" aria-expanded="false">
                                    Careers
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('contact')}}" id="sub-nav7">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>

            <div class="col-12 col-md-0 col-lg-1 pr-md-0 icons-header-mobile">

                <div class="fables-header-icons">
                    <div class="dropdown">
                        <a href="#_" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative border-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                    </div>
                    <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                        <span class="fables-iconsearch-icon"></span>
                    </a>
                    <a href="signin.html" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height d-block d-md-none"><span class="fables-iconuser"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
