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
$sql = 'select * from files ' ;
$result = mysqli_query($conn, $sql) ;
$books = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
mysqli_free_result($result) ;

?>
<?php   
    if(isset($_POST['submit']))
    {  
       session_start() ;
       $_SESSION['submit']=$_POST['submit'] ;
       header('Location: answer.php') ;
       //header('Location:allques.php') ;
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

<body style="background-image:url('dedu.jpg') ; background-position: center; background-size:cover ;">
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
    #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: rgb(0,0,0);
}
/* #myInput placeholder
{
    color:black ;
} */



</style>
  <body>              
            <h3 style="color:black ;font-family: 'Cinzel Decorative';">E-Learning</h3>
            </div>
            <div id="navbar">
                <a  href="homem.php"><i class="fa fa-home" aria-hidden="true"></i>&nbspHome</a>
                <a href="Upload.php">Upload&nbsp<i class="fa fa-upload" aria-hidden="true"></i></a>
                <a class="active" href="Books.php">Materials&nbsp<i class="fab fa-readme" aria-hidden="true"></i></a>
                <a href="About.php">About Us&nbsp<i class="fa fa-address-book" aria-hidden="true"></i></a>
                <a id="lgo"class="sign"  href="LogIn.php">Logout&nbsp<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
           
      
    </div>
 
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" style="background:rgb(0, 0, 0,0.5) ;">
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">MATERIAL </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      <b>Search the material by Title, Faculty name ,Subject name or Branch </b>
                         </p>
                         <input type="text" style="color:black ;" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                            <table id="myTable">
                            <tr class="header">
                                <th style="width:60%;color:white ;">Document Name </th>
                                <th style="width:40%;color:white ;">Teacher</th>
                                <th style="width:40%;color:white ;">Subject</th>
                                <th style="width:40%;color:white ;">Branch</th>
                                <th style="width:40%;color:white ;">Link</th>
                            </tr>
                            <?php foreach($books as $book){?>
                            <tr>
                                <td style="color:white ;"><?php echo htmlspecialchars($book['Dname']) ;?></td>
                                <td style="color:white ;"><?php echo htmlspecialchars($book['Tname']) ;?></td>
                                <td style="color:white ;"><?php echo htmlspecialchars($book['Sname']) ;?></td>
                                <td style="color:white ;"><?php echo htmlspecialchars($book['Bname']) ;?></td>
                                <td style="color:white ;"><a href="<?php echo htmlspecialchars($book['Path']) ;?> " download>link</a></td>

                            </tr>
                            <?php } ?>
                            </table>
                            
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <!-- -->
               
                 
                </div>
                   </div>
                 
               </div>
             </div>
        </div>
    <!-- FACULTY SECTION END-->
      
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
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
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td") ; 
    for(j=0 ; j<td.length ; j++)
    {
      let tdata = td[j] ;
      if (tdata) {
        if (tdata.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break ; 
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }
}
</script>
</body>
</html>
