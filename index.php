<?php
	include 'connect.php'
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends - Home</title>

    <link rel="stylesheet" href="CSS/root.css">
    <link rel="stylesheet" href="CSS/general.css">

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
            <img id="banner-img" src="images/home_banner.png" alt="home banner">
        </section>
    
        <nav>
            <a href="register.php"><button>REGISTER</button></a>
            <a href="login.php"><button>LOGIN</button></a>
            <a href="index.php"><button>HOME</button></a>
            <a href="aboutus.php"><button>ABOUT US</button></a>
            <a href="contactus.php"><button>CONTACT US</button></a>
        </nav>

        <main>
            <div class="card">
                <section>
                    <p class="card-title"> Hero of the DAY!</p>
                </section>
                <p class="card-txt">
                    The hero of the day is <b>LAYLA!</b>
                </p>
            </div>
        </main>

        <footer>
            <p>Manuel Gonzalez and Uriel Alexis Parantar</p>
            <p>BSCS-2</p>
        </footer>
    </section>
</body>
</html>