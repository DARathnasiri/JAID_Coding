<?php
session_start();
require_once('connection.php');
require_once('loginrestrict.php');

require 'postedit.php';
require 'deleteposts.php';


$name =  $_SESSION['loginUser'];
$sql2 = "select * from usertable where name = '$name' or email = '$name' ";

$result2 = $conn->query($sql2);

$row2 = $result2->fetch_assoc() ;
$profileName =  $row2["name"];
$_SESSION['username'] = $profileName;


$sql = "SELECT id, name, email, mnum, Job, Pay, location, details, date FROM post  where name  ='$profileName'";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mypostf.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title></title>
</head>
<body>
    
    <div class="header">
  <div class="header-right">
    
    <a id = "idProfileName"  href="http://localhost/Tutorial/myWeb/accountinfo.php" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
    <div class="navBar">
        <a class="" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a class="active" href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div>
    <div class="searchContainer">
        <form action="postSearch.php" method="POST">
            <input type="text" placeholder="Search..." name="search" required>
            <button type="submit"><i class="fa fa-search" style="font-size:30px; color:black;"></i></button>
        </form>
    </div>
    <div class="verticalMenu">
        <a href="http://localhost/Tutorial/myWeb/postfeed.php" > <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a href="#" class="active"><i class="fa fa-tag"></i>&nbsp My Posts</a>
        <a href="http://localhost/Tutorial/myWeb/post.php"><i class="fa fa-plus-circle"></i>&nbsp Post a Job</a>
        <a href="http://localhost/Tutorial/myWeb/accountinfo.php"><i class="fa fa-user-circle"></i>&nbsp Account Info</a>
        <a href="http://localhost/Tutorial/myWeb/Private Messaging System/index.php"><i class="fa fa-comments-o"></i>&nbsp  Messenger</a>
    </div>
    
    <!--<div class="container">
        <div id="idOnePost" class="onePost">
            <?php
            //    if ($result->num_rows > 0) {
            // output data of each row
            //        while($row = $result->fetch_assoc()) {
            //            echo "<img src='userIconPosts.png' width='30px' height='30px' alt='Ishara'>"."       "
            //            ."<span class='usernameClass'>" .$row["name"] .'</span>'."<br> <br>"
            //           ."Email : ". $row["email"]."<br>"
            //            ."Phone Number : ". $row["mnum"]."<br>" 
            //            ."Job : ".$row["Job"]."<br>"
            //            ."Payment : ".$row["Pay"]."<br>"
            //            ."Location : ".$row["location"]."<br>"
            //            ."Job Details : ".$row["details"]."<br><br>"
            //            ."<button  class='btnJobApply' onclick='func();'>Apply For The Job</button>". "<br><br> <hr>";
            //        }
            //    } else {
            //        echo "No Job Posts Yet!";
            //    }
            ?>
        </div>
    </div>-->

    <div class="container">
        <div class="takeToDown">
            <?php
                if ($result->num_rows > 0) {
            // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <form action="postedit.php" method="post">
                            <?php $_SESSION['id'] = $row['id']; ?>
                            
                            <div class="onePost">
                            <div class="postHeader">
                                <i class="fa fa-user-circle" style="font-size:24px"></i>
                                <?php echo $row['name']?>
                            </div>
                            <div class='date'><i class="fa fa-calendar "></i> <?php echo $row['date'];?> </div>  <br>
                            <div class="mark"><i class="fa fa-bookmark-o" style="font-size: 30px"></i></div>
                            <div class='postContainer'>
                                <span>Looking for : &nbsp </span><b><u><?php echo $row["Job"]; ?> </u></b>  <br> <br>
                                <span>Job Details : </span><?php echo $row["details"]; ?> <br> <br>
                                <span>Payment : </span><b><u><?php echo $row["Pay"];?> </u></b><br> <br>
                                <span>Contact via : &nbsp <i class="fa fa-phone"></i> &nbsp   <?php echo $row["mnum"];?> 
                                &nbsp &nbsp &nbsp &nbsp <i class="fa fa-envelope"></i> &nbsp<?php echo  $row["email"]; ?></span> <br>
                                <br>
                                <i class="fa fa-map-marker"></i>&nbsp &nbsp <?php echo $row["location"];?> <br>
                                
                            
                            </div> <br>
                            
                            <div class="btn1">
                            <a type="button" class="btnJobApply2" href="posted.php?id=<?php echo($row['id'])  ?>">EDIT &nbsp<i class='fas fa-wrench'></i></a></div>
                            <div class="btn2">
                            <a type="button" onclick='confirmDelete();' class="btnJobApply" href="postd.php?id=<?php echo($row['id'])  ?>">DELETE &nbsp <i class='fas fa-trash-alt'></i></a>
                            </div>
                            <br>
                            <br>
                            <hr>

                        </form>
                        
                        <?php
                        
                    }
                } else {
                    echo "No Job Posts Yet!";
                }
            ?>

        </div>
    </div>
    

   <script >
       function func(){
            alert("Call to Phone number of the Employer");
            
        }

        function confirmLogout() {
            if (confirm("Do you want to  Logout!")) {
                location.replace("http://localhost/Tutorial/myWeb/logout.php");
            }
        }


        function deleteRow(){
            <?php echo "Ishara" ?>
        }

        function confirmDelete() {
            if (confirm("Do you want to  Delete Post?")) {
                location.replace("postd.php?id=<?php echo($row['id'])  ?>");
            }
        }

   </script>
</body>
</html>
