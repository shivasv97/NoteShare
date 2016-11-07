<?php 
	//include_once 'signup.html';
?>
<!DOCTYPE HTML>
<head>
   
<link rel="icon" href="noteshare_icon.png">
<link rel="stylesheet" type="text/css" href="sign.css">


<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Basic|Fjalla+One|Fredoka+One|Fruktur|Rock+Salt|Voltaire" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Basic|Cantarell|Fjalla+One|Fredoka+One|Fruktur|Rock+Salt|Voltaire" rel="stylesheet">
</head>


<body>
    <h1 class="header"><a href="gb.html">NoteShare</a></h1>
<form id="details" name="signup"  action="signup.php" method="post" onsubmit="return validateAll();">
 
  
  <fieldset>
    <h2 class="form-title">Sign-up for NoteShare</h2>
    <span class="exists"></span>
    <input type="text" name="name" placeholder="Name" required />
    <input type="email" name="email" placeholder="Email" required />
    <input class="pass1" type="password" name="pass" placeholder="Password" required/>
    <input class="pass2" onblur="validate()" onmouseleave="validate()" type="password" name="cpass" placeholder="Confirm Password" required/>
    <span class="pwdcon"></span>
    <input type="text" name="cnum" pattern="\d+" onblur="validate1()" onmouseleave="validate1()" placeholder="Contact Number" />
    <span class="connochk"></span>
    <input type="submit" name="next" class="next action-button" value=SIGNUP />
    
  </fieldset>
  
</form>
<script type="text/javascript">
  var sp=document.querySelector('.pwdcon');
  var sp1=document.querySelector('.connochk');
  //var sp1=document.querySelector('.conno');
  var subm=true;
  //sp.innerHTML='hello';
  function validate(){
    var pwd1=document.forms["signup"]["pass"].value;
    var pwd2=document.forms["signup"]["cpass"].value;
    
    if(pwd1!=pwd2) {
     sp.innerHTML='Passwords don\'t match';
     subm=false;
    }
    
    else{
      sp.innerHTML='';
      subm=true;
    }
    return subm;
  }
  function validate1(){
  	var conum=document.forms["signup"]["cnum"].value;
    if(isNaN(conum)||conum.length<10){
    	sp1.innerHTML='This field should be a number with minimum length of 10';
    	subm=false;
    }
    else{
    	sp1.innerHTML='';
    	subm=true;
    }
    return subm;
  }
  
  function validateAll(){
  	var name=document.forms["signup"]["name"].value;
  	var email=document.forms["signup"]["email"].value;
  	var pwd1=document.forms["signup"]["pass"].value;
    var pwd2=document.forms["signup"]["cpass"].value;
    var conum=document.forms["signup"]["cnum"].value;
    
    
    if(name==""||email==""||pwd1==""||pwd2==""||conum==""){
    	return false;
    }
    else{
    	subm=validate();
    	if(subm==true)
    		subm=validate1();
    	//alert(subm);
    	return subm;
    }
  }
	var exist=document.querySelector('.exists');
	exist.innerHTML='The email already exists';
</script>
</body>
</html>

