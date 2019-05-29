<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>
<body>
<h2>Star Rating</h2>

<?php
    $a=1;
    for ($i=0;$i<$a;$i++){
        echo "<span class='fa fa-star checked'>"."</span>";
    }
    for ($b=5;!($b==$a);$b--){
        echo "<span class='fa fa-star'>"."</span>";
    }
    /*if($a==1){
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
    }
    elseif($a==2){
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
    }
    elseif($a==3){
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
    }
    elseif($a==4){
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star'>"."</span>";
    }
    elseif($a==5){
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
        echo "<span class='fa fa-star checked'>"."</span>";
    }
    */
?>

</body>
</html>

