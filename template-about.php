<?php

/* 
Template Name: About
*/

?>

<?php get_header('about'); ?>

<?php $about = get_field('about'); ?>

<section id="about" class="pt-5 pb-4">
  <div class="container" data-aos="fade-right" data-aos-once="false" data-aos-offset="200">
    <h3>ABOUT</h3>

    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo $about['image']; ?>" alt="" class="img-fluid p-2 d-flex align-items-center justify-content-center m-auto" width="300px">
      </div>
      <div class="col-lg-6 p-2">
        <?php echo $about['text']; ?>
      </div>
    </div>

    <?php if ($about['pdf']) : ?>
      <a href="<?php echo $about['pdf']; ?>" target="_blank" class="p-2 d-flex align-items-center justify-content-center m-auto"><button class="button-standard"><?php echo $about['pdf_text']; ?></button></a>
    <?php endif; ?>



  </div>
</section>


<section id="contact" class="pb-4 mb-4">
  <div class="container" data-aos="fade-left" data-aos-once="true" data-aos-offset="200">
    <h3>CONTACT</h3>
    <?php echo do_shortcode("[wpforms id='63']"); ?>
  </div>
</section>

<?php get_footer(); ?>