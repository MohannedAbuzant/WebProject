<?php
    session_start();
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if(isset($_POST['submit'])){
      $duplicated_username = false;
      $usernameCheck = true;
      $fisrtnameCheck = true;
      $lastnameCheck = true;
      $emailCheck = true;
      $equalpasswords = true;
      $dbserver = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "webproject";
      $database = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
      $SQLselect = "SELECT username FROM users";
      $usernamearray = mysqli_query($database,$SQLselect);
      $firstname  = test_input($_POST['FirstName']);
      $lastname   = test_input($_POST['LastName']);
      $username   = test_input($_POST['UserName']);
      $email      = test_input($_POST['email']);
      $password1  = test_input($_POST['password1']);
      $password2  = test_input($_POST['password2']);

      if(!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
        $usernameCheck = false;
      }

      if($usernameCheck){
        while($row = mysqli_fetch_assoc($usernamearray)){
          // echo $row['username']."<br>";
          if(strcmp($row['username'],$username)==0){
            $duplicated_username = true ;
          }
        }
      }
      else{
        // echo "error in username";
        $_SESSION['msg_username']= 'invalid username';
      }
      if(!$duplicated_username){
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
          $fisrtnameCheck = false;
          // echo "firstname error";

        }
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
          $lastnameCheck = false;
          // echo "lastname error";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailCheck = false;
          // echo "email error";
        }
        if($fisrtnameCheck && $lastnameCheck && $emailCheck && !$duplicated_username && $usernameCheck){
          if(strlen($password1)>=8 && strlen($password1)<=32){
            if(strcmp($password1,$password2) == 0){
              if(strlen($firstname)>30){
                $fisrtnameCheck = false;
              }
              if(strlen($lastname)>30){
                $lastnameCheck = false;
              }
              $uppercase = preg_match('@[A-Z]@', $password1);
              $lowercase = preg_match('@[a-z]@', $password1);
              $number    = preg_match('@[0-9]@', $password1);
              $specialChars = preg_match('@[^\w]@', $password1);

              if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
                $strongPass = false;
                // echo "weak password error";
                $_SESSION['password_error']='weak password';
              }
              else{
                $strongPass = true;
              }
              if($fisrtnameCheck && $lastnameCheck && $usernameCheck && $emailCheck && $strongPass){
                $password1 = md5($password1);
                $SQLinsert = "INSERT INTO users VALUES('$username','$firstname','$lastname','$password1','$email')";
                mysqli_query($database,$SQLinsert);
                mysqli_close($database);
                $url = "/index.php";
                $_SESSION["user"] = $username;
                header( "Location: $url" );
                // echo "Check database ,the user inserted";
              }
              else{
                // echo "error :insert in database";
                if(!$fisrtnameCheck){
                  $_SESSION['firstname_error']='firstname error';
                }
                if(!$lastnameCheck){
                  $_SESSION['lastname_error']='lastname error';
                }
                if(!$emailCheck){
                  $_SESSION['email_error']='email error';
                }
              }
            }
            else{
              $equalpasswords = false;
              // echo "error :non eqaul passwords";
              $_SESSION['password_not_equal_error']='Password Mismatch';
            }

          }
        }
      }
      else{
        $_SESSION['msg']= 'duplicated username try new one';
        // echo "this username exists";
        //duplicated_username
        //try another username
      }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  <link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

  <title>New Account page</title>
</head>

<body class="NewAcc  animated slideInDown ">

  <div class="d-flex justify-content-center  ">
    <div class="container floating-box p-5  w-25 h-80 rounded-lg ">


        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group row mb-2">
          <label>FirstName:</label>
          <input type="text" name="FirstName" class="form-control form-control" required>
        </div>
        <?php
              if(isset($_SESSION['firstname_error'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['firstname_error'].'</div>';
                unset($_SESSION['firstname_error']);
              }
        ?>
        <div class="form-group row">
          <label>LastName:</label>
          <input type="text" name="LastName" class="form-control form-control " required>
        </div>
        <?php
              if(isset($_SESSION['lastname_error'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['lastname_error'].'</div>';
                unset($_SESSION['lastname_error']);
              }
        ?>
        <div class="form-group row mb-2">
          <label>UserName:</label>
          <input type="text" name="UserName" class="form-control" required>
        </div>
        <?php
              if(isset($_SESSION['msg_username'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['msg_username'].'</div>';
                unset($_SESSION['msg_username']);
              }
              if(isset($_SESSION['msg'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['msg'].'</div>';
                unset($_SESSION['msg']);
              }
        ?>
        <div class="form-group row mb-2">
          <label>Email:</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <?php
              if(isset($_SESSION['email_error'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['email_error'].'</div>';
                unset($_SESSION['email_error']);
              }
        ?>
        <div class="form-group row mb-2">
          <label>Password:</label>
          <input id="password" type="password" name="password1" class="form-control" required>
        </div>
        <div class="form-group row mb-2">
          <label>Confirm Password:</label>
          <input type="password" name="password2" class="form-control" required>
        </div>
        <?php
              if(isset($_SESSION['password_error'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['password_error'].'</div>';
                unset($_SESSION['password_error']);
              }
              if(isset($_SESSION['password_not_equal_error'])){
                echo '<div class="alert alert-danger error">'.$_SESSION['password_not_equal_error'].'</div>';
                unset($_SESSION['password_not_equal_error']);
              }
        ?>
        <div class="form-group row">
          <div class="d-block ml-3">
            <p>Numbers</p>


<svg  class="ml-3" id="num"  xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="#F0F0F0" stroke-width="3" stroke-linecap="square" stroke-linejoin="arcs"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>

        </div>
          <div class="form-group row">
            <div class="d-block char">
            <p>Characters</p>
<svg class="ml-3" id="alpha"  xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="#F0F0F0" stroke-width="3" stroke-linecap="square" stroke-linejoin="arcs"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
           </div>
          </div>
          <div class="form-group row">
            <div class="d-block sym">
              <p>Symbols</p>

<svg class="ml-3" id="dolla" xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
          </div>
        </div>
        <div class="float-right">
          <input type="submit" id="Register_button" name="submit" value="submit" class="btn btn-primary mt-3 shadow pr-5 pl-5 ">
        </div>

      </form>
    </div>
  </div>
  <script>
  function isletter(letter){
    if(letter>='A' && letter<='Z'){
      return true;
    }
    else if (letter>='a' && letter<='z') {
      return true
    }
    else return false;
  }
  function isSymbol(sym){
    if(sym>='A' && sym<='Z'){
      return false;
    }
    else if (sym>='a' && sym<='z') {
      return false
    }
    if(sym>='A' && sym<='Z'){
      return false;
    }
    if(sym>=0 && sym<=9){
      return false;
    }
    else return true;

  }
    let passfield = document.getElementById('password');
passfield.onkeyup = () => {
  for (let i = 0; i < passfield.value.length; i++) {
    let c = passfield.value.charAt(i);
    if (!isNaN(c)) {
      document.getElementById('num').setAttribute("stroke", "#ff0000  ");
        document.getElementById('num').style.animation = "myframe 1s";
    }
    else if (isletter(c)) {
      document.getElementById('alpha').setAttribute("stroke","#ffea00");
      document.getElementById('alpha').style.animation="myframe 1s";

    }
    else if (isSymbol(c)) {
      document.getElementById('dolla').setAttribute("stroke","#40a70e");
      document.getElementById('dolla').style.animation="myframe 1s";

    }
  }

}

</script>
</body>
</html>
