<?php
define('BASE_URL', 'http://localhost/librarysys/');

$stylesheet_url = BASE_URL . "main-1.css";
$script_url = BASE_URL . 'main-1.js';
$signup="signup.php";
$favicon="/favicon.png";
$htmlPagePath = '/main-1.html';
$imagePath = '/-1.png';
$videoPath = '/video.mp4';
$sidebar='/icons8-menu-50.png';
$cancel="/icons8-cancel-30.png";
$d="/icons8-drama-96.png";
$h="/icons8-horror-48.png";
$s="/icons8-sci-fi-48.png";
$f="/icons8-fantasy-48.png";
$a="/icons8-adventure-64.png";
$c="/icons8-comic-100.png";
$b="/icons8-biography-64.png";
$ac="/icons8-action-48.png";
$hi="/icons8-history-64.png";
$l="/icons8-love-circled-48.png";
$de="/icons8-detective-60.png";
$p="/icons8-poetry-64.png";
$s="/icons8-test-tube-48.png";
$w="/icons8-war-62.png";
$c="/icons8-classic-67.png";
$pol="/icons8-politics-50.png";
$ch="/icons8-children-64.png";
$ro="/icons8-romance-66.png";
$tech="/icons8-technology-100 (1).png";
$geo="/icons8-geography-64.png";
$dropdown="/icons8-dropdown-64.png";
$book="/books.png";
$personalize="icons8-recommendation-24.png";
$easy="/icons8-easy-50.png";
$free="/icons8-free-64.png";
$head="/icons8-community-50.png";
$mobile="/icons8-mobile-friendly-64.png";
$gif="/fuzrs6KJ00.gif";
$about="about.php";
$topdropdown="/top dropdown.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddy Library</title>
    <link rel="stylesheet" href="main-1.css?v=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL.$favicon?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Lato:wght@400;700&family=Martel:wght@600&family=Noto+Sans:wght@500&family=Nunito+Sans:opsz@6..12&family=Oswald:wght@600&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Lato:wght@400;700&family=Martel:wght@600&family=Noto+Sans:wght@500&family=Nunito+Sans:opsz@6..12&family=Oswald:wght@600&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@800&family=Inter:wght@800&family=Martel:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Martel:wght@600&family=Noto+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Inter:wght@500&family=Martel:wght@600&family=Noto+Sans:wght@500&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <header>
        <h5>📚Start your literary adventure now..! Sign up and dive into world of Education. 🚀</h5>
    </header>
    <nav>
        <div class="navbar-1">
        <a href="<?php echo BASE_URL . $htmlPagePath; ?>">
    <img src="<?php echo BASE_URL . $imagePath; ?>" alt="logo" id="logo">
