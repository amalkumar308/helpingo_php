<!DOCTYPE html>
<html ng-app="reg" class="ng-scope">
<head lang="en">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     

                <style type="text/css">

                
                          * {
                              margin: 0;
                              padding: 0;
                          }
                          body {
                              font-family: Calibri;
                          }
                          h3
                          {
                            font-weight: 300;
                              font-size: 4em;
                              color: #fff;
                              background-color: #f1f1f1;
                              padding: 10px 0 20px 10px;
                              margin-bottom: 50px;
                               border-radius: 30px
                          }
                          h2 {

                              font-weight: 300;
                              font-size: 4em;
                              color: #fff;
                              background-color: #071d36;
                              padding: 10px 0 0px 10px;
                              margin-bottom: 1px;
                              border: 6px solid red;
                               border-radius: 30px;
                          }

                          h4 {

                              font-weight: 300;
                              font-size: 4em;
                              color: #fff;
                              background-color: #071d36;
                              padding: 10px 0 0px 10px;
                              margin-bottom: 1px;
                              border: 1px solid goldenrod;
                               border-radius: 20px;
                          }
                          p {

                              
                             
                              color: #fff;
                             
                              padding: 10px 30px 0px 30px;
                              margin-bottom: 1px;
                              
                              
                          }
                           
                     .mySlides {display:none;}  
                   .sticky {
                position: -webkit-sticky;
                position: top;
                width:100%;
                top: 0;
                background-color: yellow;
                padding: 50px;
                font-size: 20px;
              }

              .sticky + .content {
                padding-top: 60px;
              }

              .header {
                background-color: #f1f1f1;
                padding: 5px;
                width:100%;
                color:black;
               
              }
                     

              .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  background-color: #0B0B61;
  opacity:;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 
@media screen and (max-width: 766px) {
  #hee {
    height:50px;
    width:50px;
    display:;
  }
  
}




          </style>



   

    <link rel="shortcut icon" href="favicon.ico">
    
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">  
    <title> Student Welfare Office </title>

    
    <link rel="stylesheet" href="./student_welfare_files/normalize.css">
    <!-- Semantic-UI -->
    <link rel="stylesheet" href="./student_welfare_files/semantic.min.css">
    <!-- Custom styling -->
    <link rel="stylesheet" href="./student_welfare_files/site.css">
    <link href="./student_welfare_files/css.css" rel="stylesheet" type="text/css">
    <link href="./student_welfare_files/css(1).css" rel="stylesheet" type="text/css">
    <!-- iOS Web Clip -->
    <link rel="apple-touch-icon" href="./student_welfare_files/favicon.png">
    
    <link rel="icon" href="./student_welfare_files/favicon.png">
    
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/index.css" rel="stylesheet">
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./student_welfare_files/sweetalert.css">
    <link href="./student_welfare_files/bootstrap.min.css" rel="stylesheet">
    <link href="./student_welfare_files/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./student_welfare_files/main.css">
    <link rel="stylesheet" href="./student_welfare_files/layout.css">
    <link rel="stylesheet" href="./student_welfare_files/profile.css">
    <link rel="stylesheet" href="./student_welfare_files/login-register.css">
    <link rel="stylesheet" href="./student_welfare_files/roboto.css">
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="./student_welfare_files/jquery-3.1.1.min.js.download"></script>
    
    <script src="./assets/js/jquery.min.js"></script>

    <script src="./assets/js/bootstrap.min.js"></script>
    
    


    <script type="text/javascript"> 

     


