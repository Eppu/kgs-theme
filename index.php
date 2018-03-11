<?php get_header();?>

<div class="container">
      <div class="row">
        <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'slogan'
              );
              $the_query = new WP_Query ( $args );
        ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                  $the_query->the_post(); ?>
        <div class="col-md-offset-2 col-md-8">
          <h1><?php the_title()?></h1>
          <p class="lead"><?php the_content()?></p>
        </div>
      <?php endwhile;
      endif; ?>
      </div>
    </div>
  </section>

  <!-- slogan -->
  <section class="slogan">
    <div class="container">
      <div class="row">
        <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'story'
              );
              $the_query = new WP_Query ( $args );
        ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                  $the_query->the_post(); ?>

                  <div class="col-md-12">
                    <h1><?php the_excerpt()?></h1>
                  </div>
                <?php endwhile;
                endif; ?>
      </div>
    </div>
  </section>

  <!-- details -->
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
    					  <!-- image carousel -->
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                 ?>

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
    					  <!-- carousel buttons -->
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

  <!-- features -->
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


  <!-- Get in touch -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'contact'
              );
              $the_query = new WP_Query ( $args );
        ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>
        <div class="col-md-12">
          <h2><?php the_title() ?></h2>
          <br />
          <p><?php the_content() ?></p>
        </div>
      <?php endwhile;
      endif; ?>

      </div>
    </div>

<?php get_footer();?>