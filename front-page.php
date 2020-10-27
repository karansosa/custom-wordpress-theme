<?php get_header() ?>

<section class="banner-section">
     
<div id="demo" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
 <li data-target="#demo" data-slide-to="0" class="active"></li>
 <li data-target="#demo" data-slide-to="1"></li>
 <li data-target="#demo" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
<?php
      $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
      $args = array(
        'post_type' => 'slider',
        'post_per_page' => 1,
        'paged' => $paged
      );
    $slider = new WP_Query( $args );
 ?>
    <?php while( $slider-> have_posts() ) : $slider->the_post() ?>
    <div class="carousel-item active">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/images/banner-1.jpg" alt="Los Angeles"> -->
      <?php the_post_thumbnail( 'large' , array('class' => 'slide-img') ) ?>
    <div class="carousel-caption">
    <h3><?php the_title() ?></h3>
        <p>We had such a great time in LA!</p>        
    </div>   
    </div>
  <?php endwhile; wp_reset_query(); ?>



</div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
 <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
 <span class="carousel-control-next-icon"></span>
</a>
</div>

</section>

<section class="abt-section" id="about">
  <div class="container">
    <div class="abt-heading text-center">
    <h1>Online Stores Since 1990</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae tempore ipsam dignissimos molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae tempore ipsam dignissimos molestias.</p>
    <p style="margin-bottom: 40px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae tempore ipsam dignissimos molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae tempore ipsam 
    dignissimos molestias Aliquam non, recusandae tempore ipsam dignissimos.</p>
    <a href="#">Know More</a>
    </div>
  </div>
</section> 




<section class="product-wrapper" id="product">
  <div class="container">
    <div class="pro-heading text-center">
      <h1>Our Products</h1>
      <p>Lorem ipsum dolor sit amet consectetur</p>
    </div>
    <div class="row pro-row">

    <?php
    $args = array(
      'post_type' => 'product',
      'post_per_page' => 3
    );
  $products = new WP_Query( $args );
  if( $products->have_posts()  ) : ?>
  <?php while( $products-> have_posts() ) : $products->the_post() ?>
  <div class="col-lg-4 col-md-6 col-sm-12 pt-5">
        <div class="pro-sep-sec">
          <figure>
          <?php the_post_thumbnail( 'medium' , array('class' => 'img-fluid post-img')) ?>
        </figure>
        <figcaption><a href=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Add To Cart</a></figcaption>
        </div>
       <div class="row upper-heading">
         <div class="col-md-8">
         <h4> <?php the_title() ?> </h4>
         </div>
         <div class="col-md-4">
           <h3>$8,200</h3>
         </div>
       </div>
       <p><?php the_excerpt() ?></p>
       <div class="row lower-heading">
         <div class="col-md-6 col-sm-12">
           <i style="color: #008ab7;" class="fa fa-star" aria-hidden="true"></i>
           <i style="color: #008ab7;" class="fa fa-star" aria-hidden="true"></i>
           <i style="color: #008ab7;" class="fa fa-star" aria-hidden="true"></i>
           <i style="color: #008ab7;" class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
         </div>
         <div class="col-md-6 col-sm-12">
           <h4>Review(24)</h4>         
         </div>
       </div>
      </div>

    <?php endwhile; ?>
    <?php endif; ?>
    </div>

  </div>
</section>

<section class="quick-cont">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12 align-self-center">
        <p>For Further Details Please contact Us</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 align-self-center text-right">
        <button>Contact Us</button>
      </div>
    </div>
  </div>
</section>




<section class="other-abt-sec">
  <div class="container">
    <div class="row">
    <?php
    $args = array(
      'post_type' => 'sale',
      'post_per_page' => 1
    );
  $sales = new WP_Query( $args );
  if( $sales->have_posts()  ) : ?>
  <?php while( $sales-> have_posts() ) : $sales->the_post() ?>
      <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="other-right">
      <?php the_post_thumbnail( 'large' , array('class' => 'img-fluid')) ?>
      </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="other-left">
       <div class="product-text-wrapper">
        <h2><?php the_title() ?> </h2>
        <p> <?php the_content() ?> </p>
        <div class="author-wrapper d-flex">
            <img src="<?php echo get_template_directory_uri() ?>/images/author1.jpg" alt="" style="height: 35px; width: 35px;">
            <p class="pl-2 align-self-center mb-0" >Jonathon Andrew , Themefisher.com</p>
        </div>
    </div>
      </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>  
</section>


<section class="client-testmonial">
  <div class="container">
    <div class="heading-wrapper text-center">
       <h1>Client Testimonials</h1>
       <p>Lorem ipsum dolor sit amet consectetur</p>
     </div>
    <div class="testmonial-wrapper">
      <div class="owl-carousel owl-theme">
      <?php
        $args = array(
          'post_type' => 'testimonial',
          'post_per_page' => 2
        );
      $testimonials = new WP_Query( $args );
      if( $testimonials->have_posts()  ) : ?>
        <?php while( $testimonials-> have_posts() ) : $testimonials->the_post() ?>
    <div class="item">
      <div class="testmonial-sep-wrapper">
       <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-12">
           <!-- <img src="images/author3.jpg" alt="" style="height: 55px; width: 55px;"> -->
           <?php the_post_thumbnail( 'thumbnail' , array('style' => 'height: 55px' , 'width: 55px' )) ?>
         </div>
         <div class="col-lg-10 col-md-10 col-sm-12">
           <h1><?php the_title(); ?></h1>
           <i><?php the_content(); ?> </i>
         </div>

       </div>

      </div>

    </div>
    <?php endwhile; ?>
          <?php endif; ?>
  
</div>
    </div>
  </div>
</section>


<section class="news-wraper">
  <div class="container">
     <div class="heading-wrapper text-center">
       <h1>SUBSCRIBE TO OUR NEWSLATTER</h1>
     </div>

     <div class="row">
       <div class="col-lg-8 offset-lg-2 col-12">
          <div class="input-group mb-3">
    <input type="text" class="form-control news-input" placeholder="Your Email">
    <div class="input-group-append">
      <span class="input-group-text">Subscribe</span>
    </div>
  </div>
       </div>
     </div>

  </div>
</section>

<?php get_footer() ?>