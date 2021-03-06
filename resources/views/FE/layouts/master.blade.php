<!DOCTYPE html>
<html lang="en">

@include('FE.layouts.head')

<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        @include('FE.layouts.nav')

        @include('FE.layouts.side')

        <div id="content" class="site-content">
            @yield('content')            
        </div>

        @include('FE.layouts.footer')
    </div>
    
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    
    @include('FE.layouts.javascripts')

    @if (session('success_notify'))
        <script>
            alert('{{ session('success_notify') }}');
        </script>
    @endif
</body>
</html>