<!DOCTYPE html>
<html>

<head>

    <title>Kalit Toram</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
                    /* styles.css */
        body {
            margin: 0;
            padding: 0;
        }

        body {
            padding-top: 200px; /* Adjust the value as needed to create enough space for your fixed header */
            background-image: url('https://toram.jp/pc/images/toram/title_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }

        .fixed-image {
            position: fixed;
            margin: 0;
            padding: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Place it behind other content */
        }

        /* Style for the background */
        .background {
            position: fixed;
            margin: 0;
            padding: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2; /* Place it behind everything */
        }

        /* Add a new CSS class for the fixed header */
        .fixed-header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000; /* Adjust the z-index as needed to ensure it appears above other elements */
        }

        /* Style for the page content */
        .content {
            position: relative;
            z-index: 1; /* Place it above the image and background */
            padding: 20px;
        }

        /* Set all text color to white */
        body, h1, h2, h3, h4, h5, h6, p, a {
            color: #ffffff;
        }



        body {
            position: relative;
            background: url('https://toram.jp/pc/images/toram/title_bg.jpg') 50% 0 no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        body:after {
            content: "";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100vh;
            background: url('https://toram.jp/pc/images/toram/title_bg.jpg') 50% 0 no-repeat;
            background-size: cover;
        }

        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap');

        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Orbitron', sans-serif;
        }

        .profile-card {
            background-color: rgba(51, 51, 51, 0.5);
            border-radius: 10px;
            box-shadow: 0 0px 10px 0 rgba(255, 255, 255, 0.5);
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 100%;
            border-radius: 10px;
        }

        .skills-bar {
            margin-top: 10px;
        }

        .skills-label {
            font-weight: bold;
        }

        /* Navbar styles */
        .navbar {
            overflow: hidden;
            background-color: #ffffff;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #11ff4100;
            color: rgba(235, 235, 235, 0.816);
        }

        /* Styles for the combined header and navbar */
        .header-navbar {
            background-color: rgba(51, 51, 51, 1);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .w3-content {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }

        .descr {
            width: 299px;
            height: 61.5px;
            padding: 10px auto;
            margin: 0 auto; }

        .gif {
            width: 100%;
            height: 550px;
        }

        .snow {
            width: 100%;
            height: 100%;
            background-image: url('https://i.ibb.co/d473RNv/CORE-LOGO.gif');
            background-repeat: no-repeat;
            background-size: 70%;
            background-position: center; /* Center-align the background image */
            mix-blend-mode: screen;
        }

        /* Default styles for the navbar links */
        .navbar a {
            text-decoration: none;
            padding: 10px 15px;
            color: #000; /* Default text color */
        }

        /* Style for the active link */
        .navbar a.active {
            background-color: white; /* Set the background color for the active link */
            color: #2196F3; /* Set the text color for the active link */
        }
    </style>
</head>

<body class="w3-light-grey">
    <div class="title-section w3-container w3-grey w3-center">
        <h1>Profile</h1>
    </div>
    <!-- Combined Header and Navbar -->
    <div class="header-navbar fixed-header">
        <div class="title-header w3-left-align">
            <h1 class="w3-text-white"></i>Toram Online</h1>
        </div>
        <div class="navbar">
            <a href="home.html">Home</a>
            <a href="profile.html">Profile</a>
            <a href="academy.html">Academy</a>
            <a href="login.html" onclick="showLogoutConfirmation()">Logout</a>
        </div>
    
        <script src="script.js"></script>
    </div>
    
    <div class="w3-content w3-margin-top" style="max-width: 1400px;">
        <!-- The Grid -->
        
        <div class="w3-row-padding">
            <!-- Left Column -->
            <div class="w3-half">
                <div class="profile-card">
                    <div id="about"></div>
                    <h2 class="w3-text-white w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>About</h2>
                    <div class="w3-display-container">
                        <img src="https://i.ibb.co/Jp8zfCs/Kalit.jpg" alt="Kalit" border="0"" style="width:50%" alt="Avatar" class="profile-picture">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                        </div>
                    </div>
                    <table style="color: white;">
                        <tr>
                          <td style="width: 200px;"><b>Name</b></td>
                          <td>: Khalid Ibnu Natsir</td>
                        </tr>
                        <tr>
                          <td><b>Birthdate</b></td>
                          <td>: Pontianak, 14 July 2003</td>
                        </tr>
                        <tr>
                          <td><b>Hobby</b></td>
                          <td>: Game Modder, Toram Online, Music</td>
                        </tr>
                      </table>
                      <br>
                      <table style="color: white;">
                      <p> Favorite Foods: </p> 
                      <p> Grilled/Fried Chicken</p> 
                      <p>Ramen</p> 
                      <p> Steak</p> 
                      <p> Beef Stew</p> 
                      </table>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Full-Stack Developer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Pontianak, Kal-Bar</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>H1101221046@student.untan.ac.id</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>087819451419</p>
                        <hr>
                        <p class="w3-large"><i class="fa fa-asterisk fa-fw w3-margin-right w3-large w3-text-blue"></i>Skills</p>
                        <p class="skills-label">Front-End</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:80%">80%</div>
                        </div>
                        <p class="skills-label">Back-End</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:70%">70%</div>
                        </div>
                        <p class="skills-label">UI & UX</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:100%">100%</div>
                        </div>
                        <p class="skills-label">Database</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:60%">60%</div>
                        </div>
                        <br>
                        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Language</b></p>
                        <p class="skills-label">English</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-blue" style="height:24px;width: 100%"></div>
                        </div>
                        <p class="skills-label">Indonesian</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-blue" style="height:24px;width:100%"></div>
                        </div>
                        <p class="skills-label">Japanese</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-blue" style="height:24px;width: 30%"></div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="w3-half">
                <div class="profile-card">
                    <div id="portfolio"></div>
                    <h2 class="w3-text-white w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Portofolio</h2>
                    <div class="w3-container">
                        <h5><b>Graphic Designer</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - <span class="w3-tag w3-blue w3-round">Now</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5><b>Front-End Developer</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2022 - <span class="w3-tag w3-blue w3-round">Now</span></h6>
                        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5><b>Back-End Developer</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2022 - <span class="w3-tag w3-blue w3-round">Now</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5><b>UI & UX Designer</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2023 - <span class="w3-tag w3-blue w3-round">Now</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-card">
                    <div id="education"></div>
                    <h2 class="w3-text-white w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Education</h2>
                    <div class="w3-container">
                        <h5><b>S1</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Sistem Informasi</h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5><b>S2</b></h5>
                        <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Teknologi Informasi</h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                </div>
                
            </div>
        </div>
            <!-- Middle Column -->
            <div class="w3-full">
                <div class="profile-card">
                    <div id="introduction"></div>
                    <h2 class="w3-text-white w3-padding-16"><i class="fa fa-id-card fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Introduction</h2>
                    <div class="w3-container">
                        <p>Hello, I'm Khalid Ibnu Natsir, a Full-Stack Developer with a passion for crafting digital experiences that captivate and engage users. As I embark on my journey in the world of web development, I'm thrilled to be part of a team that values innovation, creativity, and continuous learning.
                            I've always been drawn to the endless possibilities that the digital realm offers, and my commitment to expanding my skill set drives me to stay up-to-date with the latest technologies and trends in web development. I believe in the power of well-structublue code, intuitive design, and seamless functionality to create websites that leave a lasting impression.
                            While I may be a Junior Full-Stack Developer, I bring a fresh perspective, an eagerness to collaborate, and an unwavering dedication to delivering high-quality solutions. With every line of code I write and every project I contribute to, I'm committed to growing as a developer and helping our team achieve its goals.
                            I'm excited to be here, ready to tackle challenges, learn from experienced colleagues, and make a meaningful impact in the ever-evolving field of web development. Let's embark on this exciting journey together as we shape the digital landscape one project at a time.</p>
                        <hr>
                    </div>
                </div>
                
            </div>
                
            </div>
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
    <footer class="w3-container w3-grey w3-center w3-margin-top">
        <div>
            <p>Media Sosial</p>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <div>
            <a href="http://en.toram.jp/">
                <img src="https://toram.jp/pc/images/toram/main_title.png" alt="Toram-Online" border="0"" alt="Your Image Here" class="footer-image" width="160" height="90">
            </a>
        </div>
    </footer>

    <script>
        function showLogoutConfirmation() {
            var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
            if (confirmLogout) {
                // redirect to the logout page or perform logout actions
                window.location.href = "login.html";
            } else {
                // User canceled the logout
            }
        }
    </script>
</body>

</html>