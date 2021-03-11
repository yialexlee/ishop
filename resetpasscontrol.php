<?php 
session_start();
$errors = [];
$user_id = "";
$db = mysqli_connect('localhost', 'root', '', 'ishop');

if (isset($_GET['token'])) {
$_SESSION['token']=mysqli_real_escape_string($db,$_GET['token']);
}

if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $query = "SELECT email FROM member WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);
    $to = $email;
    $subject = "Reset your password";
    $msg = "Dear customer, We have received a request to reset your password. Please click on this <a href=\"localhost/ishop/new_password.php?token=" . $token . "\">link</a> in order to reset your password. <br><br></br><b>If you did not request to change your password, please ignore this email. Please don't send this link to anyone else !!!</b>";
    $msg = wordwrap($msg,70);
    $headers = "From: Ishop"."\r\n"."MINE-Version: 1.0"."\r\n"."Content-Type: text/html; charset=utf-8";
    mail($to, $subject, $msg, $headers);
    header('location: pending.php?email=' . $email);
  }
}
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE member SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($db, $sql);
      header('location: index.php');
    }
  }
}
?>