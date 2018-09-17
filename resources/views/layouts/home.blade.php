@section('head')
<head>
    <title>Welcome to Jyothi Public School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Jyothi Public School, CBSC schools in Aluva, CBSC Schools, Best Results,
Schools in Nalamile, Best result in 10th, Good teaching" />
    <!-- css links -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="css/facultystyle.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <!-- /css links -->
    <link href='//fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
@endsection
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="images/logo.png" alt="Jyothi Public School" style="float:left; width:70px; height:70px;" />
            <a class="navbar-brand" href="index.html"> &nbsp;Jyothi Public School</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#myPage">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="{{url('gallery')}}">GALLERY</a></li>
                <li><a href="#faculty">FACULTY</a></li>
                <li><a href="#events">EVENTS</a></li>
                <li><a href="https://epay.federalbank.co.in/easypayments/" target="_blank">ONLINE PAYMENT</a></li>
                <li><a href="report.html">REPORT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- /Fixed navbar -->


@section('footer')
<div class="footer">
    <div class="container">
        <p> &copy; 2018. All Rights Reserved | Design by <a href="http://LogicLabz.co.in">LogicLabz</a></p>
    </div>
</div>
@endsection
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Scripts For Navbar -->

<script src="js/jquery.scrollTo.min.js"></script>

<!--// Scripts For Navbar -->

<!-- Scripts For Gallery Section -->
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/common.js"></script>
<!--// Scripts For Gallery Section -->

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top,
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });
    })
</script>

<!-- /js files -->
<!-- Script For Number Scrolling -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //Script For Number Scrolling -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append();
            },
            after: function () {
                $('.events').append();
            }
        });
    });
</script>