</a>
        <div class="elements-1">
            <a href="/main-1.html" id="home" class="nav-link">Home</a>
            <a href="/anime.html" id="howitworks" class="nav-link">How it Works ?</a>
            <a href="/books.html" id="books" class="nav-link">Learn</a>
            <a href="/authors.html" id="author" class="nav-link">Downloads</a>
            <a href="<?php echo BASE_URL.$about?>" id="about" class="nav-link">About</a>
        </div>
        </div>
        <div class="navbar-2">
            <a href="" id="contact">Contact Us</a>
            <a href="/login-1.html" id="login" >Login</a>
            <a href="<?php echo BASE_URL.$signup?>" id="signup">Sign Up</a>
            <img src="<?php echo BASE_URL.$sidebar?>" alt="" id="menu">
        </div>
    </nav>
    <div class="box">
        <div class="subbox">
        <div class="cancel-div"><img src="<?php echo BASE_URL.$cancel?>" alt="" id="cancel"></div>
        <div id="home-1"><a href="/main-1.html" class="nav_link">Home</a></div>
        <div id="how-1"><a href="anime.html" class="nav_link">How it works ?</a></div>
        <div id="books-1"><a href="" class="nav_link">Books</a></div>
        <div id="author-1"><a href="/authors.html" class="nav_link">Authors</a></div>
        <div id="about-1"><a href="/about.html" class="nav_link">About</a></div>
        <div id="contact-1"><a href="" class="nav_link">Contact Us</a></div>
        <div id="login-1"><a href="/login-1.html" class="nav_link">Login</a></div>
        <div class="signup-head">
        <a href="/signup.html" id="signup-1">Sign Up</a></div>
    </div>
    </div>
    <div class="row_1">
        <div class="col-1">
            <h1>Books are timeless portals to knowledge, empathy, and infinite possibilities.</h1>
            
            <div class="search-div">
                <input type="text" id="search-box" placeholder="Search Courses...">
                <input type="submit" value="Show" id="search-button">
            </div>

        </div>
        <div class="row-1-1">
            <div><video src="<?php echo BASE_URL . $videoPath; ?>" muted loop autoplay id="girl-watching-books"></video></div>
        </div>
        <div class="uparrow">
            <div class="feed-back">
                <div class="feedback-div">
                    <div class="close-box"><img src="/close.png" alt="close" id="help_close"></div>
                    <p>Is this page help full ?</p>
                    <input type="submit" value="Yes">
                    <input type="submit" value="No">
                </div>
            </div>
            <img src="icons8-feedback-60.png" alt="topdown" id="topup">
        </div>
    </div>
    <div class="genere-section">
            <div class="col-2">
                <div id="pick-genres"><p id="genre">Select Topics</p></div>
                <div id="para">Choose your topics and embark on a delightful reading journey for a fun-filled escape.</div>
        </div>
    <div class="genre-box">
    <div class="box-items-1">
        <div class="box-1">
            <div id="div1"><img src="<?php echo BASE_URL.$d?>" alt="" id="drama"><p>Drama</p></div>
            <div id="div2"><img src="<?php echo BASE_URL.$h?>" alt="" id="horror"><p>Horror</p></div>
            <div id="div3"><img src="<?php echo BASE_URL.$s?>" alt="" id="horror"><p>Sci-fi</p></div>
            <div id="div4"><img src="<?php echo BASE_URL.$f?>" alt="" id="horror"><p>Fantasy</p></div>
        </div>
    </div>
    <div class="box-items-2">
        <div class="box-2">
            <div id="div5"><img src="<?php echo BASE_URL.$a?>" alt="" id="adv"><p>Adventure</p></div>
            <div id="div6"><img src="<?php echo BASE_URL.$c?>" alt="" id="comic"><p>Comic</p></div>
            <div id="div7"><img src="<?php echo BASE_URL.$b?>" alt="" id="bio"><p>Biography</p></div>
            <div id="div8"><img src="<?php echo BASE_URL.$ac?>" alt="" id="action"><p>Action</p></div>
        </div>
    </div>
    <div class="box-items-3">
        <div class="box-3">
            <div id="div9"><img src="<?php echo BASE_URL.$hi?>" alt="" id="History"><p>History</p></div>
            <div id="div10"><img src="<?php echo BASE_URL.$l?>" alt="" id="Love"><p>Love</p></div>
            <div id="div11"><img src="<?php echo BASE_URL.$de?>" alt="" id="detective"><p>Detective</p></div>
            <div id="div12"><img src="<?php echo BASE_URL.$p?>" alt="" id="poe"><p>Poetry</p></div>
        </div>
    </div>
    
    <div class="box-items-4">
        <div class="box-4">
            <div id="div13"><img src="<?php echo BASE_URL.$s?>" alt="" id="roma"><p>Science</p></div>
            <div id="div14"><img src="<?php echo BASE_URL.$w?>" alt="" id="war"><p>War</p></div>
            <div id="div15"><img src="<?php echo BASE_URL.$c?>" alt="" id="classic"><p>Classic</p></div>
            <div id="div16"><img src="<?php echo BASE_URL.$pol?>" alt="" id="detec"><p>Politics</p></div>
        </div>
        </div>
        <div class="box-items-5">
        <div class="box-5">
            <div id="div16"><img src="<?php echo BASE_URL.$ch?>" alt="" id="child"><p>Children</p></div>
            <div id="div17"><img src="<?php echo BASE_URL.$ro?>" alt="" id="rom"><p>Romance</p></div>
            <div id="div18" ><img src="<?php echo BASE_URL.$tech?>" alt="" id="tech"><p>Technology</p></div>
            <div id="div19"><img src="<?php echo BASE_URL.$geo?>" alt="" id="geo"><p>Geography</p></div>
        </div>
        </div>
    
        <div id="drop_down_1">
            <div id="drop_down_sub_div">
                <img src="<?php echo BASE_URL.$dropdown?>" alt="" id="drop_down"><img src="<?php echo BASE_URL.$topdropdown?>" alt="" id="top_down">
            </div>
        </div>
        
    </div>
