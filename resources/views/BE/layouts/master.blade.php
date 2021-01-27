<!DOCTYPE html>
<html lang="en">

@include('BE.layouts.head')

<body>
    <section id="container">
       
        @include('BE.layouts.nav')
       
        @include('BE.layouts.side')
        
        <section id="main-content">
            
            @yield('content')

        </section>
       
        @include('BE.layouts.footer')
    
    </section>
    
    @if (session('success_notify'))
        <script>
            notice({
                title: 'THÀNH CÔNG!',
                text: '{{ session("success_notify") }}'
            })
        </script>
    @endif

    @if (session('error_notify'))
        <script>
            notice({
                title: 'THẤT BẠI!',
                text: '{{ session("error_notify") }}'
            })
        </script>
    @endif
</body>

</html>
