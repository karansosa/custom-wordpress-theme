<?php  

  /* Template Name: custom product page  */  

?>

<?php get_header() ?>



<div class="banner-area text-center overlay-bg-5">
        <div class="container"> 
          <div class="row">
            <div class="col"> 
              <!-- Start Banner Content -->
              <div class="banner-content">            
                <!-- Page Title -->
                <h2 class="uppercase">Latest Products</h2>
                <p class="m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              </div>
              <!-- End Banner Content -->             
            </div>
          </div>
        </div>
      </div>
    <div class="bradcumb-area">
        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Start Breadcrumb -->
              <ul class="breadcrumbs list-inline">
                <li><a href="index.html">Home</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <li class="active">Products</li>
              </ul>
              <!-- End Breadcrumb -->
            </div>
          </div>
        </div>
      </div>


      <section class="pro-section">
  <div class="container">
    <div class="pro-heading text-center">
      <h2>New Arrivals</h2>
    </div>
    <div class="row pro-row">
    <?php
        $args = array(
          'post_type' => 'productpage',
          'post_per_page' => 3
        );
      $pp = new WP_Query( $args );
      if( $pp->have_posts()  ) : ?>
        <?php while( $pp-> have_posts() ) : $pp->the_post() ?>
      <div class="col-lg-3 col-md-6 col-sm-12" >
        <div class="product-top">
        <?php the_post_thumbnail( 'large' , array('class' => 'img-fluid')) ?>
          <div class="overlay">
            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-secondary" title="Add To Wish List"><i class="fa fa-heart" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-secondary" title="Add To Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
          </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
          <h3><?php the_title() ?></h3>
          <h5>$250.00</h5>
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

<br>



<?php get_footer() ?>