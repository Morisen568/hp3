  <?php get_header('single'); ?>

  <main>

    <section class="single">

<?php ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="single_top">
        <img src="<?php the_post_thumbnail_url('large'); ?>">
    </div>
    <?php endif; ?>
    <?php ?>

    <?php ?>
    <div class="single_title"><?php the_title(); ?></div>
    <?php ?>

    <?php ?>
    <div class="single_date"><?php the_time('Y.m.d'); ?>
    <?php ?>

    <?php ?>
    <div class="single_txt">
      <?php echo the_content(); ?>
    </div>
    <?php ?>

<?php endwhile; endif; ?>
<?php ?>

    </section>

  <section class="paper">
    <div class="paper_preview">
      <div class="paper_box">
        <?php previous_post_link('%link <', 'preview'); ?>
      </div>
      </div>
      <div class="paper_back">
      <a href="https://kisetu4.site/blog"><span>BLOG</span></a>
      </div>
      <div class="paper_next">
        <div class="paper_box">
        <?php next_post_link('> %link', 'next'); ?>
        </div>
      </div>
  </section>
  </main>
  <?php get_footer(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>

  <script src="../scripts/other.js"></script>
  <script src="../scripts/slick.js"></script>
  <script src="../scripts/main.js"></script>
</body>

</html>