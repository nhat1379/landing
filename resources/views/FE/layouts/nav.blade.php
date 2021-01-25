<header id="site-header" class="site-header header-static">
    <!-- Main Header start -->
    <div class="header-topbar style-2 d-none d-lg-block">
        <div class="octf-area-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 align-self-center">
                        <div class="topbar-socials list-social">
                            <ul>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="topbar-info d-flex mb-0 justify-content-end clearfix">
                            <li><i class="ot-flaticon-place"></i>411 University St, Seattle, USA</li>
                            <li><a href="mailto:theratio_interior@mail.com"><i class="ot-flaticon-mail"></i>theratio_interior@mail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="octf-main-header main-header-slight header-4">
        <div class="octf-area-wrap">
            <div class="container octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col">
                            <div id="site-logo" class="site-logo">
                                <a href="index.html">
                                    <img src="{{ asset('fe/images/home_4_5.svg') }}" alt="Theratio" class="logo-size-small">
                                </a>
                            </div>
                        </div>
                        <div class="octf-col menu-col">
                            <nav id="site-navigation" class="main-navigation nav-text-dark">
                                <ul class="menu">
                                    <li class="{{ request()->routeIs("fe.home") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.home") }}">Home</a></li>
                                    <li class="{{ request()->routeIs("fe.blog.list") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.blog.list") }}">Blog</a></li>
                                    <li class="{{ request()->routeIs("fe.about-us") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.about-us") }}">Về chúng tôi</a></li>
                                    <li class="{{ request()->routeIs("fe.contact") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.contact") }}">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="octf-col cta-col text-right">
                        <!-- Call To Action -->
                            <div class="octf-btn-cta">

                                <div class="octf-search octf-cta-header">
                                    <div class="toggle_search octf-cta-icons">
                                        <i class="ot-flaticon-search"></i>
                                    </div>
                                    <!-- Form Search on Header -->
                                    <div class="h-search-form-field collapse">
                                        <div class="h-search-form-inner">
                                            <form role="search" method="get" class="search-form">
                                                <input type="search" class="search-field" placeholder="Tìm kiếm..." value="" name="s">
                                                <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                            </form>
                                        </div>                                  
                                    </div>
                                </div>

                                <div class="octf-sidepanel octf-cta-header">
                                    <div class="site-overlay panel-overlay"></div>
                                    <div id="panel-btn" class="panel-btn octf-cta-icons">
                                        <i class="ot-flaticon-menu"></i>
                                    </div>
                                </div>
                                
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mobile bg-dark-theratio">
        <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
                <div class="octf-col">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="{{ route('fe.home') }}">
                                <img src="images/logo.svg" alt="Theratio">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="octf-col justify-content-end">
                    <div class="octf-search octf-cta-header">
                        <div class="toggle_search octf-cta-icons">
                            <i class="ot-flaticon-search"></i>
                        </div>
                        <!-- Form Search on Header -->
                        <div class="h-search-form-field collapse">
                            <div class="h-search-form-inner">
                                <form role="search" method="get" class="search-form">
                                    <input type="search" class="search-field" placeholder="Tìm kiếm..." value="" name="s">
                                    <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                </form>
                            </div>                                  
                        </div>
                    </div>
                    <div class="octf-menu-mobile octf-cta-header">
                        <div id="mmenu-toggle" class="mmenu-toggle">
                            <button><i class="ot-flaticon-menu"></i></button>
                        </div>
                        <div class="site-overlay mmenu-overlay"></div>
                        <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                            <div class="mmenu-inner">
                                <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                <div class="mobile-nav">
                                    <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                        <li class="{{ request()->routeIs("fe.home") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.home") }}">Home</a></li>
                                        <li class="{{ request()->routeIs("fe.blog.list") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.blog.list") }}">Blog</a></li>
                                        <li class="{{ request()->routeIs("fe.about-us") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.about-us") }}">Về chúng tôi</a></li>
                                        <li class="{{ request()->routeIs("fe.contact") ? 'current-' : '' }}menu-item"><a href="{{ route("fe.contact") }}">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>