</div>
<div class="how-row">
    <div class="howitworks">
            <div class="heading">
                <p>How it is Useful?</p>
            </div>
            <div class="matter-1">
                <div id="col-5">
                    <div id="head-extensive">
                    <img src="<?php echo BASE_URL.$book?>" alt="" id="setbooks"><p id="extensive">Extensive Collection</p></div>
                    <p id="sub-matter-1">Buddy Library often have a vast collection of books and resources. </p>
                </div>
                <div id="col-6">
                    <div id="head-personalized">
                    <img src="<?php echo BASE_URL.$personalize?>" alt="" id="personalized-icon"><p id="personalized">Personalized Recommendations</p></div>
                    <p id="sub-matter-2">Our smart recommendation system suggests books tailored to your preferences, ensuring you never miss a great read.</p>
                </div>
                <div id="col-7">
                    <div id="head-easy">
                    <img src="<?php echo BASE_URL.$easy?>" alt="" id="easyhand"><p id="easy">Easy to Use</p></div>
                    <p id="sub-matter-3">Our platform is easy to use and navigate, making it a breeze to find your next favorite book.</p>
                </div>
            </div>
            <div class="matter-2">
                <div id="col-8">
                    <div id="head-free">
                        <img src="<?php echo BASE_URL.$free?>" alt="" id="free-icon">
                    <p id="free">Free to Use</p></div>
                    <p id="sub-matter-3">Our platform is free to use, so you can enjoy your favorite books without worrying about the cost.</p>
                </div>
               
                <div id="col-9">
                    <div id="head-community">
                    <img src="<?php echo BASE_URL.$free?>" id="community-icon"><p id="commun">Community</p></div>
                    <p id="sub-matter-3">Our platform is mobile-friendly, so you can enjoy your favorite books on the go.</p>
                </div>

                <div id="col-10">
                    <div id="head-mobile">
                    <img src="<?php echo BASE_URL.$mobile?>" alt="" id="mobile-friendly"><p id="mobile">Mobile Friendly</p></div>
                    <p id="sub-matter-3">Our platform is mobile-friendly, so you can enjoy your favorite books on the go.</p>
                </div>
            </div>
    </div>

    <!-- <div class="internet-check">
        <div class="check-1">
            <img src="no-internet-connection-5521509-4610093.webp" alt="" id="internet">
        <div class="matter-3">
            <p id="matter-1">Whoops!</p>
            <p id="matter-2">No internet connection found.Check your connection or try again.</p>
        </div>
            <input type="submit" value="Try Again" id="try-again">
        </div>
    </div> -->

    <div class="quiz-div">
        <div class="quizbox">

        </div>
    </div>

        <div class="contact">
            <div class="contact-form">
                    <div class="contact-head-1">
                        <p id="question-1">Questions about Buddy Library?</p>
                    </div>
                    <div class="contact-head-2">
                        <p>If you need any help regarding our Buddy Library, please get in touch with our team using form below.</p>
                    </div>
                    <div class="contact-form-1-1">
                        <label for="" id="first-name">First name*</label><br>
                        <div id="input-first"><input type="text" placeholder="Your First name" id="name"></div>
                    </div>
                    <div class="contact-form-1-2">
                        <label for="" id="last-name">Last name*</label><br>
                        <div id="input-first"><input type="text" placeholder="Your Last name" id="name"></div>

                    </div>
                    <div class="contact-form-1-3">
                        <label for="" id="email-tag">Email*</label><br>
                        <div id="input-first"><input type="email" placeholder="Your email address" id="name"></div>
                    </div>
                    <div class="message-div">
                        <label for="" id="message-tag">Message*</label><br>
                        <div id="message-1"><textarea id="message" type="text" placeholder="Your message"></textarea></div>
                    </div>
                    <p id="last-para">Our team needs the contact information you provide to us to contact you about our books and services. You may unsubscribe from these communication at anytime.</p>

                    <div class="send-button">
                        <input type="submit" value="Submit" id="send">
                    </div>
            </div>
            <div class="contact-gif">
                <img src="<?php echo BASE_URL.$gif?>" alt="" id="contact-img">
            </div>
    </div>
