<?php
// DO NOT CHANGE THIS PAGE!!!

require_once("../../private/initialize.php");
//require_login();
$page_title = "Delete Page";
include(SHARED_PATH . '/public_header.php');

$userid = $_GET['userid'];
$user = User::find_by_id($userid);
$userName = $user->userName;

if(is_post_request()) {

  $userid = $_POST['userid'];
  $args = [];
  $args['userid'] = $userid;
  $user = new User($args);
  $user->delete($userid);

  header('Location: index.php');
}
?>

 <section id="boxes">
      <div class="container">
          <form action="delete.php" method="post">
            <fieldset>
              <legend>Are you sure you want to delete the blog <?php echo $userName; ?></legend>
              <input name="userid" type="hidden" value="<?php echo $userid;?>">
              <button type="submit" value="Submit">Yes, Please Delete</button>
              <button type="button" onclick="location='index.php'">No, Don't Delete</button>
            </fieldset>
          </form>

         <br>
      </div>
   </section>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
