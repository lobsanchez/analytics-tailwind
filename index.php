<?php require_once("assets/config/config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]> 		<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]> 		<html class="ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9]> 		<html class="ie9 no-js" lang="es"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta name="author" content="Luis Óscar Bueno Sánchez">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <title>Analytics — Landing Page</title>
     <link rel="stylesheet" href="assets/css/dist/output.css" type="text/css" />

</head>

<body class="container mx-auto max-w-screen-2xl">
     <?php include("assets/templates/header.php"); ?>
     <main class="">
          
          <section class="container mx-auto bg-white px-[10%]">
               <h2 class="text-center text-[40px] font-bold text-main mt-[38px]">Main Features</h2>
               <p class="text-center text-secondary text-[18px] mt-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet. Id vel in nam malesuada.</p>
               <div class="grid grid-cols-3 gap-5">
                    <div class="features">
                         <img src="./assets/images/planning.png" alt="Planning">
                         <h3>Monitoring 24/7</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
                    <div class="features">
                         <img src="./assets/images/computer.png" alt="System">
                         <h3>Widget System</h3>
                         <p>Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar.</p>
                    </div>
                    <div class="features">
                         <img src="./assets/images/performance.png">
                         <h3>Best Performance</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
               </div>
          </section>
          <section class="grid grid-cols-2 gap-[100px] pt-[130px] place-items-center px-[10%]">
               <div class="">
                    <h2 class="text-[40px] font-bold text-main">Automated Reports <br>& Widget Alerts</h2>
                    <p class="text-secondary text-[18px] mt-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-01.svg" alt="Imagen primera" srcset="">
          </section>
          <section class="grid grid-cols-2 gap-[100px] pt-[130px] place-items-center px-[10%]">
               <img src="assets\images\screen-02.svg" alt="Imagen segunda" srcset="">
               <div class="">
                    <h2 class="text-[40px] font-bold text-main">Fully customizable to<br> address your needs</h2>
                    <p class="text-secondary text-[18px] mt-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
          </section>
          <section class="grid grid-cols-2 gap-[100px] pt-[130px] place-items-center px-[10%]">
               <div class="">
                    <h2 class="text-[40px] font-bold text-main">Pre-built Dashboard<br> Templates</h2>
                    <p class="text-secondary text-[18px] mt-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-03.svg" alt="Imagen tercera" srcset="">
          </section>
          
     </main>
     <?php include("assets/templates/footer.php"); ?>
     <script src="assets/js/custom.js"></script>
</body>
</html>