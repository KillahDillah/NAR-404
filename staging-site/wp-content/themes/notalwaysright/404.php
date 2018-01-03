<!-- <script src="https://use.fontawesome.com/4f2a992fcf.js"></script> -->

<?php
/**
 * Template Name: 404 temp
 * Description: 404 pages (Not Found)
 */
?>

<?php get_header(); ?>

  <div class="post">
    <div class="temp1" style="margin:auto;">
    <!-- <a href="notalwaysright.com/popular/">Home > </a> -->
      <h1 class="storytitle" ><?php _e('404 Error - File not found'); ?></h1>

      <div class="post_header" id="error">
        <p style="color: #555; margin-bottom: 0px">This is somewhat</p>
        <p style="margin-left: 2px;
    margin-right: 2px; margin-bottom: 0px"> | embarrassing |  </p>
        
        <div id="clockbox" style="padding:0px 2px">
          <?php echo current_time('F j, Y @ G:i:s'); ?>
        <script type="text/javascript"> {

          // tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
          tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","Dec");

          function GetClock(){
          var d=new Date();
          // var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
          var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
          var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
          if(nmin<=9) nmin="0"+nmin
          if(nsec<=9) nsec="0"+nsec;

          document.getElementById('clockbox').innerHTML=" "+tmonth[nmonth]+" "+ndate+", "+nyear+" @ "+nhour+":"+nmin+":"+nsec+"";
          }

          window.onload=function(){
          GetClock();
          setInterval(GetClock,1000);
          }
      }
        </script>
        </div>  
      </div>
      <div class="storycontent">
        <span style="margin: 0px;"> 
        <?php
        $adminemail = get_option('admin_email'); #the administrator email address, according to wordpress
        $website = get_bloginfo('url'); #gets your blog's url from wordpress
        $websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

          if (!isset($_SERVER['HTTP_REFERER'])) {
            #if URL does not exist in server.

            #politely blames the user for all the problems they caused
                echo "<i>Clearly, things are </i><b style='color:#c65555'>NOT</b><b> ALWAYS RIGHT</b><i> around here!</i>";
                echo "<span id='expectations'> Lower your expectations and you'll never be dissapointed.</span>";
                // echo '<p><b>NAR:</b> "You got here because something went wrong."</p> '; 
                // echo '<p><b>You:</b> "I\'m always right!"</p>';
                #starts assembling an output paragraph
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
        </span>
      </div><!-- .storycontent -->  
    
    <p><?php echo $casemessage; ?></p>
    <div class="post_divider"></div>
    <div id="center-center">
      <p style="text-align: center;">Try searching for something different, exploring the story categories above, or visiting our most recent posts below.</p>
      <p style="text-align: center;"></p>
      
    </div> <!--center-center -->
    </div><!-- .temp1 -->
  </div> <!-- unlabeled -->
  
<div>
  <?php dynamic_sidebar('sidebar-2') ; ?>
  <!-- wp-includes widget class-wp-widget-recent-posts -->
</div>     
<?php get_footer(); ?>


