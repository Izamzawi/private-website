<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Nunito:400,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Idham Zamzawi's Portfolio</title>
</head>
<body>
    <div id="wrapper">

        <div class="container">
            <div class="box box-left"></div><div class="box box-left"></div>
            <div class="box box-left"></div><div class="box box-left"></div>    
            <div class="box box-left"></div><div class="box box-left"></div>    
            <div class="box box-left"></div><div class="box box-left"></div>    
            <div class="box box-left"></div><div class="box box-left"></div>    
            
            <div class="box box-right"></div><div class="box box-right"></div>    
            <div class="box box-right"></div><div class="box box-right"></div>    
            <div class="box box-right"></div><div class="box box-right"></div>    
            <div class="box box-right"></div><div class="box box-right"></div>    
            <div class="box box-right"></div><div class="box box-right"></div>    
        </div>

        <nav id="navbar">
            <a href="index.php"><img id="weblogo" src="logo.jpg" alt="website logo"></a>

            <input type="checkbox" class="mobile-menu" id="mobile-menu">
            <label for="mobile-menu"><div class="menu-btn menu-btn-active">...</div></label>

            <ul class="navmenu navmenu-down">
                <li>
                    <a class="menu" href="#about">About me</a>
                </li>
                <li>
                    <a class="menu" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="menu" href="#contacts">Contact</a>
                </li>
            </ul>
        </nav>

        <div id="page-view">

            <div id="about">
                <h2 class="intro">My name is <span class="id">Idham Zamzawi</span>.<br>
                I'm able to utilize <span id="wslide1">HTML, CSS and JavaScript.</span></h2>
                <h2 class="intro">My name is <span class="id">Idham Zamzawi</span>.<br>
                I'm able to utilize <span id="wslide2">PHP and MySQL.</span></h2>
                <div id="story-box">
                    <p id="story">I have not ever work in any company. Still, I am confident in my skill. I am willing to learn new languange and new framework. At the moment I enrolled a course in front-end web development.</p>
                </div>
            </div>

            <div id="projects">
                <h3 class="section-header">Some of my work...</h3>
                <div id="projects-box">
                    <div class="project">
                        <a href="http://setilisti.id/">
                            <img class="project-img" src="dummy.jpg" alt="blog project">
                            <p class="project-title">Personal Blog Demo</p>
                        </a>
                    </div>
                    <div class="project">
                        <a href="agency-web">
                            <img class="project-img" src="dummy.jpg" alt="agency web">
                            <p class="project-title">Agency Web Demo</p>
                        </a>
                    </div>
                    <div class="project">
                        <a href="calculator">
                            <img class="project-img" src="dummy.jpg" alt="simple calculator">
                            <p class="project-title">Simple Calculator</p>
                        </a>
                    </div>
                </div>
                <p id="project-other">Some of my not-so-good practice,<br><a id="codepen" href="https://codepen.io/izamzawi">here.</a></p>
            </div>

            <div id="contacts">
                <h3 class="section-header">We can meet each other on...</h3>
                <div id="contacts-box">
                    <div class="contact">
                        <a href="mailto:idhamzamzawi@gmail.com" class="contact-id">
                            <img src="" alt="email" class="contact-logo">Email to me</a>
                        </div>
                    <div class="contact">
                        <a href="https://www.facebook.com/idham.zamzawi" class="contact-id">
                            <img src="" alt="facebook" class="contact-logo">Idham Zamzawi</a>
                        </div>
                    <div class="contact">
                        <a href="https://twitter.com/izamzawi" class="contact-id">
                            <img src="" alt="twitter" class="contact-logo">@Izamzawi</a>
                        </div>
                    <div class="contact">
                        <a href="https://www.instagram.com/dmzzw" class="contact-id">
                            <img src="" alt="instagram" class="contact-logo">@dmzzw</a>
                        </div>
                </div>
            </div>
            <footer>
                <p id="note">2019. Idham Zamzawi.</p>
            </footer>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>