<?php
session_start();
if($_SESSION["user"]=="end")
{
  header("location:LogIn.php");
}?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> About Us </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

	body
	{
        background-image: url('dedu2.jpg');
		background-position: center;
		 background-size:cover ;
		font-family: 'Cinzel Decorative';
	}
	.aboutus
	{
		max-height:210px ;
		background-image:url("pinkkau.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
   		display:block;
   		float:left;
   		width:100% ;
		font-family:Comic Sans MS ;
		transition-property: all ;
		transition-duration: 1s ;
	}

	.aboutus:hover
	{
		height:190px ;
		width :110% ;
		background-image:url("pinkkau.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
   		display:block;
   		float:left;
	}
	.mission
	{
		text-align:right ;
		height:193px ;
		width :96% ;
		margin-top:250px ;
		margin-down:100px ;
		background-image:url("blueem.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
		background-position: center;
		font-family:Comic Sans MS ;
		transition-property: all ;
		transition-duration: 1s ;
	}

	.mission:hover
	{
		height:200px ;
		width :110% ;
		background-image:url("blueem.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
	}

	.service
	{
		text-align:center ;
		height:134px ;
		width :96% ;
		margin-top:40px ;
		margin-down:200px ;
		background-image:url("yllowser.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
		font-family:Comic Sans MS ;transition-property: all ;
		transition-property: all ;
		transition-duration: 1s
	}

	.service:hover
	{

		height:140px ;
		width :110% ;
		background-image:url("yllowser.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
	}

	body
	{
		background-size: cover;
	}

	.ab
	{
		color:black ;
		text-align:center ;
		font-size:50px ;
	}

	.boxx
	{
		margin-top:100px ;
		margin-down:40px ;
		margin-left:300px ;
		background:rgba(0,0,0,0) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 60% ;

		border-radius:10% ;
	}

	button
	{
  		background-color:#0047b3;;
  		color:black;
			font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	button:hover
	{
  		opacity: 1;
	}
	button:active
	{
			outline: none;
  		background-color: #001a66;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
	}

	h2
	{
		color:black ;
		text-align:center ;
		padding-top : 60px ;
	}
	h3
	{
		color:white ;
	}
	p
	{
		color:white ;
		padding :25px ;
		font-size:20 ;
	}

	div
	{
		text-align:center ;
		font-size:15 ;
	}
	input
	{
		color : white ;
		font-size:15 ;
		background: rgba(0,0,0,0) ;
		width: 50% ;
		height: 23px ;
		border: none ;
		border-bottom: 1px solid white ;
	}
	input:focus
	{
 		 outline: none;
		border-bottom: 1px solid #660000 ;
	}
	::placeholder
	{
		opacity:5 ;
		border:none ;
		color: white ;
	}

	::placeholder:focus
	{
		border:none ;
	}
	.contact
	{
		color:white ;
		font-family:Comic Sans MS ;
		text-align:center ;
   		display:block;
   		float:left;
   		width:27% ;
   		border:transparent ;
		border-radius:50% ;
   		padding: 10px;
		margin:30px ;
	}


	#navbar
	{
  		overflow: hidden;
  		background-color: #333;
		font-family:Times New Roman ;
	}

	#navbar a
	{
  		float: left;
  		display: block;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}

	#navbar a:hover
	{
  		background-color: #ddd;
  		color: black;
	}

	#navbar a.active
	{
 		 background-color:  #0047b3;
  		color: white;
	}
	.sticky
	{
  		position: fixed;
  		top: 0;
  		width: 100%;
	}

	.sticky + .content
	{
  		padding-top: 60px;
	}

	#navbar .sign
	{
		float :right ;
	}

	.jai
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
		transition-property: color ;
		transition-duration: 1s ;
	}
	.jai:hover
	{
		color:#990033 ;
		font-family: 'Cinzel Decorative';
	}

	.arun
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
		transition-property: color ;
		transition-duration: 1s ;
	}
	.arun:hover
	{
		color:Black;
		font-family: 'Cinzel Decorative';
	}

	.anukesh
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
		transition-property: color ;
		transition-duration: 1s ;
	}
	.anukesh:hover
	{
		color: #000099 ;
		font-family: 'Cinzel Decorative';
	}
	.animation-area
	{
  		background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  		background-size: 600%;
		background-repeat:no-repeat ;
  		position: relative;
  		animation: change 13s ease-in-out infinite;
	}

	@keyframes change
	{
  		0%{
    			background-position: 0% 50%;
  		}
  		50%{
    			background-position: 100% 50%;
  		}
  		100%{
    			background-position: 0% 50%;
  		}
	}

	.fontt
	{
  		font-family: 'Audiowide', cursive;
	}

	.pos
	{
		position:absolute ;
		top:1px ;
		left:170px ;
	}

	.me{
  padding: 10px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.me:hover {
    opacity: 0.7;
}
 .right{
	font-family:Times New Roman ;
  float: left;
}
.right1{
	font-family:Times New Roman ;
  float: right;
}

</style>

<body >
<h3>E-Learning</h3>
            </div>
            <div id="navbar">
                <a  href="homem.php"><i class="fa fa-home" aria-hidden="true"></i>&nbspHome</a>
                <a href="Upload.php">Upload&nbsp<i class="fa fa-upload" aria-hidden="true"></i></a>
                <a  href="Books.php">Materials&nbsp<i class="fab fa-readme" aria-hidden="true"></i></a>
                <a class="active" href="">About Us&nbsp<i class="fa fa-address-book" aria-hidden="true"></i></a>
                <a id="lgo"class="sign"  href="LogIn.php">Logout&nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
</div>
<h1  class="ab" style="letter-spacing:8px ; margin-top:43px ;">   About web-site  </h1>

<div class="aboutus">
<p style="font-size:1.3vw; color:black">
<b>&nbsp E-Learning is a network<br> of question-and-answer (Q&A) <br>
websites on topics in diverse fields.
</b>
</p>
</div>

<div class="mission">
<p  style="font-size:1.2vw;color:black ; margin-right:257px ;">
	<b>  <br>the website is available free and
	 <br> exclusively for BMSCEians letting :<br>
	   - Students to search and download <br>
	   acedemic resources shared by their peers 
	    <br>
	  - Students to upload materials therby <br>
	   sharing resources with their peers 
	     <br>
	</b>
</p>
</div>
<p class="service" style="font-size:1.2vw;color:black ;">
	<b><br>E-Learning is a website which <br> enables
	 any member of BMSCE to share <br>
	 acedemic resources with fellow BMSCEians. <br>
	sign up and enjoy the free service<br>
	</b>
</p>

<div class="boxx">
<img src="contactus.jpg" style="height:200px ;border-radius:50% ; opacity:70% ;" ></img>
<h1 style="color:black ;">   Contact Us  </h1>
<div>
<form style="font-size:1.3vw;color:white ;">
 <input  type="text" placeholder="Enter your name" id="nam">  <br><br>
 <input type="text" placeholder=" Your E-mail address" id="email" >   <br><br>
  <input type="text" placeholder="Message" id="mes">   <br><br>
 <button type="submit" onclick="return validation()"  class="suubmit"  onsubmit="return validation()">Submit</button>
</form>
</div>
</div>

<h2 style="margin-top:40px ;margin-bottom:40px ;letter-spacing:8px ;">About The Creators</h2>
<li class="contact" style="align:left ;">
<img src="dscontact.jpg" style="height:200px ;border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black">Jai Jain</h3>
<h4 style="color:black"> Status </h4>
<p  class="jai" style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 5th semester .
</p>
</li>

<li class="contact" style="alignment:right ;">
<img src="contact121.jpg" style="height:200px ;border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black"> J . Anukesh</h3>
<h4 style="color:black"> Status </h4>
<p class="anukesh"  style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 5th semester .
</p>
</li>
<li class="contact">
<img src="contact131.jpg" style="height:200px ; border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black"> Atharv Arya</h3>
<h4 style="color:black"> Status </h4>
<p class="arun"  style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 5th semester .
</p>
</li>
<li class="contact">
<img src="black.png" style="height:200px ; border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black"> Abhinav Verma</h3>
<h4 style="color:black"> Status </h4>
<p class="arun"  style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 5th semester .
</p>
</li>


<script>
var navbar = document.getElementById("navbar") ;
var sticky = navbar.offsetTop ;

window.onscroll =  function(){myFunction()} ;

function myFunction()
{
  	if (window.pageYOffset >= sticky)
	{
    		navbar.classList.add("sticky") ;
  	}
	else
	{
    		navbar.classList.remove("sticky");
  	}
}
function validation()
{
	var name=document.getElementById("nam").value ;
	var mail=document.getElementById("email").value ;
	var message=document.getElementById("mes").value ;
	if(name.length==0||mail.length==0||message.length==0)
	{
		alert("Please fill out all the feilds") ;
		return false ;
	}
	else if(mail.indexOf("@bmsce.ac.in")==-1)
	{
		alert("enter valid E-mail id \nmaybe you are not givinng your bmsce e-mail address \nyour email must end with @bmsce.ac.in") ;
		return false ;
	}
	else
  {
		alert("your message has been submitted") ;
	}

}
</script>

</body>
</html>
