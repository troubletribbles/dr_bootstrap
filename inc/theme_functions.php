<?php
function slides() {

  $labels = array(
    'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Slides', 'text_domain' ),
    'name_admin_bar'        => __( 'Slides', 'text_domain' ),
    'archives'              => __( 'Slide Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Slide:', 'text_domain' ),
    'all_items'             => __( 'All Slide', 'text_domain' ),
    'add_new_item'          => __( 'Add New Slide', 'text_domain' ),
    'add_new'               => __( 'Add New Slide', 'text_domain' ),
    'new_item'              => __( 'New Slide', 'text_domain' ),
    'edit_item'             => __( 'Edit Slide', 'text_domain' ),
    'update_item'           => __( 'Update Slide', 'text_domain' ),
    'view_item'             => __( 'View Slide', 'text_domain' ),
    'search_items'          => __( 'Search Slide', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into slide', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this slide', 'text_domain' ),
    'items_list'            => __( 'Items slide', 'text_domain' ),
    'items_list_navigation' => __( 'Items slide navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter slide list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Slide', 'text_domain' ),
    'description'           => __( 'This post type is used to create slides for pages', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'slides', $args );

}
add_action( 'init', 'slides', 0 );




function news_and_events_section(){
	?>

      <section class="container">
            	<div class="row">
                  <div class="col-md-6">


                      <div class="title">
                          <h2 class='eyebrow eng'>News</h2>
                          <a class="brackets" href="<?php echo get_permalink(459); ?>">More News</a>
                      </div>

                      <?php
                         $args=array(
                            'post_type' => "press_release",
                            'post_status' => 'publish',
                            'posts_per_page' => 3
                          );
                          $press_releases = new WP_Query($args);
                          $detailed_list_args = array();
                          if ( $press_releases->have_posts() ):
                              while ( $press_releases->have_posts() ) : $press_releases->the_post();
                                  $detailed_list_args[] = new DetailedListItem(
                                      get_the_title(),
                                      get_field("short_description"),
                                      get_permalink(),
                                      array(
                                        "tag" => get_field("date_published")
                                      )
                                  );
                              endwhile;
                          
                              $Detailed_List = new DetailedList($detailed_list_args);
                              $Detailed_List->display();

                              wp_reset_postdata();
                          endif;
                      ?>
                  </div>

                <div class="col-md-6">
                    <div class="title">
                        <h2 class='eyebrow eng'>Events</h2>
                        <a class="brackets" href="<?php echo get_permalink(459); ?>">More Events</a>
                    </div>

                    <?php
                        $args = array(
                          'post_type' => "events",
                          'post_status' => 'publish',
                          'posts_per_page' => 3
                        );
                        $press_releases = new WP_Query($args);

                        $detailed_list_args = array();
                        if ( $press_releases->have_posts() ):
                            while ( $press_releases->have_posts() ) : $press_releases->the_post();

                                $tag = ucwords(get_field("event_type"))." | ".get_field("event_start_date");
                                $tag .= ( get_field("multiday_event") )?" - ".get_field("event_end_date"):"";

                                $detailed_list_args[] = new DetailedListItem(
                                    get_the_title(),
                                    get_field("event_description"),
                                    get_permalink(),
                                    array(
                                      "tag" => $tag,
                                      "limit_description" => true
                                    )
                                );
                            endwhile;
                        
                            $Detailed_List = new DetailedList($detailed_list_args);
                            $Detailed_List->display();

  							wp_reset_postdata();
                        endif;
                      ?>
                   <div class='clear'></div>
                </div>
            </div>
        </section> <!-- End of news section --> 



	<?php
}


function clients_section(){
?>

 <div class="green-bg">
            <div class="container ">
                <section id="clients">
        	<div class="wrapper">
                <div class="row">
            	<div class="title col-md-1">
                    <h2><?php _e('Clients', 'digital-river'); ?></h2>    </div>
                    <div class="col-md-2">
                  <a href="<?php echo site_url('/clients/' ,'http'); ?>">[ <?php _e('More Clients','digital-river'); ?> ]</a>
            
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div id="owl-demo" class="clients-wrapper" style="max-height:115px;">

                        <?php foreach(get_field('client_logos') as $client_logo) : ?>
                            <div class='item'>
                                <img class="owl-lazy" data-src="<?php echo $client_logo['logo']; ?>" />
                            </div>
                        <?php endforeach; ?>

                 </div> <!-- End of clients-wrapper -->
                    </div></div>
                       </div>
        </section> <!-- End of clients section -->

            </div>
     </div><!-- End of wrapper -->

<?php
}



