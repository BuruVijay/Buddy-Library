<?php

define('BASE_URL', 'http://localhost/librarysys/');

$imagePath = '/-1.png';
$favicon="/favicon.png";
$script_url = BASE_URL . 'signup.js';
$main=BASE_URL."main-1.php";
$cancel="cancel.png";
$signup="signup.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddy Books - Sign Up</title>
    <link rel="stylesheet" href="signup.css?v=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL.$signup?>">
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL.$favicon?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Martel:wght@600&family=Noto+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Martel:wght@600&family=Noto+Sans:wght@500&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@800&family=Inter:wght@800&family=Martel:wght@800&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="box">
        <div class="head-1">
            <img id="books" src="<?php echo BASE_URL.$favicon?>" alt="logo">
            <img id="cancel" src="cancel.png" alt="cancel">
        </div><br>
        <div>
            <p id="bookworm">EXPLORE WORLD OF EDUCATION</p>
        </div><br>
        <form action="connect.php">
        <div class="head-3">
            <div class="f-name"><input id="input1" name="input1" type="text" required placeholder="First Name"></div>
            <div class="l-name"><input id="input2" name="input2" type="text" required placeholder="Last Name"></div>
            <div class="email"><input id="input3" name="input3" type="email" required placeholder="Email address"></div>
            <div class="password"><input id="input4" name="input4" type="password" required placeholder="Password"></div>
            <div class="select">
                <select name="countries" class="sub-select">
                    <option value="India">India</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Austria">Austria</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Pakisthan">Pakisthan</option>
                    <option value="Australia">Australia</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
            <div class="gender">
                    <div class="male">
                        <input id="gender-1" value="Male" name="Male">
                    </div>
                    <div class="male">
                        <input id="gender-2" value="Female" name="Female">
                    </div>
            </div>
        </div>
        <div class="content">
            <p id="para-2">By creating an account, you agree to Buddy Book's <a href="">Privacy Policy</a> and <a href="">Terms of Use</a></p>
        </div>
        <div class="button">
            <input type="submit" value="SIGN UP" id="submit">
        </div>
        </form>
    <div class="last-head">
        <p id="head">Already a member ?</p><a href="/login-1.html" id="head">Sign in</a>
    </div>
    </div>
</div>


<script src="signup.js">
</script>
</body>
</html>
