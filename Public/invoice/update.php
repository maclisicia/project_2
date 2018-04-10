<?php
require_once("../../private/initialize.php");
//require_login();
$page_title = "Update Page";
include(SHARED_PATH . '/public_header.php');

$userid = $_GET['userid'] ?? false;
$user = User::find_by_id($userid);

$userid = $user->userid;
$userName = $user->userName;
$password = $user->password;
$firstName = $user->firstName;

if(is_post_request()){

  $userid = $_POST['userid'];
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $firstName = $_POST['firstName'];

    $args = [];
    $args['userid'] = $userid;
    $args['userName'] = $userName;
    $args['password'] = $password;
    $args['firstName'] = $firstName;


    //instantiate a new object and use the merge attributes and save to update.
    $user = new User;
    $user->merge_attributes($args);
    $user->update($userid);

    //after saving redirect back to home page.
    header('Location: index.php');

}

?>

 <section id="boxes">
      <div class="container">
          <form action="update.php" method="post">
            <fieldset>
              <legend>Updated User Information</legend>
              <input name="userid" type="hidden" value="<?php echo $userid;?>">
              <p>Name: <input type="text" name="userName" value="<?php echo $userName; ?>"></p>
              <p>Password: <input type="text" name="password" value="<?php echo $password; ?>"></p>
              <p>First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>"></p>
              <button type="submit" value="Submit">Submit</button>
              <button type="button" onclick="location='index.php'">Cancel Update</button>
            </fieldset>
          </form>

      </div>
   </section>
<?php


include(SHARED_PATH . '/public_footer.php');
?>
