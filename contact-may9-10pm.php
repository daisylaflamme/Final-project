<!DOCTYPE HTML>
<html lang="en">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->
<head>
    <meta charset="utf-8">
<!--[if lt IE 9]>
        <script>
            document.createElement('header');
            document.createElement('nav');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
            document.createElement('hgroup');
        </script>
 <![endif]-->
 <meta charset="utf-8">
<meta name="description" content="Daisy's contact information">
<meta name="keywords" content=" contact, bussiness card, send message, daisy laflamme, web design, graphisc design, ui, ux, quincy ma, boston ma">
<meta name="robots" content="index,follow"/>
<!-- mobil device instructions -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/respond.js"></script>
    <title>Contact Daisy LaFlamme</title>
    <link rel="shortcut icon" href="images/desi.ico">
    <link rel="stylesheet" href="styles/main-4.css">
    <link rel="stylesheet" href="styles/form.css">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!-- Accordeon references and scripts -->
    <link rel="stylesheet" href="styles/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
     <!-- Google Analytics API -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48002628-1', 'daisylaflamme.net');
      ga('send', 'pageview');
    </script>
</head>

<body>
      <div class="row top-space">
        <div class="col-lg-3">
          <nav class="flower_container">
            <a href="index-3.html"><div class="stigma"><h1>Daisy LaFlamme<br><small>Web Designer</small></h1></div></a>
            <a href="resume.html"><div class="petal num_1 curent"><p>Resume</p></div></a>
            <a href="ws.html"><div class="petal num_2"><p>Web Design</p></div></a>
            <a href="projects.html"><div class="petal num_3"><p>Projects</p></div></a>
            <a href="art.html"><div class="petal num_4"><p>Graphic Design</p></div></a>
            <a href="dashboards.html"><div class="petal num_5"><p>Dashboards</p></div></a>
            <a href="mylab"><div class="petal num_6"><p>My Lab</p></div></a>
            <a href="certificates.html"><div class="petal num_7"><p>Certificates</p></div></a>
            <a href="contact.php"><div class="petal num_8"><p>Contact</p></div></a>
            <div class="stem"></div>
            <!--<div class="stem_mask"></div>-->
            <div class="leaf leaf_1"></div>
            <div class="leaf leaf_2"></div>
          </nav> 
        </div>

        <div class="col-lg-9">
            <h1>Contact Me</h1>
            <div class="ad"><img class="card" src="images/card.jpg" alt="Daisy Laflamme 5082929738 Quincy MA USA"></div>
            <div class="partners"></div>
            
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = 'From: DaisyLaflammeWebsite'; 
            $to = 'otli4ni4ka@yahoo.com'; 
            $subject = 'Contact';
            $human = $_POST['human'];
                    
            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                        
            if ($_POST['submit'] && $human == '4') {                 
                if (mail ($to, $subject, $body, $from)) { 
                echo '<p class="send">Your message has been sent!</p>';
            } else { 
                echo '<p class="red">Something went wrong, go back and try again!</p>'; 
            } 
            } else if ($_POST['submit'] && $human != '4') {
            echo '<p class="red">You answered the anti-spam question incorrectly!</p>';
            }
        ?>
            <h1>Send me a message</h1>
                <form method="post" action="contact.php">
                
            <label>Name</label>
            <input name="name" placeholder="Your Name" required>
                    
            <label>Email</label>
            <input name="email" type="email" placeholder="Your Email" required>
                    
            <label>Message</label>
            <textarea name="message" placeholder="Your Message" required></textarea>
             <label>*What is 2+2? (Anti-spam)</label>
        <input name="human" placeholder="Type Your Answer">       
            <input id="submit" name="submit" type="submit" value="Submit">
                
        </form>    
</div>
        </div>
    <br>   
      </div>
    </div>
  <hr>
  <div class="row"> 
    <div class="col-lg-4">
      <footer>
           <a href="mailto:daisy@daisylaflamme.net"><img src="images/e.gif" alt="Email"></a>
            <a target="_blank" href = "http://daisylaflamme.com/wordpress1/"><img src="images/w.gif" alt="Wordpress Blog"></a>
            <a target="_blank" href = "http://www.youtube.com/watch?v=cpE4PLeVico"><img src="images/y.gif" alt="YouTube Website Presintation"></a>
            <a target="_blank" href = "http://www.facebook.com/desi.pink.5"><img src="images/f.gif" alt="Facebook Profile"></a>
            <a target="_blank" href = "https://twitter.com/DesiPink"><img src="images/t.gif" alt="Twitter Profile"></a>
            <a target="_blank" href = "https://github.com/daisylaflamme"><img src="images/github.gif" alt="Github Account"></a>  
            <a target="_blank" href = "http://www.linkedin.com/in/desislavalaflamme"><img src="images/in.gif" alt="LinkedIn Profile"></a>  
            <p><small>
            <script type="text/javascript" >
                var today = new Date();
                document.write( "&copy;&nbsp;" );
                document.write( today.getFullYear() );
                document.write( ", Daisy LaFlamme, Boston, MA" )
            </script><br>
            <a href="mailto:daisy@daisylaflamme.net">daisy@daisylaflamme.net</a>
          </small></p>           
      </footer>
    </div>
  </div> 
</body>
</html>