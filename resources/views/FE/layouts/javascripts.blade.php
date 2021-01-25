    <!-- jQuery -->
    <script src="{{ asset("fe/js/jquery.min.js") }}"></script>
    <script src="{{ asset("fe/js/mousewheel.min.js") }}"></script>
    <script src="{{ asset("fe/js/lightgallery-all.min.js") }}"></script>
    <script src="{{ asset("fe/js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("fe/js/jquery.isotope.min.js") }}"></script>
    <script src="{{ asset("fe/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("fe/js/easypiechart.min.js") }}"></script>
    <script src="{{ asset("fe/js/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("fe/js/scripts.") }}js"></script>
    <script src="{{ asset("fe/js/royal_preloader.min.js") }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="{{ asset("fe/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script  src="{{ asset("fe/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="{{ asset("fe/plugins/revolution/revolution/js/extensions/revolution-plugin.js") }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="{{ asset("fe/js/rev-script-1.js") }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           :   'progress',
                background     :   '#1a1a1a',
            });
        })(jQuery);
    </script>  