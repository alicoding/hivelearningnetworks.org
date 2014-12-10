  <?php
  /*
  Template Name: "Resources - Running a Hive Event" page
  */

  get_header(); ?>

    <div class="general-banner" id="resources-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>Learn more about the Hive Learning Networks model.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container resources">
      <div class="row">
        <div class="col-md-8" id="main">
          <?php
              if ( have_posts() ) : while( have_posts() ) : the_post(); the_content(); endwhile; endif;
          ?>
          <section class="row">
            <div class="col-md-12">
              <h3>How to Host a Hive Pop-Up</h3>
              <p>Use this <a href="https://webmaker.makes.org/thimble/host-a-hive-popup ">Thimble page</a> as-is, or remix it by customizing the  photos and text to explain details about your local Hive pop-up event.</p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Sample Event Invitation</h3>
              <p>Here’s what an <a href="https://www.eventbrite.ca/e/hive-vancouver-learning-pop-up-tickets-13160775233">event invitation</a> can look like. Feel free to copy any text you find useful.</p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Logos and Graphics</h3>
              <p><a href="/resources">Download logos and graphics</a></p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Brand Guidelines</h3>
              <p><a href="<?php echo get_template_directory_uri(); ?>/resources/Hive_2014_BrandGuidelines_ForReview_10_5.pdf">View Hive brand guidelines</a></p>
            </div>
          </section>
        </div>
        <div class="col-md-4" id="sidebar">
          <?php get_template_part( 'resources-sidebar' ); ?>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>