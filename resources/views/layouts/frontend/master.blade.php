<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/custome.css') }}">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;1,700&display=swap"
        rel="stylesheet">

    {{-- sroll --}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css" rel="stylesheet" type="text/css">

    {{-- animate scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- wa --}}
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+62857-1555-5488", // WhatsApp number
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>

    @stack('css')
    <title>@yield('title') | RGFolosofi</title>
</head>

<body>
    @include('layouts.frontend.navbar')
    @yield('content')
    @include('layouts.frontend.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdn.jsdelivr.net/stickynavbar.js/1.3.4/jquery.stickyNavbar.min.js"></script>
    <script>
        $(function() {
            $('.header').stickyNavbar({
                activeClass: "active", // Class to be added to highlight nav elements
                sectionSelector: "scrollto", // Class of the section that is interconnected with nav links
                animDuration: 200, // Duration of jQuery animation
                startAt: 200, // Stick the menu at XXXpx from the top of the this() (nav container)
                easing: "linear", // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
                animateCSS: true, // AnimateCSS effect on/off
                animateCSSRepeat: false, // Repeat animation everytime user scrolls
                cssAnimation: "fadeInDown", // AnimateCSS class that will be added to selector
                jqueryEffects: false, // jQuery animation on/off
                jqueryAnim: "slideDown", // jQuery animation type: fadeIn, show or slideDown
                selector: "a", // Selector to which activeClass will be added, either "a" or "li"
                mobile: false, // If false nav will not stick under 480px width of window
                mobileWidth: 480, // The viewport width (without scrollbar) under which stickyNavbar will not be applied (due usability on mobile devices)
                zindex: 9999, // The zindex value to apply to the element: default 9999, other option is "auto"
                stickyModeClass: "sticky", // Class that will be applied to 'this' in sticky mode
                unstickyModeClass: "unsticky" // Class that will be applied to 'this' in non-sticky mode
            });
        });

    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('js')
</body>

</html>
