<?php
    $conn= mysqli_connect('localhost','jai','1008','projectx') ;
    if(!$conn)
    {
        echo'connection error:'.mysqli_connect_error() ;
    }   
    if(isset($_POST['Name']))
    {
        $name=$_POST['Name'] ;
        $email=$_POST['Email'] ;
        $usn=$_POST['Usn'] ;
        $pass=$_POST['Pass'] ;
        $qu = "Select * from details where Email='$email'" ;
        $lss= mysqli_query($conn,$qu) ;
        
        if (mysqli_num_rows($lss) != 0)
        { ?>
          <script> alert('Username already exists')</script>
          <?php
        }
        else
        {
          $sql = "Insert into details values('$name','$email','$usn','$pass')" ;     
          $result = mysqli_query($conn, $sql) ;
          header("Location: LogIn.php");
        }    
    } 
    unset($_POST);  
    

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
  padding: 2em 2em 1em;
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
    font-size:15px ;
  }

  input[type="submit"] {
    background: button;
    box-shadow: 0 3px 0 0 darken(button, 10%);
    border-radius: 2px;
    border: none;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 1em;
    line-height: 1.6em;
    margin: 2em 0 0;
    outline: none;
    padding: .8em 0;
    text-shadow: 0 1px #68B25B;
    color:rgb(7, 56, 110) ;
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
	#for
    {
        width:350px ;
        max-height:550px ;
        
    }
  

</style>

<form id="for"name="for" action="#" method="post" onsubmit="return(check());">
    <h2 style="color:#e4cbcf; padding-top:0px ;">Sign Up</h2>
    <p>
        <label for="Name" style="font-size:12px;"class="floatLabel">Name</label>
        <input id="Name" style="padding-top:10px;padding-left: 10px; font-size: 13px ;padding-down:0px ;" name="Name" type="text" required>
    </p>
          <p>
              <label for="Email"style="font-size:12px; "class="floatLabel">Email</label>
              <input id="Email" style="padding-top:10px;padding-left: 10px; font-size: 13px ;padding-down:0px;" name="Email" type="text" required>
              <span >Enter your BMSCE E-mail id</span>
          </p>
          <p>
            <label for="Usn" style="font-size:12px;"class="floatLabel">USN/ID</label>
            <input id="Usn" style="padding-top:10px;padding-left: 10px; font-size: 13px ;padding-down:0px;" name="Usn" type="text" required>
        </p>
          <p>
              <label for="password"style="font-size:12px;" class="floatLabel">Password</label>
              <input id="password" style="padding-top:10px;padding-left: 10px; font-size: 10px ;padding-down:0px;" name="Pass" type="password" required>
              <span >Enter a password longer than 8 characters</span>
          </p>
          <p>
              <label for="confirm_password" style="font-size:12px;"class="floatLabel">Confirm Password</label>
              <input id="confirm_password" style="padding-top:10px;padding-left: 10px; font-size: 10px ;padding-down:0px" name="confirm_password" type="password" required>
              
          </p>
          <p>
              <a href="index.html" style="text-decoration: none; height: 20px;padding-down:0px ;"><input type="submit" 
              style="padding-down:0px ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; height:40px; 
              font-size:20px; padding:5px;border-radius: 10%;"value="Create My Account" id="submit"></a>
           </p>
      
          <a href="LogIn.php" style="text-decoration: none; height: 50px;"><p style="font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; height:50px; font-size:25px; padding:5px;border-radius: 10%; text-align:center" id ="su">LogIn</p></a>
     
      </form>
    </body>
<script>  

  function check()
  {
    var em= document.getElementById("Email").value ;
    // var sr="hello" ;
    // document.write(em) ;
    var pw = document.getElementById("password").value; 
    // document.write(sr.endsWith("l")  ;
    if(!em.endsWith("@bmsce.ac.in"))
    {
      alert("please enter your bmsce email id") ;
      return false ;
    }
    if(pw.length<8)
    {
      alert("the minimum lenght of the password should be 8 characters") ;
      return false ;
    }
    var pw1 = document.getElementById("confirm_password").value();  
    var pw2 = document.getElementById("password").value();  
    if(pw1 != pw2)  
    {   
      alert("Passwords did not match");  
      return false ;
    } 
  }    

</script>
      </html>