@extends('frontend.template.master') 
@section('title','Home')
@section('style')
@endsection
@section('content') 
  <header class="text-center" name="home">
    <div class="intro-text">
      <div class="header-carousel row">
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
        <div class="item col-sm-8 col-md-offset-2">
          <h1 class="wow fadeInDown">We are <strong><span class="color">PRATAMA KRIDA</span></strong></h1>
          <p class="wow fadeInDown">a creative Consultant from Indonesia</p>
          <a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Services</a> 
        </div>
      </div>
    </div>
  </header>

  <div id="about-section">
    <div class="container">
      <div class="section-title text-center wow fadeInDown">
        <h2><strong>About</strong> us</h2>
        <hr>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div class="row">
        <div class="col-md-6 wow fadeInLeft"> <img src="{{ asset('storage/images/gallery/design.jpg') }}" class="img-responsive"> </div>
        <div class="col-md-6 wow fadeInRight">
            <h4>Who We Are</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
            <div class="space"></div>
            <h4>What We Do</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
            <div class="space"></div><div class="list-style">
              <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <ul>
                    <li>Lorem ipsum dolor</li>
                    <li>Consectetur adipiscing</li>
                    <li>Duis sed dapibus leo</li>
                    <li>Sed commodo nibh ante</li>
                  </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <ul>
                    <li>Lorem ipsum dolor</li>
                    <li>Consectetur adipiscing</li>
                    <li>Duis sed dapibus leo</li>
                    <li>Sed commodo nibh ante</li>
                  </ul>
                </div>
              </div>
            </div>     
        </div>
      </div>
    </div>
  </div>

  <div id="services-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2>Our <strong>Services</strong></h2>
        <hr>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus. Eleifend pellentesque natoque faucibus magna ut etiam.</p>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-road"></i>
          <h4><strong>Services 1</strong></h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
        <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-gears"></i>
          <h4><strong>Services 2</strong></h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
        </div>
        <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-bullhorn"></i>
          <h4><strong>Services 3</strong></h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
        <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-rocket"></i>
          <h4><strong>Services 4</strong></h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="project-section" class="text-center">
    <div class="container"> <!-- Container -->
      <div class="section-title wow fadeInDown">
        <h2>Our <strong>Project</strong></h2>
        <hr>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Project 1</a></li>
              <li><a href="#" data-filter=".project1">Project 2</a></li>
              <li><a href="#" data-filter=".project2">Project 3</a></li>
              <li><a href="#" data-filter=".project3">Project 4</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-3 col-lg-3 project2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
              <div class="hover-bg"> <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery1.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
              <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery2.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project2 project3">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
              <div class="hover-bg"> <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                 Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery3.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
              <div class="hover-bg"> <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery4.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1000ms">
              <div class="hover-bg"> <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery5.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project3">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1200ms">
              <div class="hover-bg"> <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Branding
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery6.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project1 project2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1400ms">
              <div class="hover-bg"> <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development, Branding
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery7.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 project1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1600ms">
              <div class="hover-bg"> <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery8.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="gallery-section" class="text-center">
    <div class="container"> <!-- Container -->
      <div class="section-title wow fadeInDown">
        <h2>Our <strong>Gallery</strong></h2>
        <hr>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Gallery 1</a></li>
              <li><a href="#" data-filter=".gallery1">Gallery 2</a></li>
              <li><a href="#" data-filter=".gallery2">Gallery 3</a></li>
              <li><a href="#" data-filter=".gallery3">Gallery 4</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-3 col-lg-3 gallery1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
              <div class="hover-bg"> <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery9.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
              <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery10.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery3">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
              <div class="hover-bg"> <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                 Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery11.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
              <div class="hover-bg"> <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery1.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1000ms">
              <div class="hover-bg"> <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery6.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery3">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1200ms">
              <div class="hover-bg"> <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Branding
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery3.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery3 gallery1">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1400ms">
              <div class="hover-bg"> <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  App Development, Branding
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery1.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 gallery2">
            <div class="portfolio-item wow fadeInUp" data-wow-delay="1600ms">
              <div class="hover-bg"> <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                <div class="hover-text">
                  <h4>Project Title</h4>
                  Web Design
                  <div class="clearfix"></div>
                  <i class="fa fa-plus"></i> </div>
                <img src="{{ asset('storage/images/gallery/gallery5.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="testimonials-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2>What our <strong>Clients</strong> say</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="testimonial" class="owl-carousel owl-theme wow fadeInUp" data-wow-delay="200ms">
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
              <p><strong>John DOE</strong>, CEO, Company.</p>
            </div>
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
              <p><strong>Jenny DOE</strong>, CEO, Company.</p>
            </div>
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
              <p><strong>John DOEn</strong>, CEO, Company.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact-section" class="text-center">
    <div class="container">
      <div class="section-title wow fadeInDown">
        <h2><strong>Contact</strong> us</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
      </div>
      <div class="col-md-6 wow fadeInLeft" data-wow-delay="400ms">
        <h3>Head Office</h3>
        <div class="contact-detail">
          <ul>
            <li><i class="fa fa-building-o fa-lg"></i> 321 Awesome Street New York, NY 17022</li>
            <li><i class="fa fa-envelope-o fa-lg"></i>info@companyname.com</li>
            <li><i class="fa fa-phone fa-lg"></i> +1 800 123 1234</li>
            <li><i class="fa fa-comments-o fa-lg"></i>+1 800 123 1234</li>
            <li><i class="fa fa-map-marker fa-lg"></i> <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4795138111726!2d107.57789821477306!3d-6.952624594976941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8cbd5502deb%3A0xd7afee3afa778f2!2sJl.+Cibolerang+No.68%2C+Margasuka%2C+Babakan+Ciparay%2C+Kota+Bandung%2C+Jawa+Barat+40225!5e0!3m2!1sid!2sid!4v1494135093365" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-6 wow fadeInRight" data-wow-delay="400ms">
        <h3>Leave us a message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default ">Send Message</button>
        </form>
      </div>
    </div>
  </div>
@endsection
