<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women safety</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bootstrap.css">
    <style>
  input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #03a9f4;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0373f4;
}

.container3 {
  border-radius: 5px;
  background-color: #f1f8fc;
  padding: 20px;
  
}

h1{
    justify-content: center;
    display: flex;
    padding: 8px;
    margin: 48px 45px 2px 13px;
}
footer{
    margin: 8px 1pc 8px 8px;
    padding: 19px;
    height: 8vh;
    background-color: #03a9f4 ;
    color: white;
    font-family: 'Lato', sans-serif;
}
.social-icon{
    color:white;
    transition:color 0.2s;  
}
.social-icon:hover{
  color:blue;
}
    </style>
</head>
<body>
<div class="loader_bg">
    <div class="loader"></div>
</div>
    <div class="nav">
        <div class="logo">
            <img src="media/logo.png" alt="">
            Women's safety
        </div>
        <span onclick="open_nav()" class="nav-toggle-open">&#9776;</span>
        <nav class="links" id="Sidenav">
            <span onclick="close_nav()" class="nav-toggle-close">&times;</span>
            <a href="#top" class="link">Home</a>
            <a href="#aboutUs" class="link">About</a>
            <a href="#defence" class="link">safety videos</a>
            <a href="#contact" class="link">Contact us</a>
            <a href="login.php" class="login">login</a>
        </nav>
    </div>
    <section class="bodySection">
        <div class="left">
            <div class="title">
               Save Yourself,<br>
                By Just One Click.
            </div>
            <div class="button">
           <a href="signup.php"style="text-decoration: none;color: white;">sign-up</a>
            </div>
        </div>
        <div class="right">
            <img src="media/girl.png" alt="">
        </div>
    </section>
    <section class="about-us" id="aboutUs">
        <div class="left">
            <div class="title">About Us</div>
            <div class="disc">
                We Are Here To Make Every Women Safe. We Promise Every Women To Make Them Feel Safer And Protected.
"Fight Back! Be Alert!!" Is Our Main Motto And We're Dedicated To Providing You The Very Best Technological Measures To Ensure Your Security For 24x7.
Women Can Rely On The Website So That They Can Be Given Help. This Is An Approach To Beat The Crime Rate Against Women Incrasing In The Society.
We Hope That Our Services Make You Feel Stronger And Safer For All Times.
            </div>
        </div>
            <div class="right">
                <img src="media/team.png" alt="">
            </div>
    </section>
    <section class="defence" id="defence">
        <div class="title">
            Defence Videos
        </div>
        <div class="videos">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9m-x64bKfR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/M4_8PoRQP8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GGEneFBxkq8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/k9Jn0eP-ZVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UqZuhhCFUzo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/e64AtWekQVo"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls muted autoplay></iframe>
            </div>
        </div>
    </section>
   <section id="contact">
    <div class="container3">
<h1>Contact Us</h1>
    <form action="https://formsubmit.co/palakkothari267@gmail.com" method="POST">
    <label for="fname"style="justify-content: left;display: flex;"  >First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname"style="justify-content: left;display: flex;"  >Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


    <label for="subject"style="justify-content: left;display: flex;"    >Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
    </section>

    <footer class="flex-all-center">
        <p>Copyright &copy; Palak_kothari 
        <a class="social-icon" href="https://twitter.com/palak9899" target="_blank">
        <ion-icon name="logo-twitter"></ion-icon></a>
        <a class="social-icon" href="https://github.com/Palakkotharii" target="_blank">
        <ion-icon name="logo-github"></ion-icon>
        <a class="social-icon" href="https://www.linkedin.com/in/palak-kothari-a8902b21a/" target="_blank">
        <ion-icon name="logo-linkedin"></ion-icon>
        </p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
  
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  


</body>
<script src="js/main.js"></script>
</html>
        
