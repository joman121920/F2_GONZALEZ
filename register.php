<?php    
    include 'connect.php';    
    //require_once 'includes/header.php'; 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mobile Legends - Register</title>
 
    <link rel="stylesheet" href="css/root.css">
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/register.css">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
<section id="content">
<header>
            MOBILE LEGENDS: LEGENDARY BATTLE
</header>
<section id="banner">
<img id="banner-img" src="images/register_banner.png">
</section>
<nav>
            <a href="register.php"><button>REGISTER</button></a>
            <a href="login.php"><button>LOGIN</button></a>
            <a href="index.php"><button>HOME</button></a>
            <a href="aboutus.php"><button>ABOUT US</button></a>
            <a href="contactus.php"><button>CONTACT US</button></a>
        </nav>
 
        <main>

<form method = "post">
<div class="card register-box">
<section>
<button type="submit" name="btnRegister" value="Register"> Register </button>
</section>
<div class="card-txt register-fields">
<section class="fields-partition">
<label for="firstname-inp">First Name</label>
<input name="txtfirstname" type="text">
<label for="lastname-inp">Last Name</label>
<input name="txtlastname" type="text">
<label for="username-inp">Username</label>
<input name="txtusername" type="text">
</section>
 
<section class="fields-partition">
<label for="email-inp">Email</label>
<input name="txtemail" type="text">
<label for="region-inp">Region</label>
<input name="region-inp" type="text">
<label for="password-inp">Password</label>
<input name="txtpassword" type="password">
</section>
</div>
</div>
</main>
 
        <footer>
<p>Manuel Gonzalez and Uriel Alexis Parantar</p>
<p>BSCS-2</p>
</footer>
</section>
</body>
</form>
</html>

<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['txtfirstname'];		
		$lname=$_POST['txtlastname'];
		//$gender=$_POST['txtgender'];
		//for tbluseraccount
		$email=$_POST['txtemail'];		
		$uname=$_POST['txtusername'];
		$pword=$_POST['txtpassword'];
		//save data to tbluserprofile			
		
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
			mysqli_query($connection,$sql);
			$sql1 ="Insert into tbluserprofile(firstname,lastname,gender) values('".$fname."','".$lname."','".$gender."')";
			mysqli_query($connection,$sql1);
			echo "<script language='javascript'>
						alert('New record saved.');
			</script>";
			//header("location: index.php");
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
			</script>";
		}
	}
?>
 
 
