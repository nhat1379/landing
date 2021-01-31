<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <a href="javascript:;">
                    <img src="{{ asset("be/img/ui-sam.jpg") }}" class="img-circle" width="80">
                </a>
            </p>
            <h5 class="centered">Nhatdote</h5>

            @php
                $menu = App\Libs\Menu::menu();
            @endphp
            
            @foreach ($menu as $k => $item)

                <li class="{{ $k == 0 ? 'mt' : 'sub-menu' }}">
                    <a class="{{ request()->routeIs($item['active'] ?? []) ? 'active' : '' }}" href="{{ !empty($item['route']) ? route($item['route']) : 'javascript:;' }}">
                        <i class="{{ $item['icon'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>

                    @if (!empty($item['children']))
                        <ul class="sub">
                            @foreach ($item['children'] as $child)
                                <li class="{{ request()->routeIs($child['active'] ?? []) ? 'active' : '' }}"><a href="{{ route($child['route']) }}">{{ $child['label'] }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>

            @endforeach

            {{-- <li class="mt">
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
            </li> --}}

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
