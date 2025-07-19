

<?php
include('conn.php');
//هذا الكود  الحماية فيه  جيدة لحد ما  ولا توجد فية ثغرة sql inlection لغرض التعليم فقط لاغير
//اعداد : ياسين علي عفيفي  التخضض: Cyber Security

 $stl = $conn->prepare("SELECT * FROM login"); 
$stl->execute(); 


    $results = $stl->fetch(PDO::FETCH_ASSOC);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
   
   

        if($results['name'] === $name && $results['pass'] === $pass ){
            

            header("Location: dash.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }

}



?>


    
<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <title>make Eng:yassin Ali Afifi </title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="style.css">

</head>
<body dir="rtl">
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form style="margin-right: 70px;" class="login" action="#" method="post">
				<div class="login__field">
					<i  class="login__icon fas fa-user"></i>
					<input style="margin-right: 10px;" type="text" class="login__input" name="name" placeholder="أسم المستخدم ">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input style="margin-right: 10px;" type="password" class="login__input" name="pass" placeholder="كلمة المرور">
				</div>
				<button  class="button login__submit">
					<span  style="margin-left: 10px; margin-right: 50px;" class="button__text">دخول </span>
					<i class="button__icon fas fa-chevron-left"></i>
				</button>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>	
       <center style="margin-top: 20px;"> <span style="font-size: 10px; color: white;">Eng:Yassin Ali  Phone:773713656 </span>	</center>
	</div>
</div>
<!-- partial -->
  
</body>
</html>
