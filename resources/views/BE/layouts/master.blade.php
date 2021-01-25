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
    
    @include('BE.layouts.javascripts')
</body>

</html>
