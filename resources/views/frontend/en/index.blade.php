<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safwa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/app.css') }}">
</head>
<body>
<header class="index">
    <nav class="navbar navbar-default top-nav">
        <div class="container">
            <div class="header-top">
                <div class="footer-social">
                    <a href="#" class="social">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="social">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="social">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
                <ul class="lang">
                    <li>
                        <a href="{{ route('IndexAr') }}">عربى</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="landing intro">
    <div class="intro-body">
        <div class="container" >
            <div class="intro-logo">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('Home') }}"> <img src="assets/img/logo-index-header.png" alt="al safwa"
                                                 class="img-responsive"> </a>
                    </div>
                </div>
            </div>
            <section>
                <div class="container" style="width: 100%;">
                    <div class="row" >
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ route('Healthcare') }}" class="key1" data-toggle="tooltip" data-placement="top" title="MEDICAL EXCELLENCE AT YOUR BEDSIDE… 
                          Your trusted choice for providing Homecare Services on the hands of our licensed, certified, and highly trained professionals. This in addition to being internationally accredited by CHAP. Our wide array of homecare medical services include:-
                        - Nursing & Rehabilitation services
                        - Midwifery & Babysitting
                        - Patient Escort Services
                        - Healthcare Management
                        - Medical Professional Development (CME/CPD & Medical Skill Training)
                        - Third-party Consultancy Services">
                                <p class="key">
                                   <!-- <img src="assets1/img/land-puzzle.png" alt="" class="img-responsive"/>-->
                                    <img src="assets1/img/health-index.png" alt="" class="absolute main-img  img-responsive"/>
                                </p>
                            </a>
                        </div>

                        <div class="puzzle col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ route('Home') }}" class="key1" data-toggle="tooltip" data-placement="top" title=" MOVING LIIFE AROUND YOU…
                            Provides a complete range of mobility solutions, accessibility, and car adaptations. Our product range includes:-
                            - Wheelchairs
                            - Seating & Positioning
                            - Standing & Walking aids
                            - Homecare solutions: e.g. Lifts, Stair-climbers, toilet accessories, etc…
                            - Exercise & Physiotherapy Equipment
                            - Car Adaptation
                            - Medical Equipment" >
                                <p class="key">
                                  <!-- <img src="assets1/img/land-puzzle.png" alt="" class=" img-responsive"/>-->
                                    <img src="assets1/img/mobility-index.png" alt="" class="absolute main-img img-responsive"/>
                                </p>
                            </a>
                        </div>

                        <div class="puzzle col-md-4 col-sm-4 col-xs-12">
                            <a href="{{ route('Autoclinic') }}" class="key1" data-toggle="tooltip" data-placement="top" title="IF YOU HAVE THE NEED, WE HAVE THE SOLUTION…A State of the Art
                            comprehensive automotive workshop, specialized in up-fitting, body building & vehicle conversion to meet our clients’ needs, whether it is simply a wheelchair accessible vehicle, or a sophisticated mobile laboratory:- Wheelchair Accessible vehicles & Driving aids & Industrial applications e.g. tailgates, mobile workshops, refrigeration, etc… &Classic cars restoration & Automotive Service & Repair & Fire-suppression Systems" >
                                <p class="key">
                                   <!-- <img src="assets1/img/land-puzzle.png" alt="" class="img-responsive"/> -->
                                    <img src="assets1/img/auto-index.png" alt="" class="absolute main-img img-responsive"/>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix">

            </div>

        </div>
    </div>
    <footer class="footer">

        <div class="footer-logo">

            <a href="tel:+97180072392"><p><b>800</b> <span><b>SAFWA</b><b>72392</b></span></p></a>

        </div>

        <div class="footer-copyright">

            <p>© 2017 Alsafwa. All Rights Reserved</p>

        </div>

        <div class="footer-social">

            <a href="#" class="social">

                <i class="fa fa-twitter"></i>

            </a>


            <a href="#" class="social">

                <i class="fa fa-facebook"></i>

            </a>


            <a href="#" class="social">

                <i class="fa fa-google-plus"></i>

            </a>

            <a href="#" class="social">

                <i class="fa fa-youtube-play"></i>

            </a>

        </div>

    </footer>
</div>

<script type="text/javascript" src="{{ asset('node_modules1/jquery/dist/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('node_modules1/bootstrap/dist/js/bootstrap.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var my_posts = $("[rel=tooltip]");
        for(i=0;i<my_posts.length;i++){
            the_post = $(my_posts[i]);
            if(the_post.hasClass('invert')){
                the_post.tooltip({ placement: 'left'});
                the_post.css("cursor","pointer");
            }else{
                the_post.tooltip({ placement: 'rigt'});
                the_post.css("cursor","pointer");
            }
        }
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
