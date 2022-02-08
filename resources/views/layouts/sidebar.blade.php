<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{url('/home')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Plugins</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('slider.index')}}">Slider</a></li>
                        <li><a href="{{route('testimonial.index')}}" key="t-horizontal">Testimonials</a></li>
                        <li><a href="layouts-horizontal.html" key="t-horizontal">Articals</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Services</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Solutions</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">CMS</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html" key="t-horizontal">Pages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('team.index')}}">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Team Members</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Subscribers</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
