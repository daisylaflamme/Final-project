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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 773sp6k8rf2bmg
  onLoad: onLinkedInLoad
  authorize: true
</script>
<script type="text/javascript">
  var myPublicShare = [];

  window.onload = function () {
    var myPublicShareDiv = document.getElementById("mypublicshare");
    myPublicShareDiv.innerHTML += "<p>" + myPublicShare[1] + "</p><br>";
  }

  function onLinkedInLoad() {
    IN.Event.on(IN, "auth", onLinkedInAuth);
  }

  function onLinkedInAuth() {
    IN.API.Profile("me").result(displayProfiles);

    IN.API.MemberUpdates("me")
     .params({"type": "SHAR", "count": 20}) 
     .result(displayNetworkUpdates)
     .error(displayNetworkUpdatesError);

  }

  function displayProfiles(profiles) {
    member = profiles.values[0];
    document.getElementById("profiles").innerHTML = 
      "<p id=\"" + member.id + "\">Hello, " +  member.firstName + " " + member.lastName;
  }

  
  function displayNetworkUpdates(updates) {
    var profileDiv = document.getElementById("networkupdates");
       
    for (var i in updates.values) {
      var key = updates.values[i].updateKey; // each update has a unique key
      var share = updates.values[i].updateContent.person; // the person sharing content
      profileDiv.innerHTML += "<div class='row in-post'><div class='col-sm-3 in-img'><img src='" + share.pictureUrl + "'></div><div class='col-sm-8'><p id='" + key + "'> <span class='in-name'>" + share.firstName + " " + share.lastName 
        + " </span> shared <br><br> " + share.currentShare.comment + ".</p></div></div>";

      myPublicShare[i] = share.currentShare.comment;
      console.log(myPublicShare[i]);      
    }     
  }
  function displayNetworkUpdatesError(error) { return console.log("displayNetworkUpdatesError") }
</script>

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
    <div class="col-lg-3 col-md-3 col-sm-3">
      <nav class="flower_container">
        <a href="index-3.html"><div class="stigma"><h1>Daisy LaFlamme<br><small>Web Designer</small></h1></div></a>
        <a href="resume2.html"><div class="petal num_1 curent"><p>Resume</p></div></a>
        <a href="ws2.html"><div class="petal num_2"><p>Web Design</p></div></a>
        <a href="projects2.html"><div class="petal num_3"><p>Projects</p></div></a>
        <a href="art2.html"><div class="petal num_4"><p>Graphics</p></div></a>
        <a href="dashboards2.html"><div class="petal num_5"><p>Dashboards</p></div></a>
        <a href="mylab.html"><div class="petal num_6"><p>My Lab</p></div></a>
        <a href="certificates2.html"><div class="petal num_7"><p>Certificates</p></div></a>
        <a href="contact.php"><div class="petal num_8"><p>Contact</p></div></a>
        <div class="stem"></div>
        <!--<div class="stem_mask"></div>-->
        <div class="leaf leaf_1"></div>
        <div class="leaf leaf_2"></div>
      </nav> 
      <div class="clearfix"></div>
      <div class="flower_container connect">
        <a href="contact.php"><div class="stigma"><h1>Connect</h1></div></a>
        <a target="_blank" href = "https://twitter.com/DesiPink"><div class="petal num_1"><p>Twitter</p></div></a>
        <a target="_blank" href = "https://github.com/daisylaflamme"><div class="petal num_2"><p>Github</p></div></a>
        <a target="_blank" href = "http://www.linkedin.com/in/desislavalaflamme"><div class="petal num_3"><p>LinkedIn</p></div></a>
        <a target="_blank" href = "http://daisylaflamme.com/wordpress1/"><div class="petal num_4"><p>Blog</p></div></a>
        <a target="_blank" href="https://plus.google.com/u/0/"><div class="petal num_5"><p>Google +</p></div></a>
        <a target="_blank" href = "http://www.facebook.com/desi.pink.5"><div class="petal num_6"><p>Facebook</p></div></a>
        <a target="_blank" href = "http://www.youtube.com/watch?v=cpE4PLeVico"><div class="petal num_7"><p>YouTube</p></div></a>
        <a href="mailto:daisy@daisylaflamme.net"><div class="petal num_8"><p>Email</p></div></a>
        <div class="stem"></div>
        <!--<div class="stem_mask"></div>-->
        <div class="leaf leaf_1"></div>
        <div class="leaf leaf_2"></div>
      </div>  
    </div>
    
    <div class=" col-lg-9 col-md-9 col-sm-9">
      <div class="row">
        <div class="row-lg-6 col-md-6 col-sm-6">
          <h1>Contact me</h1>
          <div class="ad"><script type="IN/MemberProfile" data-id="http://www.linkedin.com/in/desislavalaflamme" data-related="false" data-format="inline"></script></div>
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

        <div class="row-lg-6 col-md-6 col-sm-6">
          <br>
          <div class="upto">  
            <p>What I am up to:</p>
            <a class="twitter-timeline" width="300" height="450" data-chrome="noheader nofooter transparent noscrollbar"  data-border-color="#0c717a" href="https://twitter.com/DesiPink"  data-widget-id="344905992468836354">Tweets by Daisy LaFlamme</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>  

      <!--login with linkedin to see my updates-->
      <br>
      <br>
      
      <small>Login with linkedin to see what I am up to</small>
      <script type="IN/Login"></script>
      <div id="profiles"></div>
      <!--member network updates
      <div id="networkupdates"></div> <br>
      <small>Public posts if any:</small>
      <div id="mypublicshare"></div> -->
    </div>  
  </div> 
  <hr>
  <div class="row"> 
    <div class="col-lg-10">
      <footer>  
        <p class="text-center"><small>
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