<br><br><br><br><br>
<footer>
    <div class="foot">
        <div class="foot-1">
            <p id="footer-heading">Buddy Library</p>
            <a href="">Browse by Genre</a>
            <a href="">New Arrivals</a>
            <a href="">Popular Reads</a>
            <a href="">Library Policies</a>
            <a href="">Educational Resources</a>
            <a href="">Library Mission</a>
        </div>
        <div class="foot-2">
            <p id="footer-heading">Journey Through</p>
            <a href="">Hidden Gems</a>
            <a href="">Thematic Collections</a>
            <a href="">Genre Excursionse</a>
            <a href="">Join Our Team</a>
            <a href="">Reading Histories</a>
            <a href="">Book Recommendations</a>
        </div>
        <div class="foot-3">
            <p id="footer-heading">Help</p>
            <a href="/main-1.html">FAQs</a>
            <a href="main-1.html">Report A Problem</a>
            <a href="main-1.html">Privacy and Security</a>
            <a href="main-1.html">Feedback</a>
            <a href="main-1.html">Tutorials and Guides</a>
        </div>
        <div class="foot-4">
            <p id="footer-heading">Follow Us</p>
            <div class="icons">
                <a href="https://github.com/singghh" target="_blank"><img src="/icons8-github-30.png" alt="" id="github"></a>
                <a href="https://twitter.com/YUGEN___STUDIO" target="_blank"><img src="/icons8-twitter-50.png" alt="" id="twitter"></a>
                <a href="www.linkedin.com/in/bamla-varun-singh-b05245259" target="_blank"><img src="/icons8-linkedin-50.png" alt="" id="linkedin"></a>
            </div>
        </div>
        <div class="languages">
            <p id="footer-heading">Website Languages</p>
                <a href="" id="eng">English</a>
                <a href="" id="hind">Hindi</a>
                <a href="" id="Spanish">Spanish</a>
                <a href="" id="french">French</a>
                <a href="" id="german">German</a>
                <a href="" id="japan">Japanese</a>
                <a href="" id="china">Chinese</a>
                <a href="" id="russia">Russian</a>
                <a href="" id="Portuguese">Portuguese</a>
                <a href="" id="arabic">Arabic</a>
        </div>
        <div class="subscribe">
            <div><p id="footer-heading">Subscribe to our email newsletter</p></div>
            <div class="subscribe-button"><input type="email" placeholder="Your email" id="your-email" required><input type="submit" value="SUBSCRIBE" id="subscribe"></div>
        </div>
    </div>
    <div>
        <p id="footer-para">© 2023 Buddy Library. All Rights Reserved.</p>
    </div>
</footer>


<script src="<?php echo $script_url; ?>"></script>
<script>
     ScrollReveal({ reset: true },
     { delay: 400 },
     { duration: 2500 },
     { distance: '200px'},
     { easing: 'ease-in'});

    ScrollReveal().reveal('#girl-watching-books', { delay: 400, duration: 700, distance: '50px', easing: 'ease-in' });
    ScrollReveal().reveal('.col-1', { delay: 400, duration: 700, distance: '60px', easing: 'ease-in',origin: 'left'});
    ScrollReveal().reveal('#pick-genres', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'bottom'});
    ScrollReveal().reveal('#para', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'left'});
    ScrollReveal().reveal('.box-items-1', { delay: 100, duration: 1000, distance: '60px', easing: 'ease-in',origin: 'bottom'});
    ScrollReveal().reveal('.box-items-2', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'top'});
    ScrollReveal().reveal('.box-items-3', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'bottom'});
    ScrollReveal().reveal('#drop_down_1', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'top'});
    ScrollReveal().reveal('.howitworks', { delay: 100, duration: 1000, distance: '90px', easing: 'ease-in',origin: 'bottom'});
    ScrollReveal().reveal('.contact-gif', { delay: 100, duration: 1000, distance: '70px', easing: 'ease-in',origin: 'bottom'});
</script>

</body>
</html>