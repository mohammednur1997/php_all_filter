<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check_result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
         .check_result{
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
        .green{
            color: green;
            font-size: 20px;
        }
        .red{
             color: red;
            font-size: 20px;
        } 
        .yellow{
             color: yellow;
            font-size: 20px;
        } 
        .cyan{
             color: cyan;
            font-size: 20px;
        }
   </style>
</head>
<body>
   <section class="check_result">
    <div class="container">
        <div class="raw">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div class="result regester">
            <?php
				//result check korar jonno php code
                   $resultErr='';
                   if(!isset($_POST['result']))
                   {
                       echo'input your Result';
                   }else{
                       if(empty($_POST['result']))
                       {
                           $resultErr='input your result';
                       }else{
                           $number=$_POST['result'];
                           if($number >=60)
                           {
                              echo('<p class="green">You got First class</p>');
                           }elseif($number >=45 and $number <60)
                           {
                              echo('<p class="cyan">You got Second class</p>');
                           }elseif($number >=33 and $number <45)
                          {
                              echo('<p class="yellow">You got Third class</p>');
                           }else{
                               echo('<p class="red">You are Fail in the exm</p>');
                           }
                       }
                   }
               
              
				?>
             <!-- result check korar jonno form -->
               <h2>Check your Gpa point</h2>
			    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                   <input type="text" name="result" class="form-control form-group">
                    <span class="red"><?php echo $resultErr; ?></span>
                   <br>
                   <input type="submit" value="submit" class="btn btn-primary">
               </form>  
           </div>
           </div>
           <div class="col-md-4">
		  </div>
        </div>
    </div>
</section>
</body>
</html>