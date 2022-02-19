<!-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
  <title>HP3</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="">
  <link rel="apple-touch-icon" sizes="180×180" href="">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Noto+Serif+JP:wght@400;500;600;700;900&family=Pinyon+Script&display=swap"
    rel="stylesheet">

</head>

<body> -->

<?php get_header(contact); ?>

  <main>



    <section class="contact">
    	<?php echo apply_filters('the_content', '[contact-form-7 id="20" title="contact"]'); ?>
      <!-- <div class="contact_all">
      <h2 class="contact_title">Contact</h2>
      <form action="mail.php" class="contact_form" id="form" method="POST">
        <div class="contact_box">
          <label for="name" class="contact_form_ttl">Name</label>
          <input type="text" class="contact_form_box2" name="" required="required" placeholder="">
        </div>
        <div class="contact_box">
          <label for="email" class="contact_form_ttl">E-mail</label>
          <input type="text" class="contact_form_box2" name="" required="required" placeholder="">
        </div>
        <div class="contact_box">
          <label for="tel" class="contact_form_ttl">Tel</label>
          <input type="text" class="contact_form_box2" name="" required="required" placeholder="">
        </div>
        <div class="contact_box _area">
          <label for="message" class="contact_form_ttl">Message</label>
          <textarea name="message" class="contact_txtarea" id="message" cols="30" rows="10" required="required" placeholder=""></textarea>
        </div>
          <div class="contact_box2">
            <button class="contact_btn" type="submit">Send</button>
          </div>
      </form>
    </div> -->
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