function why_work_section(){
?>

  <div id="main_content" class="gray-bg">
        <div class="container">
        <?php if(ICL_LANGUAGE_CODE == "en"): ?>

            <section id="core-bkgd" >
                <div class="container" >
                    <div class="row centering">
                        <div class="col-md-3 col-sm-12 solution-copy">
                            <?php while(have_rows('why_work_section') ) : the_row(); ?>
                                <h1>We&nbsp;drive&nbsp;growth.<br>It’s&nbsp;that&nbsp;simple.</h1>
                                <p><?php the_sub_field('description'); ?></p>
                                <a class="button" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_label'); ?></a>
                            <?php endwhile; ?>
                        </div>
                        <?php while(have_rows('capabilities') ) : the_row(); ?>
                            <div class="col-md-3 col-sm-4 solution">

                                <div class="box clearfix <?php the_sub_field('custom_css_classes'); ?>">
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <h2>
                                        <?php the_sub_field('title'); ?>
                                     <svg class="arrow" viewBox="0 0 151 137.4">
                                        <use class=" icon" x="0" y="0" xlink:href="#arrow" />
                                    </svg>
                                    </h2>
                                    <a class="learn-more" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?>  ›</a>
                                    <div class="minp">
                                        <p><?php echo get_sub_field('description'); ?></p>
                                    </div>
                                    <div class="icon-wrapper">
                                      <svg viewBox="0 0 151 137.4">
                                        <use class="<?php the_sub_field('custom_css_classes'); ?> icon" x="0" y="0" xlink:href="#<?php the_sub_field('custom_css_classes'); ?>" />
                                    </svg>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <?php endwhile; ?>
                        <div class="clear"></div>
                    </div> <!-- End of wrapper -->
                </div> <!-- End of wrapper -->
            </section> <!-- End of why work section -->

        <?php else: ?>

            <section id="why-work">
                <div class="blue-bg"></div>
                <div class="wrapper">
                    <div class="left_col">
                        <?php while(have_rows('why_work_section') ) : the_row(); ?>
                            <h1 class='white eng'><?php the_sub_field('header'); ?></h1>
                            <p class='white'><?php the_sub_field('description'); ?></p>
                            <a class="button opposite" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_label'); ?></a>
                        <?php endwhile; ?>
                    </div>

                    <div class="right_col">
                        <?php while(have_rows('capabilities') ) : the_row(); ?>
                                <div class="icon <?php the_sub_field('custom_css_classes'); ?> ">
                                <div class="icon-wrapper">
                                    <?php $icon = get_sub_field('icon'); ?>
                                    <img alt='<?php echo $icon['alt']; ?>' src=" <?php echo $icon['url']; ?> " />
                                </div>
                                <div class="title">
                                    <h2 class='eng'><?php the_sub_field('title'); ?></h2>
                                    <a href=" <?php the_sub_field('link'); ?>">[ <?php the_sub_field('link_title'); ?> ]</a>
                                </div>
                                <p> <?php _e(get_sub_field('description'),'digital-river'); ?> </p>
                            </div>
                        <?php endwhile; ?>
                    </div> <!-- End of right_col -->
                    <div class="clear"></div>
                </div> <!-- End of wrapper -->
            </section> <!-- End of why work section -->

        <?php endif; ?>

        </div>
</div> <!-- End of Main Contain -->



<?php
}


function hero_banner_section(){
	?>
	<div class="hero-wrapper ">
	   <div class="hero flexslider owl-carousel owl-theme">
	        <?php foreach(get_field('slides') as $key => $slide) : ?>
	            <div class='item'>
	               <div class="container">
	                  <div class="row">
	                    <section class="col-md-10 slide">
	                       <?php
	                        $style = "";
	                        $buttonStyle = "";
	                        if($slide['text-align'] == "right"){
	                            $style = " right: 0px; text-align: right; ";
	                            $buttonStyle = " float: right;";
	                        }
	                        ?>
	                        <section class="header" style=" color: <?php echo $slide['headingcolor']; ?>; <?php echo $style; ?> ">
	                            <?php 
	                            if(count($slide['heading']) > 0){
	                                foreach ($slide['heading'] as $key => $line) { ?>
	                                <?php if($line['new_line']) echo "<br>"; ?>
	                                  <span style='<?php echo ($line['font'] == 'light')?'font-family: "DIN Next W01 Light";':'font-family: "DIN 1451 W01 Engschrift",sans-serif;'; ?>' >
	                                    <?php echo $line['line']; ?>
	                                  </span>
	                                <?php } ?>
	                            <?php } ?>
	                        </section>
	                      <?php if($slide['button_display'][0] == "Add" || $slide['button_display'] == "Add") : ?>
	                        <section class="link" style=" background-color: <?php echo $slide['button_color']; ?>; <?php echo $buttonStyle; ?>" ><?php echo $slide['link_title']; ?></section>
	                      <?php endif ?>
	                    </section>
	                  </div>
	                </div>
						      <a <?php if($slide['new_tab']) echo 'target="_self"'; ?> href=" <?php echo ($slide['external_link'])?: $slide['link']; ?>" class="slide_link">
	                  <?php if ($slide['background_image']) : ?>
	                      <img id="<?php if ($count == 0) {echo 'firstImage';} ?>" src="<?php echo $slide['background_image']; ?>" class="not-mobile slide_image">
	                      <img id="<?php if ($count == 0) {echo 'firstMobileImage';} ?>" src="<?php echo $slide['mobile_background_image']; ?>"  class="mobile slide_image">
	                  <?php endif; ?>
	                </a>
	              </div>
	        <?php endforeach; ?>
	    </div>
	</div>
	<?php
}


