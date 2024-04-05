<?php    
    include 'connect.php'; 
    //require_once 'includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends - Login</title>

    <link rel="stylesheet" href="CSS/root.css">
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/login.css">

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
            <img id="banner-img" src="images/login_banner.png">
        </section>
    
        <nav>
            <a href="register.php"><button>REGISTER</button></a>
            <a href="login.php"><button>LOGIN</button></a>
            <a href="index.php"><button>HOME</button></a>
            <a href="aboutus.php"><button>ABOUT US</button></a>
            <a href="contactus.php"><button>CONTACT US</button></a>
        </nav>
        
        <main>
        
            <div class="card login-box">
                <section>
                    <input type="submit" name="btnLogin" value="Login"> 
                </section>
                <form method = "post">
                <div class="card-txt login-fields">
                    <label for="username-inp">Username</label>
                    <input name="txtusername" type="text">
                    <label for="password-inp">Password</label>
                    <input name="txtpassword" type="password">
                </div>
                </form>
            </div>
        
        </main>
        
        <footer>
            <p>Manuel Gonzalez and Uriel ALexis Parantar</p>
            <p>BSCS-2</p>
        </footer>
    </section>
</body>

</html>


 
 
 
<?php	
	if(isset($_POST['btnLogin'])){
		$uname=$_POST['txtusername'];
		$pwd=$_POST['txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql);	
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
</script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
</script>";
		}else{
			$_SESSION['username']=$row[0];
			header("location: index.php");
		}

	}

 
?>
 
