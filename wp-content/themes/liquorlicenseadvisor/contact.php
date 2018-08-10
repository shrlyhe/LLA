<?php 

/** Template Name: Contact Page
 * description: Contact page for LLA
 */


//response generation function

$response = "";

  //function to generate response
function my_contact_form_generate_response($type, $message){

	global $response;

	if($type == "success") $response = "<div class='success'>{$message}</div>";
	else $response = "<div class='error'>{$message}</div>";

}

  //response messages
// $not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
$subject = $_POST['message_subject'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = 2;

  //php mailer variables
// $to = get_option('admin_email');
$to = "shrlyhe@gmail.com";
// $subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
    	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    		my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
      	if(empty($name) || empty($message)){
      		my_contact_form_generate_response("error", $missing_content);
      	}
        else //ready to go!
        {
        	// $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        	$sent = wp_mail('shrlyhe@gmail.com', 'testtest', 'tttetsttt');
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
   }
 }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>
<div class="row">
	<div class="col-sm-12 office-info">
		<h3 class="blog-post-title">Office Info</h3>
		<h2> 111111 Sample St. </h2>
		<h2> Sample Sample 011111 </h2>
		<h2> (123) 456 - 789 </h2>
	</div>


	<div id="primary" class="site-content">
		<div id="content" role="main">

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="col-sm-10 office-info">
						<?php the_content(); ?>

						<style type="text/css">
							.error{
								padding: 5px 9px;
								border: 1px solid red;
								color: red;
								border-radius: 3px;
							}

							.success{
								padding: 5px 9px;
								border: 1px solid green;
								color: green;
								border-radius: 3px;
							}

							form span{
								color: red;
							}
						</style>

						<div id="respond">
							<?php echo $response; ?>
							<form action="<?php the_permalink(); ?>" method="post">
								<p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
								<p><label for="subject">Subject: <span>*</span> <br><input type="text" name="message_subject" value="<?php echo esc_attr($_POST['message_subject']); ?>"></label></p>
								<p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
								<input type="hidden" style="width: 60px;" name="message_human">
								<input type="hidden" name="submitted" value="1">
								<p><input type="submit"></p>
							</form>
						</div>


					</div><!-- .entry-content -->

		
		</div><!-- #content -->
	</div><!-- #primary -->




	

</div>
