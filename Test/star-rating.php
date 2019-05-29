<html>
<head>
	<title>Star Rating</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="star-rating.css">
</head>
<body>
	<?php
		session_start();
		$rate="0";
	?>
	<form action="db.php" method="POST">
		<div>
			<input type="text" name="name">
		</div>
		<?php

		?>
		<div class="con">
			<i class="fa fa-star" aria-hidden="true" id="s1"></i>
			<i class="fa fa-star" aria-hidden="true" id="s2"></i>
			<i class="fa fa-star" aria-hidden="true" id="s3"></i>
			<i class="fa fa-star" aria-hidden="true" id="s4"></i>
			<i class="fa fa-star" aria-hidden="true" id="s5"></i>
		</div>
		<div>
			<input type="submit">
		</div>
	</form>

	<script type="text/javascript">
		var rate;
		localStorage.setItem("storageName",'1');
		$(document).ready(function(){
			$("#s1").click(function(){
				$(".fa-star").css("color","black");
				$("#s1").css("color","yellow");
				$rate=1;
			});
			$("#s2").click(function(){
				$(".fa-star").css("color","black");
				$("#s1,#s2").css("color","yellow");
				$rate=1;
			});
			$("#s3").click(function(){
				$(".fa-star").css("color","black");
				$("#s1,#s2,#s3").css("color","yellow");
				$rate=1;
			});
			$("#s4").click(function(){
				$(".fa-star").css("color","black");
				$("#s1,#s2,#s3,#s4").css("color","yellow");
				$rate=1;
			});
			$("#s5").click(function(){
				$(".fa-star").css("color","black");
				$("#s1,#s2,#s3,#s4,#s5").css("color","yellow");
				$rate=1;
			});
		});
	</script>
	?>
</body>