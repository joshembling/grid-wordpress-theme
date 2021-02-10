<?php get_header(); ?>

<?php $illustration = get_field('illustration_images'); ?>

<section id="illustration" class="wrap">
  <div class="grid mx-1">
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_1']; ?>');">
      <a href="<?php echo $illustration['image_1']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_1_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_1_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_1_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_2']; ?>');">
      <a href="<?php echo $illustration['image_2']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_2_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_2_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_2_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_3']; ?>');">
      <a href="<?php echo $illustration['image_3']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_3_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_3_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_3_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_4']; ?>');">
      <a href="<?php echo $illustration['image_4']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_4_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_4_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_4_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_5']; ?>');">
      <a href="<?php echo $illustration['image_5']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_5_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_5_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_5_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_6']; ?>');">
      <a href="<?php echo $illustration['image_6']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_6_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_6_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_6_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_7']; ?>');">
      <a href="<?php echo $illustration['image_7']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_7_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_7_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_7_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_8']; ?>');">
      <a href="<?php echo $illustration['image_8']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_8_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_8_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_8_title']; ?></h4>
        </div>
      </a>
    </div>
    <div class="item" data-aos="fade-up" data-aos-offset="200" data-aos-once="true" style="background-image: url('<?php echo $illustration['image_9']; ?>');">
      <a href="<?php echo $illustration['image_9']; ?>" data-toggle="lightbox" data-title="<?php echo $illustration['image_9_title']; ?>" data-gallery="Illustrations" data-footer="<?php echo $illustration['image_9_description']; ?>">
        <div class="img-info-caption">
          <h4><?php echo $illustration['image_9_title']; ?></h4>
        </div>
      </a>
    </div>

  </div>
</section>


<section id="contact" class="pb-4 my-4">
  <div class="container" data-aos="fade-left" data-aos-once="true" data-aos-offset="200">
    <h3>CONTACT</h3>
    <?php echo do_shortcode("[wpforms id='63']"); ?>
  </div>
</section>

<?php get_footer(); ?>