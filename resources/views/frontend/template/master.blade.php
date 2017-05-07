<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pratama Krida | @yield('title')</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://www.templategarden.com/preview/tempo/template/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.templategarden.com/preview/tempo/template/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.templategarden.com/preview/tempo/template/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.templategarden.com/preview/tempo/template/img/apple-touch-icon-114x114.png">
    {!! Html::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('bower_components/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/owl.theme.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/animate.min.css') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Lato:400,700,900,300') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300') !!}
    @yield('style')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  <body>
    <div id="preloader">
      <div id="status"> <img src="{{ asset('storage/images/ajax-loader.gif') }}" height="64" width="64" alt=""> </div>
    </div>
    <section id="navbar-section">
     @include('frontend.template.partials.navbar') 
    </section id="main-section">
    <section id="footer-section">
      @yield('content')
    </section>
    <section>
     @include('frontend.template.partials.footer') 
    </section>

    <!-- Portfolio Modals --> 
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/01-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/02-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/03-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/04-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/05-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/06-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/07-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"> </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="modal-body"> 
                <!-- Project Details Go Here -->
                <h2>Project Title</h2>
                <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-responsive img-centered" src="https://www.templategarden.com/preview/tempo/template/img/portfolio/08-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                <ul class="list-inline">
                  <li><strong>Client</strong>: John Doe</li>
                  <li><strong>Category</strong>: Web Design</li>
                </ul>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Html::script('frontend/js/jquery-1.11.1.min.js') !!} 
    {!! Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') !!}
    <!-- <script type="text/javascript" src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>  -->
    <!-- <script type="text/javascript" src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>  -->
    {!! Html::script('js/wow.min.js') !!}
    {!! Html::script('js/jquery.isotope.js') !!} 
    {!! Html::script('js/owl.carousel.js') !!} 
    {!! Html::script('js/modernizr.custom.js') !!}
    {!! Html::script('js/main.js') !!}
    @yield('script')
    <script type="text/javascript">
      $(".header-carousel").owlCarousel({
        items:1,
        startPosition:0,
        nav:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:false
      });
    </script>
  </body>
</html>