
<footer class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 footer-sep-sec">
      <?php
        if(is_active_sidebar('footer-1')){
        dynamic_sidebar('footer-1');
        }
	    ?>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 footer-sep-sec footer-midd text-center">

        <?php
        if(is_active_sidebar('footer-2')){
        dynamic_sidebar('footer-2');
        }
	    ?>

      </div>

      <div class="col-lg-4 col-md-12 col-sm-12 footer-sep-sec">
      <?php
        if(is_active_sidebar('footer-3')){
        dynamic_sidebar('footer-3');
        }
	    ?>
        <div class="container">
          <div class="row">
       <div class="col-lg-12 col-12">
          <div class="input-group mb-3">
    <input type="text" class="form-control news-input" placeholder="Your Email">
        <div class="input-group-append">
        <span class="input-group-text">Subscribe</span>
        </div>
  </div>    
       </div>
     </div>
        </div>
      </div>
    </div>

    <div class="mt-5 text-center foter-copy">
      <p>Copyright @2020 Made with Love Sujata Tarale</p>
    </div>

    <div class="scrolltop float-right">
      <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

    <a href="#top" class="to-top"><i class="fa fa-arrow-up"></i></a>

  </div>
</footer>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src= "<?php echo get_template_directory_uri() ?>/js/jquery.js"> </script>

 <script>

      mybutton = document.getElementById("myBtn");

      window.onscroll = Function() {scrollFunction()};

      Function scrollFunction() {
        if (document.body.scrolltop > 20 || document.documentElement.scrolltop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }

      }

      Function topFunction() {
        document.body.scrolltop = 0;
        document.documentElement.scrolltop = 0;
      }
   </script>

  <script>
    $(document).ready(Function(){
      var offset = 250;
      var duration = 500;

      $(window).scroll(Function(){
        if($(this).scrolltop() > offset){
          $('.to-top').fadeIn(duration);
        }else{
          $('.to-top').fadeOut(duration);
        }
      });
      $('.to-top').click(Function(){
        $('.body').animate({scrolltop: 0})
      })
    });
  </script>   
<?php wp_footer(); ?>
</body>
</html>