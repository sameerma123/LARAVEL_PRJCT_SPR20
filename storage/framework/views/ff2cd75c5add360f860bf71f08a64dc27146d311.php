<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!--bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        
        
        <style>
            /* general style applied across all the screens*/

* {
  font-family: Roboto;
font-size: 15px;
font-weight: 400;
line-height: 1.667;
color: #888888;
}

h1,h2,h3,h4,h5,h6 {
  font-family: Rajdhani;
 }

#wrapper{
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

.bold{
  font-weight: bold;
  color: #000000;
}




/*anchor styles*/

.linkStyle{
  text-decoration: none;
  color: #000000;
  font-weight: bold;
  }

.linkStyle:hover{
  text-decoration: none;
  color:#6059f6;
}

/*footer styles*/

.footer{
  background-color: #04091e;
}

.footerText{
  color: #888888;
}

/*purpose page styles*/

.purposeSpacing{
  margin-left: auto;
    margin-right: auto;
    width: 60%;
}

/*container styling*/
.container {
  display: flex;
  justify-content: space-around;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
}
  
.flex-container > div {
  margin: 2%;
  text-align: center;
}

.flex-container1 {
  display: flex;
  align-items: stretch;
  flex-wrap: nowrap; 
}
  
.flex-container1 > div {
  width: 100%;
  margin: 3%;
}

.flex-footer {
  display: flex;
  align-items: stretch;
  flex-wrap: nowrap;
  margin: 2%;
}
  
.flex-footer > div {
  margin: 1%; 
}

.flex-container2{
  display: grid;
  align-items: stretch;
  flex-wrap: row wrap;

}

.box {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 20px;
}

.box2{
  flex-grow: 3; 
  padding-top: 8%; 
  text-align: center;
  background-color:#F8F8F8;
}

.flex-mission {
  display: flex;
  flex-wrap: wrap;
}

.flex-mission > div {
  background-color: #f1f1f1;
  width: 350px;
  margin: 2%;
  text-align: center;
}

/*login page styling*/

.spacing{
  padding-top: 3%;
}

.formSpace{
  width:45%;
  margin:10px
}

/*button styles*/

.corners {
  border-radius: 5px;
  border: 1px solid #DCDCDC;   
}

.button{
  /*background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%); 
  color: #222222;
  */
  background-color: #6059f6;
  color: #fff;
  background-size: 200% auto; 
  width:20%;
  margin:10px
}


/*.box1{
    width: 70%;
}*/

/*projects page styling*/

.projectStyle{
  color: #707070; 
  font-weight: bold;
}


/*members page styling*/

.membersStyle{
  padding: 0 10% 10% 10%; 
  
}

/*form styling*/

.textArea * {
  vertical-align: middle;
}

label {
  display: inline-block;
  width: 140px;
  text-align: left;
}

.fileUpload{
  display: inline; 
  margin-left: 1%;
}

/*table styles*/

table, th, td {
  border: 1px solid #A9A9A9;
  text-align: center !important;
  
  border-style:double;

}

body section table.adminpanel{
  width: 95%;
  margin-left:auto;
  margin-right: auto;
  margin-top: 2%;
}

.info{
  color: red;
}

        </style>
        
    </head>
    <body id="wrapper">
        <header >
            <div class="flex-container">
                <div><img src="../assets/logo.png" alt="logo" width="100px" height="100px"/></div>
                <div class="spacing"><a href="<?php echo e(url('/inicio')); ?>" class="linkStyle">Inicio</a></div>
                <div class="spacing"><a href="<?php echo e(url('/semblanza')); ?>" class="linkStyle">Semblanza</a></div>
                <div class="spacing"><a href="<?php echo e(url('/mission')); ?>" class="linkStyle">Centro Augusto Mijares</a></div>
                <div class="spacing"><a href="<?php echo e(url('/projects')); ?>" class="linkStyle">Proyectos</a></div>
                <div class="spacing"><a href="<?php echo e(url('/events')); ?>" class="linkStyle">Eventos</a></div>
                <div class="spacing"><a href="<?php echo e(url('/videos')); ?>" class="linkStyle">Videos</a></div>
                <div class="spacing"><a href="<?php echo e(url('/members')); ?>" class="linkStyle">Equipos</a></div>
                <div class="spacing"><a href="<?php echo e(url('/adminPanel')); ?>" class="linkStyle">Admin Panel</a></div>
                <div class="spacing"><a href="<?php echo e(url('/login')); ?>" class="linkStyle">Inicio de Sessi</a></div>
                <div class="spacing"><a href="<?php echo e(url('/register')); ?>" class="linkStyle">Registro</a></div>
            </div>
        </header>
        <section>
            <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </body>
    <footer class="footer">
        <br/>
        <br/>
        <br/>
        <br/>
        <hr style="margin: 2%;" class="footerText">
        <div class="flex-footer">    
            <div style="flex-grow: 3">
                <p class="footerText">Copyright <i class="glyphicon glyphicon-copyright-mark"></i> 2020 All rights reserved | This template is made with 
                    <i class="fa fa-heart" style="color: #6059f6;"></i> by <span style="color: #6059f6;">DiazApps</span></p>
            </div>
            <div>
                <i class="fa fa-facebook" class="footerText"></i>
            </div>
            <div>
                <i class="fa fa-twitter" class="footerText"></i>
            </div>
            <div><i class="fa fa-dribbble" class="footerText"></i></div>
            <div><i class="fa fa-behance" class="footerText"></i></div>   
        </div>     
    </footer>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>