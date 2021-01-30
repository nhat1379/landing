<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <a href="profile.html">
                    <img src="{{ asset("be/img/ui-sam.jpg") }}" class="img-circle" width="80">
                </a>
            </p>
            <h5 class="centered">Nhatdote</h5>

            <li class="mt">
                <a class="active" href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Thông tin chung</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('be.config') }}">Website</a></li>
{{--                    <li><a href="{{ route('be.menu') }}">Menu</a></li>--}}
                    <li><a href="{{ route('be.config.home') }}">Trang chủ</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Dịch vụ</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('be.services.index') }}">Dịch vụ</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Blogs</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('be.blogs.index') }}">Danh sách Blog</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Thư viện ảnh</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('be.galleries.index') }}">Thư viện ảnh</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Feedback</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('be.feedbacks.index') }}">Feedback</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
