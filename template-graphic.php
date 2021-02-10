<?php

/* 
Template Name: Graphic
*/

?>

<?php get_header('graphic'); ?>

<?php $graphics = get_field('graphic_design'); ?>

<section id="graphic" class="wrap">
  <div class="grid-g mx-1">

    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_1']; ?>');">
      <a href="<?php echo $graphics['image_1']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_1']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_1']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_1']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_2']; ?>');">
      <a href="<?php echo $graphics['image_2']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_2']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_2']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_2']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_3']; ?>');">
      <a href="<?php echo $graphics['image_3']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_3']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_3']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_3']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_4']; ?>');">
      <a href="<?php echo $graphics['image_4']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_4']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_4']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_4']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_5']; ?>');">
      <a href="<?php echo $graphics['image_5']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_5']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_5']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_5']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_6']; ?>');">
      <a href="<?php echo $graphics['image_6']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_6']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_6']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_6']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_7']; ?>');">
      <a href="<?php echo $graphics['image_7']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_7']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_7']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_7']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item-g" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $graphics['image_8']; ?>');">
      <a href="<?php echo $graphics['image_8']; ?>" data-toggle="lightbox" data-title="<?php echo $graphics['image_title_8']; ?>" data-gallery="Graphics" data-footer="<?php echo $graphics['image_description_8']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $graphics['image_title_8']; ?></h4>
        </div>
      </a>
    </div>
  </div>
</section>


<section id="contact" class="pb-4 mb-4">
  <div class="container" data-aos="fade-left" data-aos-once="true" data-aos-offset="200">
    <h3>CONTACT</h3>
    <?php echo do_shortcode("[wpforms id='63']"); ?>
  </div>
</section>

<?php get_footer(); ?>