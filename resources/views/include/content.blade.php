<!-- Page content -->
<div id="page-content-wrapper">
    <div class="content-header">

        <div class="col-md-1 col-sm-1">  <span id="home">
                            <a id="menu-toggle" href="#" >
                                <i class="fa fa-bars ext"></i>
                            </a>

                        </span>

        </div>

        <div class="col-md-4 col-sm-4 col-lg-2">

            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="  search-query form-control" placeholder="Search" />
                    <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span class=" icon-magnifier icons"></span>
                                            </button>
                                        </span>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="margin: -12px 0px 4px 0px;">  <h3>Pet License Application</h3>

        </div>
        <div class="col-md-1 col-sm-1  col-lg-3 adv_right" ><div class="logout_btn"><i class=" blue_color-text icon-logout icons"></i></div>

        </div>


    </div>

    <div class="page-content inset" data-spy="scroll" data-target="#spy">

        <div class="row">
            <div class="col-md-12 adv_center">
                <img src="img/color_logo.png" alt="GoPetie Logo" class="img-responsive">
                <h1>Welcome to Php Laravel</h1>


                <h3> <span><img src="img/city.png" alt="GoPetie Logo"></span> City of Los Angeles, CA</h3>
                <h4 class="pull-right">  <i class="fa fa-map-marker blue_color-text"></i> Los Angeles <span><img src="img/city.png" alt="GoPetie Logo"></span></h4>


            </div>

        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 content_area">
                <h3>My Account </h3>



            </div>

        </div>

    </div>

</div>

<div class="navbar navbar-default navbar-static-bottom">
    <p class="navbar-text pull-left blue_color-text">

    <ul>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy </a></li>
        <li><a href="#">FAQ</a></li>

    </ul>
    </p>

    <p class="navbar-text pull-right ">

        © 2017 Copyright GoPetie. All Rights Reserved.
    </p>
</div>
</div>

</body>
<script>

    /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });

    /*Scroll Spy*/
    $('body').scrollspy({ target: '#spy', offset:80});

    /*Smooth link animation*/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
</script>