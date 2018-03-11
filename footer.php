</section>


<!-- available -->
<section class="available">
  <div class="container">
    <div class="row">
      <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'download'
            );
            $the_query = new WP_Query ( $args );
      ?>
      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
                  $the_query->the_post(); ?>
                  <div class="col-md-12">
                    <h1><?php the_title() ?></h1>
                    <p class="lead"><?php the_content() ?></p>
                  </div>

<?php endwhile;
    endif; ?>
      <div class="col-md-12">
        <hr />
        <p class="credits">&copy; <a href="http://eetueskelinen.com">Eetu Eskelinen</a> <?php echo date("Y"); ?></p>
      </div>
    </div>
  </div>
</section>
<?php wp_footer();?>
</body>


<!-- JS references -->
<script src="<?php bloginfo("template_url");?>/js/jquery.js"></script>
<script src="<?php bloginfo("template_url");?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo("template_url");?>/js/animatescroll.js"></script>
<script src="<?php bloginfo("template_url");?>/js/scripts.js"></script>
<script src="<?php bloginfo("template_url");?>/js/retina.min.js"></script>

</html>
