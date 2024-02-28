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