function sf(s)
{
  //alert(s);
  if(s=='s'){
  document.getElementById("s").classList.add('active');

document.getElementById("m").classList.remove('active');
document.getElementById("i").classList.remove('active');
document.getElementById("an").classList.remove('active');
document.getElementById("c").classList.remove('active');
document.getElementById("sf").style="display:block;";
document.getElementById("ma").style="display:none;";
document.getElementById("im").style="display:none;";
document.getElementById("ar").style="display:none;";
document.getElementById("cs").style="display:none;";
}else if(s=='m'){
  document.getElementById("m").classList.add('active');
document.getElementById("s").classList.remove('active');
document.getElementById("i").classList.remove('active');
document.getElementById("an").classList.remove('active');
document.getElementById("c").classList.remove('active');
document.getElementById("sf").style="display:none;";

document.getElementById("ma").style="display:block;";
document.getElementById("im").style="display:none;";
document.getElementById("ar").style="display:none;";
document.getElementById("cs").style="display:none;";
}
else if(s=='i'){
  
document.getElementById("s").classList.remove('active');
document.getElementById("m").classList.remove('active');
document.getElementById("i").classList.add('active');
document.getElementById("an").classList.remove('active');
document.getElementById("c").classList.remove('active');
document.getElementById("sf").style="display:none;";

document.getElementById("ma").style="display:none;";
document.getElementById("im").style="display:block;";
document.getElementById("ar").style="display:none;";
document.getElementById("cs").style="display:none;";

}
else if(s=='an'){
 
document.getElementById("s").classList.remove('active');
document.getElementById("m").classList.remove('active');
document.getElementById("i").classList.remove('active');
document.getElementById("an").classList.add('active');
document.getElementById("c").classList.remove('active');
document.getElementById("sf").style="display:none;";

document.getElementById("ma").style="display:none;";
document.getElementById("im").style="display:none;";
document.getElementById("ar").style="display:block;";
document.getElementById("cs").style="display:none;";


}
else if(s=='c'){

document.getElementById("s").classList.remove('active');
document.getElementById("m").classList.remove('active');
document.getElementById("i").classList.remove('active');
document.getElementById("an").classList.remove('active');
document.getElementById("c").classList.add('active');
document.getElementById("sf").style="display:none;";

document.getElementById("ma").style="display:none;";
document.getElementById("im").style="display:none;";
document.getElementById("ar").style="display:none;";
document.getElementById("cs").style="display:block;";


}}


</script>





</head>






<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Main_page rootpage-Main_page skin-moodledocs action-view moodledocs-logo" style="background-color:white;">



<div class="header_custom" id="hes">
    
      
   
   
</div>




    
  <div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="#hes" style="text-decoration:none;color: inherit;"> 
        <div ui-sref-active="active" ui-sref="app.dashboard" class="item active" href="/" color="white" style="boredr:4px solid #ff6600;" onclick="closeNav();">
       <font size="4"  color="white">  About Dean (Student Welfare)</font>
        </div></a>
  
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<div style="background-color: ;" id="sl">
<div class="containe ng-scope" id="root-view" ui-view="">

                   <div id="base" class="ng-scope" style=" background-color: ;">



                                                 <div id="sii" style=" background-color: ;">
                                                          <div id="sidebar"  class="col-sm-offset-10" style=" background-color: #0B0B61;opacity:0.7;width:17%;border-left: 4px solid #ff6600;">
                                                                    
                                                                                 <div ui-sref="app.dashboard" class="item" href="/">
                                                                                      <br><br>
                                                                                      <marquee scrollamount=""><label align="center" style="color:white;">N o w &nbsp;&nbsp;y o u &nbsp;&nbsp;a r e &nbsp;&nbsp; b e c o m i n g&nbsp;&nbsp;  p u b l i c  &nbsp;&nbsp;  r e p o r t e r&nbsp;&nbsp; </label></marquee>
                                                                                      <br><br>
                                                                                  </div>
                                                    <a href="#hes" style="text-decoration:none;color: inherit;">
                                                                
                                                                                  <div ui-sref-active="active" ui-sref="app.dashboard" class="item active" href="/" color="white">
                                                                                <font size="4" >Helpingo Home</font>
                                                                                  </div></a>
                                                                                  <a href="#hes" style="text-decoration:none;color: inherit;">
                                                                
                                                                                  <div ui-sref-active="active" ui-sref="app.dashboard" class="item active" href="/" color="white">
                                                                                <font size="4" >login/signup</font>
                                                                                  </div></a>

                                                                 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                                                          </div>

                                                               


                                                  </div>
                  </div>


</div></div>




                      





 

</body>
</html>
