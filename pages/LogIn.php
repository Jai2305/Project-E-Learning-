<?php
session_start();
$_SESSION["user"]="end"
?>
<?php
    $conn= mysqli_connect('localhost','jai','1008','projectx') ;
    if(!$conn)
    {
        echo'connection error:'.mysqli_connect_error() ;
    }
    if(isset($_POST['Email']))
    {
      $email=$_POST['Email'];
      $password=$_POST['Pass']; 
      $query=mysqli_query($conn,"SELECT * FROM details WHERE Email='".$email."' AND Pass='".$password."'");
      // $res= mysqli_num_rows($query) ; 
      $numrows=mysqli_num_rows($query);  
      if($numrows==1)
      {   
      /* Redirect browser */
        session_start();
        $_SESSION["user"]="set";
        header("Location: homem.php");
      }
      else 
      {
        ?><script>alert('Invalid username or password!')</script><?php
      }
    }
      
  
     
        
?>
<html>

<body>
  <style>
    @import "compass/css3";

button{
    color:rgba(148,186,101,0.7);
} 

body {
    background:url('booksk.jpeg') no-repeat  ;
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
form {
  background-color: rgba(39, 9, 9, 0.527);
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 20px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
    }
  h2 {
    margin: 0 0 50px 0;
    padding:10px;
    text-align:center;
    font-size:30px;
    color:darken(#e5e5e5, 50%);
    border-bottom :solid 1px #e5e5e5;
  }
  p {
    margin: 0 0 3em 0;
    position: relative;
  }
  input {
    display: block;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    margin:0;
  }
  input[type="text"],
  input[type="password"] {
    background: #fff;
    border: 1px solid #222; 
    
    border-radius: 2px;
  }
  input[type="text"]:focus,
  input[type="password"]:focus {
    background: #fff
  }
  span {
    display:block;
    background: #500505;
    padding: 2px 5px;
    color: rgb(248, 245, 245);
  }
  input[type="submit"] {
    background: button;
    box-shadow: 0 3px 0 0 darken(button, 10%);
    border-radius: 2px;
    border: none;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 2em;
    line-height: 1.6em;
    margin: 2em 0 0;
    outline: none;
    padding: .8em 0;
    text-shadow: 0 1px #68B25B;
    color:rgb(7, 56, 112) ;
  }
  input[type="submit"]:hover {
    background: rgb(129, 5, 5);
    text-shadow:0 1px 3px darken(button, 30%);
    color: #e5e5e5;
  }
 #su {
    background: button;
    box-shadow: 0 3px 0 0 darken(button, 10%);
    border-radius: 2px;
    border: none;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 2em;
    line-height: 1.6em;
    margin: 2em 0 0;
    outline: none;
    padding: .8em 0;
    text-shadow: 0 1px #68B25B;
    color:rgb(7, 56, 112) ;
  }
  #su:hover {
    background: rgb(129, 5, 5);
    text-shadow:0 1px 3px darken(button, 30%);
    color: #e5e5e5;
  }
  
  label{
    position: absolute;
    left: 8px;
    top: 12px;
    color:black;
    font-size: 16px;
    display: inline-block;
    padding: 4px 10px;
    font-weight: 400;
    background-color: rgba(255,255,255,0);
    }
     .floatLabel{
      top: -11px;
      background-color: rgba(255,255,255,0.8);
      font-size: 14px;
    }
	
  

</style>

<form action="#" method="post">
    <h2 style="color:#e4cbcf">Log In</h2>
    
          <p>
              <label for="Email" class="floatLabel">Email</label>
              <input id="Email"style="padding-top:10px;padding-left: 10px; font-size: 20px ;" name="Email" type="text" required>
          </p>
          
          <p>
              <label for="password" class="floatLabel">Password</label>
              <input id="password"style="padding-top:10px;padding-left: 10px; font-size: 20px ;" name="Pass" type="password" required>
               </p>
          
          <p>
            <a href="index.html" style="text-decoration: none; height: 50px;"><input type="submit" style="font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; height:50px; font-size:25px; padding:5px;border-radius: 10%;"value="Log In" id="submit"></a>
          </p>
          <p>
          <a href="SignIn.php" style="text-decoration: none; height: 50px;"><p style="font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; height:50px; font-size:25px; padding:5px;border-radius: 10%; text-align:center ; text-color:white ;" id ="su" >Sign Up </p></a>
          </p>
      </form>
    </body>
    <script>
        //Problem: Hints are shown even when form is valid
//Solution: Hide and show them at appropriate times
var $password = $("#password");
var $confirmPassword = $("#confirm_password");

//Hide hints
$("form span").hide();

function isPasswordValid() {
  return $password.val().length > 8;
}

function arePasswordsMatching() {
  return $password.val() === $confirmPassword.val();
}

function canSubmit() {
  return isPasswordValid() && arePasswordsMatching();
}

function passwordEvent(){
    //Find out if password is valid  
    if(isPasswordValid()) {
      //Hide hint if valid
      $password.next().hide();
    } else {
      //else show hint
      $password.next().show();
    }
}

function confirmPasswordEvent() {
  //Find out if password and confirmation match
  if(arePasswordsMatching()) {
    //Hide hint if match
    $confirmPassword.next().hide();
  } else {
    //else show hint 
    $confirmPassword.next().show();
  }
}

function enableSubmitEvent() {
  $("#submit").prop("disabled", !canSubmit());
}

//When event happens on password input
$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

//When event happens on confirmation input
$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

enableSubmitEvent();
    </script>
      </html>