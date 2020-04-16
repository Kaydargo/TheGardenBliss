<?php require 'includes/database.php';?>
<?php if (isset($_POST['reset-password'])) {
  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $getEmail = "SELECT email FROM users WHERE email = :email";
  $statement = $conn->prepare($getEmail);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);

  if (empty($email)) {
    $_SESSION['errMsg'] = "Invalid email address";
  }else if($user < 0) {
    $_SESSION['errMsg'] = "Invalid user email ";
  }
  else {
  $token = bin2hex(random_bytes(50));

    // store token in the password-reset database table against the user's email
    $generateToken = "INSERT INTO passwordreset (email, token) VALUES (:email, :token)";
    $stmt1 = $conn->prepare($generateToken);
    $stmt1->bindValue(':email', $email);
    $stmt1->bindValue(':token', $token);
    $result = $stmt1->execute();

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on TheGardenBliss.com";
    $msg = `Hi there, click on this <a href=\"updatedPass.php?token=" . $token . "\">link</a> to reset your password on our site`;
    $msg = wordwrap($msg,70);
    $headers = "From: thegarenbliss@gmail.com";
    mail($to, $subject, $msg, $headers);
    header('location: pendingEmail.php?email=' . $email);
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
    $new_pass = !empty($_POST['new_pass']) ? trim($_POST['new_pass']) : null;
    $new_pass_c = !empty($_POST['new_pass_c']) ? trim($_POST['new_pass_c']) : null;

  // Grab to token that came from the email link
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)){
    $_SESSION['errMsg'] = "Password is required";
  }
  elseif ($new_pass !== $new_pass_c){
    $_SESSION['errMsg'] = "Password do not match";
  }

  else {
    $confirmEmail = "SELECT email FROM passwordreset WHERE token=:token LIMIT 1";
    $stmt2 = $conn->prepare($confirmEmail);
    $stmt2->bindValue(':token', $token);
    $currentEmail = $stmt2->execute();

    if ($currentEmail) {
        $new_pass  = password_hash($new_pass, PASSWORD_DEFAULT);
        $updatePass = "UPDATE users SET userpass=:pass WHERE email=:email";
        $stmt3 = $conn->prepare($updatePass);
        $stmt3->bindValue(':pass', $new_pass);
        $stmt3->bindValue(':email', $email);
        $currentEmail = $stmt3->execute();
        header('location: index.php');
    }
  }
}
?>