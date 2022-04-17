<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
  
    <link rel="stylesheet" type="text/css" href="views/indexpage.css">
    <style>
        .hero_section
{   position: relative;
    height: 900px;
    width: 100%;
    background-image:url(models/img.jpg);
    
}
    </style>
</head>
<body>
    <div class="menubar">
        <div class="menubar-icon">
            <img src="models/logo.png">
        </div>
        <div class="menubar-link">
            <a href="">Home |</a>
            <a href="views/loginList.php"> Login |</a>
            <a href="views/signuplist.php"> Signup |</a>
            <a href=""> About Us |</a>
            <a href=""> Contact Us</a>
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
            <img  src="models/change.png" width="10px" height="10px" onclick="changeImage1()">
         
            <img  src="models/change.png" width="10px" height="10px" onclick="changeImage2()">
        </div>

    </div>
        
</html> 
<script>
    function changeImage2(){
        document.getElementById('hero_area').style.backgroundImage = "url('models/img2.jpg')";
    }
    function changeImage1(){
        document.getElementById('hero_area').style.backgroundImage = "url('models/img.jpg')";
    }

    var image = document.getElementById("hero_area");
    var img_array=["models/img.jpg","models/img2.jpg"];
    var index=0;
    function slide()
    {

    document.getElementById("hero_area").style.backgroundImage = "url("+img_array[index]+")";
    index++;
    if(index>=img_array.length)
    {
    index=0;
    }
    }
setInterval("slide()",2000);
</script>