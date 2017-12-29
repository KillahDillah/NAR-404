<?php
/**
 * Template Name: 404 temp
 * Description: 404 pages (Not Found)
 */
?>

<?php get_header(); ?>

  <!-- <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main"> -->
      <div class="post" id="post-<?php the_ID(); ?>">
      <!-- <div class="page-header"> -->
        <h1 class="storytitle errortitle" ><?php _e('404 - File not found'); ?></h1>
        
      <!-- </header> -->

      <!-- <div class="page-wrapper"> -->
        <div class="post_header">
          <p>change</p>  
          <!--  -->
          <!-- create file not found and set error404 as template -->
          <!-- <p><?php _e( 'This is somewhat embarrassing, isn’t it?'); ?></p> -->

        </div>
        <div class="storycontent">


          <p> 
          <?php

          $adminemail = get_option('admin_email'); #the administrator email address, according to wordpress
          $website = get_bloginfo('url'); #gets your blog's url from wordpress
          $websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

            if (!isset($_SERVER['HTTP_REFERER'])) {
              #if URL does not exist in server.

              #politely blames the user for all the problems they caused
                  echo "Things are NOT ALWAYS RIGHT around here! "; #starts assembling an output paragraph
            // $casemessage = "Things are NOT ALWAYS RIGHT around here!";
            } elseif (isset($_SERVER['HTTP_REFERER'])) {
              #if URL is in system but they can't view it.

              #this will help the user find what they want, and email me of a bad link
            // echo "clicked a link to"; #now the message says You clicked a link to...
                  #setup a message to be sent to me
            $failuremess = "A user tried to go to $website"
                  .$_SERVER['REQUEST_URI']." and received a 404 (page not found) error. ";
            $failuremess .= "It wasn't their fault, so try fixing it.  
                  They came from ".$_SERVER['HTTP_REFERER'];
            mail($adminemail, "Bad Link To ".$_SERVER['REQUEST_URI'],
                  $failuremess, "From: $websitename <noreply@$website>"); #email you about problem
            $casemessage = "An administrator has been emailed 
                  about this problem.";#set a friendly message
            }
          ; ?> 
          <p><?php echo $casemessage; ?></p>
          <p>Try searching for something different below.</p>
            
          </p>

          <?php get_search_form(); ?>
          <p>or return home.</p>
          
        </div><!-- .page-content -->
      <!-- </div> --><!-- .page-wrapper -->

    </div><!-- #content -->
  <!-- </div> --><!-- #primary -->