function get_recent_resources(){
    $args = array(
      'post_type' => "marketing_material",
      'post_status' => 'publish',
      'posts_per_page' => 10
    );
    $resources = new WP_Query($args);
	$detailed_list_args = array();
	if ( $resources->have_posts() ):
	  while ( $resources->have_posts() ) : $resources->the_post();
	      $detailed_list_args[] = new DetailedListItem(
	          get_the_title(),
	          get_field("description"),
	          get_permalink(),
	          array(
	            "tag" => get_field("content_type")
	          )
	      );
	  endwhile;

	  $Detailed_List = new DetailedList($detailed_list_args);
	  $Detailed_List->slider();

	  wp_reset_postdata();
	endif;
}


/**
 * Displays the top section of each header
 *
 * @param int $slide_id
 *
 * @todo create acf
 */
add_action('slide_heading','slide_header',10,1); 
function slide_header($slide_id){

}


/**
 * Displays a detailed master header 
 *
 * @todo define the background documentation
 * @todo do button html
 * @todo create proper fields in acf
 * @todo replace arguments with acf
 */
function advanced_master_header($sub_heading, $supporting_copy){
  echo '<div class="top custom custom-payments slide">';
    echo '<div class="container">';
      echo '<div class="row">';
        echo '<div class="col-lg-4 col-md-5 col-sm-6">';
          the_title('<h1 class="eyebrow option no-margin">','</h1>');
          // echo '<h2>'. get_field('subtitle') .'</h2>';
          echo '<h2>'. $sub_heading .'</h2>';
          // if(get_field('supporting_copy')):
          //   echo '<p>' . get_field('supporting_copy') .'</p>';
          // endif;       
          if($supporting_copy):
            echo '<p>' . $supporting_copy .'</p>';
          endif;
        echo '</div>';
        echo '<div class="clear"></div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
}

/**
 * Displays Boxes in a 2 column layout
 * 
 * @todo create acf fields for this
 */
function boxes($headline, $boxes){
  echo '<div class="slide">';
      echo '<div class="container">';
          // do_action('slide_heading', $slide_id);
          slide_header($headline);
          foreach ($boxes as $key => $box):
              if($key % 2 == 0):
                echo '<div class="row">';
              endif;
                  echo '<div class="box col-sm-6" style="background-image:url("' . $box['background_image'] . '");">';
                      echo '<h3>' . $box['title'] . '</h3>';
                  echo '</div>';
              if($key % 2 != 0 || (count($boxes) == ($key+1))):
                echo '</div>';
              endif;
          endforeach;
      echo '</div>';
  echo '</div>';
}


/**
 * Displays tags
 * 
 * @todo create acf fields for this
 */
function display_tags($headline, $copy, $tags){
  echo '<div class="slide">';
      echo '<div class="container">';
         // do_action('slide_heading', $slide_id);
          slide_header($headline, $copy);
          echo '<div class="row">';
              foreach($tags as $key => $tag):
                  if($key % 2 == 0):
                      echo "<div class='row'>";
                  endif;

                  if(count($tags) == ($key+1)):
                      echo '<div class="col-md-offset-3 col-md-6">';        
                  else:
                      echo '<div class="col-md-6">';        
                  endif;
                      echo '<a class="btn btn-tertiary option thin-border margin-bottom display-block tag" href="' . $tag['link'] . '" target="' .  '">' . $tag['title'] . '</a>';
                  echo '</div>';
                  if($key % 2 != 0):
                      echo "</div>";
                  endif;
              endforeach;
          echo '</div>';
      echo '</div>';
  echo '</div>';
}



function create_grid($headline, $grid){
  ?>

<script>

jQuery(document).ready(function($){
  var grid = $('.interactive-grid .row');
  grid.packery({
    // options
    itemSelector: '.grid-item-wrapper',
    gutter: 0
  });

  $(document).on("click", function(){
      console.log("fasd");
      grid.packery();
  });
});
</script>
  <?php
    echo '<div class="container interactive-grid">';
        echo '<div class="row">';
        foreach ($grid as $key => $grid_item):
            echo '<div class=" ' . $grid_item['width'] . ' grid-item-wrapper">';
                echo '<div class="grid-item option ' . $grid_item['height'] . ' ">' . $grid_item['title'] . '</div>';
            echo '</div>';
        endforeach;
        echo '</div>';
    echo '</div>';
}