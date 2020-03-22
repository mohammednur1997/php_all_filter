<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php all filter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
         .php_filter{
            background-image: url(image/8144_cool_sunrise.jpg);
                padding: 57px 0;
                max-width: 1350px;
                max-height: 650px;
            
        }
        .regester{
           background-color: rgb(0,0,0,.5);
            border-radius: 9px 8px;
            color: white;
            padding-left: 14px;
            padding-top: 44px;
            padding-right: 21px;
            padding-bottom: 57px;
        }
        .regester p{
            font-size: 20px;
        }
        .green{
            color: green;
            font-size: 15px
        }
        .red{
            color: red;
            font-size: 15px
        }
        .date{
            
        }
        .date_function{
            background-color: yellow;
        }
    
    </style>
</head>
<body>
          <!-- somoy show korar jonno -->
<section class="date_function">
    <div class="container">
        <div class="raw">
            <div class="col-md-6">
                <div class="date text-left">
                     <h2 style="color:red;">Today Date:<?php echo date('d/m/y') ;?> </h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="date text-right">
                     <h2>Time:<?php 
                         date_default_timezone_set("America/New_York");
                         echo date('h:i:sa') 
                         ;?> </h2>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="php_filter">
        <div class="container">
            <div class="raw">
                <div class="col-md-4">
                   <div class="ip regester text-center">
                   <?php
                       
                       $ipErr='';
                         if(!isset($_POST['ip']))
                         {
                             echo'input your Ip';
                         }else{
                             if(empty($_POST['ip']))
                             {
                                $ipErr='Ip is required'; 
                             }else{
                                 if(!filter_var($_POST['ip'],FILTER_VALIDATE_IP)===false)
                                 {
                                     echo('<p class="green">Ip is valid</p> ');
                                 }else{
                                     echo('<p class="red">Ip is invalid </p>');
                                 }
                             }
                         }
                       ?>
                      <p>Check Your ip here</p>
                      
                       <form class="text-center" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                        <input type="text" name="ip" class="form-control form-group">
                        <span class="red"><?php echo $ipErr; ?></span>
                         <br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                   </div>
                 </div>
                <div class="col-md-4">
                   <div class="url regester text-center">
                     <?php
                        //Url check korar jonno php code
                       $webErr='';
                         if(!isset($_POST['website']))
                         {
                             echo'input your website';
                         }else{
                             if(empty($_POST['website']))
                             {
                                $webErr='website is required'; 
                             }else{
                                 if(!filter_var($_POST['website'],FILTER_VALIDATE_URL)===false)
                                 {
                                     echo('<p class="green">Website is valid</p> ');
                                 }else{
                                     echo('<p class="red">Website is invalid </p>');
                                 }
                             }
                         }
                       ?>
                      <p>Check Your website here</p>
					  
                       <form class="text-center" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                       <input type="text" name="website" class="form-control form-group">
                       
                       <span class="red"><?php echo $webErr;?></span>
                         <br>
                       <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                    </form>
                       
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="email regester text-center">
                      <?php
                        //Email check korar jonno php code
                          $emailErr='';
                         if(!isset($_POST['email']))
                         {
                             echo'Input your Email';
                         }else{
                             if(empty($_POST['email']))
                             {
                                $emailErr='Email is required'; 
                             }else{
                                 if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false)
                                 {
                                     echo('<p class="green">Email is valid</p> ');
                                 }else{
                                     echo('<p class="red">Email is invalid </p>');
                                 }
                             }
                         }
                       ?>
                       <p>Check Your Email here</p>
                       <form class="text-center" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                       <input type="text" name="email" class="form-control form-group">
                       
                       <span class="red"><?php echo $emailErr;?></span>
                         <br>
                       <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    </body>
</html>