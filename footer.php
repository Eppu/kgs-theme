</section>


<!-- GET IT
     ================================================== -->
<section class="get-it">
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
        <ul>
          <li><a href="#link-here">Contact</a></li>
          <li><a href="#link-here">Twitter</a></li>
          <li><a href="#link-here">Press</a></li>
          <li><a href="#link-here">Support</a></li>
          <li><a href="#link-here">Developers</a></li>
          <li><a href="#link-here">Privacy</a></li>
        </ul>
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
