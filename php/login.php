<?php
  session_start();
  $dbserver = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "webproject";
  $database = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if(isset($_POST['submit'])){
    $username_exist = false;
    $username = mysqli_real_escape_string($database,test_input($_POST['userName']));
    $password = mysqli_real_escape_string($database,test_input($_POST['password']));
    $usernameempty = strcmp($username,"");
    $passwordempty = strcmp($password,"");
    if( $passwordempty==0 || $usernameempty==0){
      // echo "empty fields";
      if( $passwordempty == 0 ){
        // echo "password field empty";
      }
      if( $usernameempty == 0 ){
        // echo "username field empty";
      }
    }
    $SQLselect_one = "SELECT username , password FROM users WHERE username='$username'";
    $SQLselect_all = "SELECT username FROM users WHERE username = '$username'";
    $oneusername = mysqli_query($database,$SQLselect_one);
    $allusernames = mysqli_query($database,$SQLselect_all);
  if(mysqli_num_rows($allusernames)==0){
    // echo mysqli_num_rows($allusernames);
    $username_exist = false;
  }
  else{
    $username_exist = true;
  }
  if($username_exist){
    $row = mysqli_fetch_assoc($oneusername);
    $password = md5($password);
    if(strcmp($row["username"],$username)==0){
      if(strcmp($row["password"],$password)==0){
        // echo "logged in";
        $url = "/index.php";
        $_SESSION["user"] = $username;
        header( "Location: $url" );
      }
      else{
        // echo "wrong password";
        $_SESSION['msgerr_pass']= 'wrong password';
      }
    }
  }
  else{
    // echo "username does not exist";
    $_SESSION['msgerr_user']= 'username does not exist';
  }
  mysqli_close($database);
}

if(isset($_POST['forgetbutton'])){
  $random_number= rand(100000,999999);
  $usernsame_check = true ;
  $emailCheck = true ;
  $email_found = false ;
  $username_found = false ;
  $user_email = mysqli_real_escape_string($database,test_input($_POST['username_email']));
  if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $emailCheck = false;
    // echo "email error";
  }
  if(!$emailCheck){
    if (!preg_match("/^[a-zA-Z0-9]*$/",$user_email)) {
      $usernsame_check = false;
    }
    else{
      $SQLselect_username = "SELECT username FROM users";
      $usernamearray = mysqli_query($database,$SQLselect_username);
      while($row = mysqli_fetch_assoc($usernamearray)){
        if(strcmp($row['username'],$user_email)==0){
          $username_found = true ;
          break;
        }
      }
    }
  }
  else{
    $SQLselectemail = "SELECT email FROM users";
    $emailarray = mysqli_query($database,$SQLselectemail);
    while($row = mysqli_fetch_assoc($emailarray)){
      if(strcmp($row['email'],$user_email)==0){
        $email_found = true ;
        break;
      }
    }
  }
  if($email_found || $username_found ){
    if($email_found){
      $SQLselectemail_1 = "SELECT email FROM users WHERE email = '$user_email'";
    }
    else{
      //no email found
    }
    if($username_found){
      $SQLselectemail_1 = "SELECT email FROM users WHERE username = '$user_email'";
    }
    else{
      //no username found
    }

    $result = mysqli_query($database,$SQLselectemail_1);
    $email_row =mysqli_fetch_assoc($result);
    //the subject
    $sub = "Forget Your Password - CloudX";
    //the message
    $msg  = "Make new password \n";
    $msg .= $random_number;
    $msg .= "\n enter this code in 'Generated Code'";
    //recipient email here
    $rec = $email_row['email'];
    //send email
    mail($rec,$sub,$msg);
    $url = "/forgetpasswordpage.php";
    $_SESSION["rand"] = $random_number;
    $_SESSION["user_email"] = $user_email;
    $_SESSION["flag_email"] = $email_found;
    mysqli_close($database);
    header( "Location: $url" );
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOG IN</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body id="back">
  <div class="d-flex justify-content-center animated slideInDown">
    <div id="HighDiv" class="jumbotron shadow-lg">
      <h1 id="login_h1" class="float-left">Login</h1>
      <form id="login" class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="go-up">
          <input type="text" name="userName" required>
          <label for="userName">UserName</label>
        </div>
        <?php
              if(isset($_SESSION['msgerr_user'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['msgerr_user'].'</div>';
                unset($_SESSION['msgerr_user']);
              }
        ?>
        <div class="go-up">
          <input type="password" name="password" required>
          <label class="pass" for="password">Password</label>
        </div>
        <?php
              if(isset($_SESSION['msgerr_pass'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['msgerr_pass'].'</div>';
                unset($_SESSION['msgerr_pass']);
              }
        ?>
        <button type="submit" name="submit" class="btn btn-primary">Login </button>
        <br>
        <br>
        <br>
        <br>
        <button type="button" name="button" class="btn btn-link" onclick="forget_pass()">Forget Your Password?</button>
      </form>
    </div>
  </div>
  <script>
    function forget_pass(){
      var formlogin = document.getElementById('login');
      var logheader = document.getElementById('login_h1');
      logheader.remove();
      formlogin.remove();
      output = '';
      output +='<h1 id="forgetpass_h1" class="float-left">Forget Password</h1>';
      output += '<form id="forgetpassword" class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">';
      output +='<div class="">';
      output += '<input type="text" placeholder="Username or email" name="username_email" required>';
      output +='</div>';
      output +='<button type="submit" name="forgetbutton" value="forgetbutton" class="btn btn-primary" onclick="generate_code()">Send </button>';
      output +='<br><br><br><br>';
      output +='<button type="button" name="button" class="btn btn-primary" onclick="back_to_login()">Back to Login</button>';
      output +='</form>';
      document.getElementById('HighDiv').innerHTML = output;
    };

    function back_to_login(){
      var formforgetpassword = document.getElementById('forgetpassword');
      var forgetheader = document.getElementById('forgetpass_h1');
      formforgetpassword.remove();
      forgetheader.remove();
      output2 = '';
      output2 += '<h1 id="login_h1" class="float-left">Login</h1>';
      output2 += '<form id="login" class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">';
      output2 += ' <div class="go-up">';
      output2 += '<input type="text" name="userName" required>';
      output2 += '<label for="userName">UserName</label>';
      output2 += '</div>';
      output2 += '<div class="go-up">';
      output2 += '<input type="password" name="password" required>';
      output2 += '<label class="pass" for="password">Password</label>';
      output2 += '</div>';
      output2 += '<button type="submit" name="submit" class="btn btn-primary">Login </button>';
      output2 +='<br><br><br><br>';
      output2 +='<button type="button" name="button" class="btn btn-link" onclick="forget_pass()">Forget Your Password?</button>';
      output2 +='</form>';
      document.getElementById('HighDiv').innerHTML = output2;
    };
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>
