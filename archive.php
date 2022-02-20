<?php get_header(); ?>
  <main>

    <section class="blog">
      <h2 class="blog_title">Blog</h2>
      <!-- <div class="blog_item">
      <div class="aaa"></div>
      <div class="blog_left">
        <a href="../html/single.html" class="blog_ttl">April 2021<br><span class="blog_txt">春です</span></a>
      </div>
      <div class="blog_right">
        <a href="../html/single.html"><img  src="<?php echo get_template_directory_uri();?>/images/other/flower1.jpg"></a>
      </div>
    </div> -->
    <?php if (have_posts()) :
  while (have_posts()) :
    the_post(); ?>
          <div class="blog_item">
      <div class="aaa"></div>
      <div class="blog_left">
        <a href="<?php the_permalink(); ?>" class="blog_ttl">April 2021<br><span class="blog_txt">春です</span></a>
      </div>
      <div class="blog_right">
        <a href="<?php the_permalink(); ?>"><img  src="<?php echo get_template_directory_uri();?>/images/other/flower1.jpg"></a>
      </div>
    </div>
    <?php endwhile; endif; ?>
    </section>
  </main>

  <?php get_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    
    <script src="../scripts/other.js"></script>
    <script src="../scripts/slick.js"></script>
    <script src="../scripts/main.js"></script>
    </body>
    
    </html>