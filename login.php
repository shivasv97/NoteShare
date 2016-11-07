<?php

  session_start();
  $errors=array();
  if(isset($_SESSION['errors']))
    $errors=$_SESSION['errors'];
  else
    $errors="";
  ;
?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="icon" href="noteshare_icon.png">
     <link rel="stylesheet" type="text/css" href="log.css">
 
<title>Login To NoteShare </title>
<link rel="stylesheet" type="text/css" href="login.css"/>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Basic|Fjalla+One|Fredoka+One|Fruktur|Rock+Salt|Voltaire" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Basic|Cantarell|Fjalla+One|Fredoka+One|Fruktur|Rock+Salt|Voltaire" rel="stylesheet">
</head>
<body>
    <h1 class="header"><a href="homepage.html">NoteShare</a></h1>

<form id="msform" action="loggingin.php" method="post">
 
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login to NoteShare</h2>
    <span class="errors"></span>
    <input type="text" name="email" placeholder="Email" required/>
    <input type="password" name="pass" placeholder="Password" required/>
    
    
    
    <input type="submit" name="next" class="next action-button" value=Login /><br>
    <a href="signup.html">Dont have an account? Click here to sign-up</a>
    
  </fieldset>
  
</form>
<script type="text/javascript">
  var sp=document.querySelector('.errors');
  var errors="<?php print($errors[0])?>";
  sp.innerHTML=errors;
</script>
<?php 
  session_destroy();
?>
</body>
</html>
