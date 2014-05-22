<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>

<div id="banner" class="home-page">
	<div class="container">
		<div id="inner-content" class="wrap clearfix">
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-drive.png" alt="Cloud Servers">
      <div class="container">
        <div class="carousel-caption">
          <h1>Cloud Hosting Servers</h1>
          <p>Donec non facilisis lorem. Vivamus tellus lectus.</p>
          <p>Ultimate Flexibility. Instant Deployment</p>
          <p>Instant Deployment</p>
          <p><a class="btn btn-default" href="#">Learn More</a> <a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-drive2.png" alt="Scalable">
      <div class="container">
        <div class="carousel-caption">
          <h1>Scalable Server Power</h1>
          <p>Donec non facilisis lorem. Vivamus tellus lectus.</p>
          <p>Ultimate Flexibility</p>
          <p>Instant Deployment</p>
          <p><a class="btn btn-default" href="#">Learn More</a> <a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/cloud-drive3.png" alt="Consolidate">
      <div class="container">
        <div class="carousel-caption">
          <h1>Consolidate Resources</h1>
          <p>Donec non facilisis lorem. Vivamus tellus lectus.</p>
          <p>Ultimate Flexibility</p>
          <p>Instant Deployment</p>
          <p><a class="btn btn-default" href="#">Learn More</a> <a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.carousel -->
		</div> <!-- end #inner-content -->
	</div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="container">
	<div class="row feature">
  <div class="col-sm-6 details">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/responsive.png" class="img-responsive" alt="Responsive">
  </div>
  <div class="col-sm-6">
 <h2><i class="icon-desktop primary-color"></i> Advanced Control Panel</h2>
<p>Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac.</p>
<p><a class="btn btn-default" href="#">Live Demo</a> <a class="btn btn-default" href="#">Learn More</a></p>
</div>
	</div> <!-- end .row-->

  <div class="row">
<section id="features">
                  <div class="col-sm-3">
                    <div class="services">
                      <div class="services-icon"><i class="fa icon-rocket"></i></div>
                        <h2>Fast Network</h2>
                        <p>Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus.</p>
                        <p><a class="btn btn-primary" href="#">Sign up</a></p>
                    </div><!--feature-box-->
                </div><!--/3-->
                
                <div class="col-sm-3">
                    <div class="services">
                    <div class="services-icon"><i class="fa icon-cloud-upload"></i></div>                   
                        <h2>99.9% Uptime</h2>
                        <p>Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus.</p>
                        <p><a class="btn btn-primary" href="#">Sign up</a></p>
                    </div><!--feature-box-->
                </div><!--/3-->
                
                <div class="col-sm-3">
                    <div class="services">
                      <div class="services-icon"><i class="icon-fighter-jet"></i></div>
                        <h2>High Performance</h2>
                        <p>Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus.</p>
                        <p><a class="btn btn-primary" href="#">Sign up</a></p>
                    </div><!--feature-box-->
                </div><!--/3-->
                
                <div class="col-sm-3">
                    <div class="services">
                      <div class="services-icon"><i class="icon-cog"></i></div>
                        <h2>Full Control</h2>
                        <p>Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus.</p>
                        <p><a class="btn btn-primary" href="#">Sign up</a></p>
                    </div><!--feature-box-->
                </div><!--/3-->
            </section>
</div>
<div class="row bs-space normal bs-line dashed"></div>
  <div class="row feature last">
  <div class="col-sm-6">
     <h2><i class="icon-comments primary-color"></i> Customer Testimonials</h2>
  <p><i class="icon-quote-left icon-large icon-muted"></i> Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Vivamus tellus lectus. Vivamus tellus lectus. <i class="icon-quote-right icon-large icon-muted"></i></p>
  <p><i class="icon-quote-left icon-large icon-muted"></i> Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. <i class="icon-quote-right icon-large icon-muted"></i></p>

</div>
  <div class="col-sm-6">
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <i class="icon-plus-sign primary-color"></i> Standard Features 1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
       Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <i class="icon-plus-sign primary-color"></i> Standard Features 2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <i class="icon-plus-sign primary-color"></i> Standard Features 3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem. Vivamus tellus lectus. Aenean volutpat mauris orci, id ornare magna commodo ac. Donec non facilisis lorem.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div> <!-- end .container-->
<?php get_footer(); ?>