<?php get_header();?>



    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <h1>Everything's easily customizable.</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          <button type="button" class="app-store"></button>
        </div>
      </div>
    </div>
  </section>


  <!-- PAYOFF
	      ================================================== -->
  <section class="payoff">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</h1>
        </div>
      </div>
    </div>
  </section>


  <!-- DETAILS
	      ================================================== -->
        <section class="detail">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div id="carousel-example-generic-2" class="carousel slide">
                <div class="carousel-inner">


                  <?php
                  			$args = array(
                  				'post_type' => 'post',
                  				'category_name' => 'details'
                  			);
                  			$the_query = new WP_Query ( $args );
                  ?>
    					  <!-- Carousel slides -->

                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                            $the_query->the_post(); ?>


                            <div class="item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
                              <div class="row">
            					      		<div class="col-sm-12 col-md-offset-1 col-md-6">
            					      			<h1><?php the_title(); ?></h1>
            					      			<p><?php the_content(); ?></p>
            					      		</div>
            					      		<div class="col-sm-12 col-md-5">
            					      			<div class="app-screenshot">
            					      				<img src=<?php the_post_thumbnail();?>
            					      			</div>
            					      		</div>
            					      	</div>
                              </div>
                          <?php endwhile;
                          endif; ?>
                        </div>
                <?php rewind_posts(); ?>
    					  <!-- Carousel Indicators -->
    					  <ol class="carousel-indicators">
                  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						             <li data-target="#carousel-example-generic-2"data-slide-to="<?php echo $the_query->current_post; ?>"
						    class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
    					  </ol>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>


  <!-- FEATURES ================================================== -->
  <section class="features">
    <div class="container">
      <div class="row">
        <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'features'
              );
              $the_query = new WP_Query ( $args );
        ?>

        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>

        <div class="col-md-4">
          <div class="circle" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>)"></div>
          <h2><?php the_title() ?></h2>
          <p><?php the_content() ?></p>
        </div>
      <?php endwhile;
      endif; ?>
      <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>


  <!-- SOCIAL
	     ================================================== -->
  <section class="social">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Connect with us</h2>
          <br />
          <p>Filler text here!</p>
          <!-- <a class="icon-facebook"></a>
          <a class="icon-twitter"></a>
          <a class="icon-google"></a>
          <a class="icon-instagram"></a>
          <a class="icon-pinterest"></a> -->
        </div>
      </div>
    </div>

<?php get_footer();?>