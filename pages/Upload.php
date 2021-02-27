<?php
session_start();
if($_SESSION["user"]=="end")
{
  header("location:LogIn.php");
}

?>
<?php
    $conn= mysqli_connect('localhost','jai','1008','projectx') ;
    if(!$conn)
    {
        echo'connection error:'.mysqli_connect_error() ;
    }   
    if(isset($_POST['Dname']))
    {
        $dname=$_POST['Dname'] ;
        $sname=$_POST['Sname'] ;
        $tname=$_POST['Tname'] ;
        $bname=$_POST['Bname'] ;
        

        
        
        $filename= $_FILES['File']['name'] ;
        $tempname=$_FILES['File']['tmp_name'] ;
        $folder= "docss/".$filename ;
        $sql = "Insert into files values('$dname','$tname','$sname','$bname','$folder')" ;     
        $result = mysqli_query($conn, $sql) ;
        
        move_uploaded_file($tempname,$folder) ;
            
    }   

    
    

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Learning</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body style="background-image:url('dedu2.jpg') ; background-position: center; background-size:cover ;">
    <style>
        #navbar
        {
            overflow: hidden;
            background-color:  rgba(28, 43, 75, 1);
            font-family:'Times New Roman' ;
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
    
        #navbar a.sign
        {
              float: right;
        }
        #navbar a.sign:hover
        {
              background-color: #ddd;
              color: black;
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
    
    </style>
   
                <h3 style="color:black ;font-family: 'Cinzel Decorative';">E-Learning</h3>
            </div>
            <div id="navbar">
                <a  href="homem.php"><i class="fa fa-home" aria-hidden="true"></i>&nbspHome</a>
                <a  class="active" href="Upload.php">Upload&nbsp<i class="fa fa-upload" aria-hidden="true"></i></a>
                <a href="Books.php">Materials&nbsp<i class="fab fa-readme" aria-hidden="true"></i></a>
                <a href="About.php">About Us&nbsp<i class="fa fa-address-book" aria-hidden="true"></i></a>
                <a id="lgo"class="sign"  href="LogIn.php">Logout&nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
           
        </div>
    </div>    
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >Upload  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Upload the document after providing necessary information about the document  
                         </p>
                 </div>

             </div>
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >      
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form method="post" action="" name="dform" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" style="color:white ;" class="form-control " name="Dname" required="required" placeholder="Name of the document" />
                        </div>
                        <div class="form-group">
                            <input type="text"style="color:white ;" class="form-control " required="required" name="Tname" placeholder="Teacher's Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" style="color:white ;"class="form-control " required="required"  name="Sname" placeholder="Subject to which the document is associated with" />
                        </div>
                        <div class="form-group">
                            <input type="text"style="color:white ;" class="form-control " required="required" name="Bname" placeholder="Branch to which the document is associated with" />
                        </div>
                        <div class="form-group">
                            <input type ="file"  name="File" class="btn btn-info btn-block btn-lg" value="Browse the document" style="background-color:royalblue ;"/>
                        </div>
                        <div class="form-group" style="float:center;">
                            <input type="submit" name="upload"class="btn btn-info btn-block btn-lg" style="width:30% ;background-color: brown ;" ></button>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
</body>

</html>