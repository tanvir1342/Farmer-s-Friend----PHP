<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
  
    <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="views/loginList.php"> Login |</a>
            <a href="views/signuplist.php"> signup |</a>
            <a href=""> Logout </a>
        </div>
        
    </div>
    <div class="hero_section" id="hero_area">
        <div class="hero_section_text">
            <h1>We are Farmer's<br><span>Friend</span></h1>
        </div>
        <div class="button_hero">
            <button>click here</button>
        </div>
        <div class="change">
            <img  src="change.png" width="10px" height="10px" onclick="changeImage1()">
         
            <img  src="change.png" width="10px" height="10px" onclick="changeImage2()">
        </div>

    </div>
        
</html> 
<script>
    function changeImage2(){
        document.getElementById('hero_area').style.backgroundImage = "url('img2.jpg')";
    }
    function changeImage1(){
        document.getElementById('hero_area').style.backgroundImage = "url('img.jpg')";
    }
</script>