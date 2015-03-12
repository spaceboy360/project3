<?php get_header();
/*
Template Name: Email Page
*/
?>


<div class="row white">

	<div class="container down1">
	
	 <?php
// mail('info@trevorgreenleaf.com', 'deal', 'mess');
ini_set('display_errors', 'On');
// process the form
// if form was submited
if(isset($_POST['submit']))
{
  
  if( 
    !empty($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email']) &&
    isset($_POST['subject']) &&
    isset($_POST['message']))
  {
    // set var
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    
    $admin_email = 'design@gregorykustanovich.com';
    // prep the message
    $new_message = '';
    $new_message .= '<p>NAME: '.$first_name.' '.$last_name.'</p>';
    $new_message .= '<p>EMAIL:'.$email.'</p>';
    $new_message .= '<p>MESSAGE:'.$message.'</p>';
    // set config for mail and send
    // http://www.w3schools.com/php/func_mail_mail.asp
    $success = mail($admin_email, $subject, $new_message);
    if($success == 1){
      // return success
      echo '<div class="alert alert-success">Thanks for contacting us '.$first_name.'. Will be in touch shortly!</div>';
    } else {
      echo 'Error';
    }
  } else {
    // something happned
    echo '<div class="alert alert-danger">Please fill out all fields.</div>';
  }
}
?>


  



  <div class="col-xs-12 black whitetext bordermail">
    <h2>Email Us</h2>
    <form role="form" action="" method="POST">
      
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
      </div>
      
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary uppy2 round" name="submit">Submit</button>
    </form>
  </div>

 	</div>

</div>
  


<?php get_footer(); ?>