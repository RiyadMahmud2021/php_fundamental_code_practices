<!-- PHP Fundamentals Variable Scope (Global Scope, Local Scope) -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Syntax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->

        <style>
            .phpcoding{ width: 900px; 
                margin: 0 auto; 
                background: #EAE5E4; 
                padding: 10px;
                min-height: 400px;
            }
            
            .headerOption,
            .footerOption{
                background: #EF6D52;
                color: #000;
                text-align: center;
                min-height: 50px;
            }
            .headerOption h2,
            .footerOption h2{
                margin: 0;
                padding: 10px;
            }
            .mainContent{
                min-height: 300px;
            }
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headerOption">
                <h2>PHP Fundamentals Training</h2>
            </section>
        
            <section class="mainContent">
                <?php
                // Variable Scope (global scope, local scope)
                // Variable Scope Access of variable one function to another function
                
                    $x =  15; /* global scope: fuction outside  */ 

                    function test(){
                        global $x; // global scope declaration
                        $a = 5;
                        echo " a = ".$a;  /* reference to local scope variable */ 
                        echo "<br/>";
                        echo "Access from outside global scope: ".$x; /*  Accessing global scope */ 
                        echo "<br/>";
                    }
                    function test1(){
                        global $x;
                        $b = 10;
                        echo  "b = " .$b; /* reference to local scope variable */ 
                        echo "a = " .$a; // not possible 
                        echo "Access from outside global scope: ".$x;
                        echo "<br/>";
                    }
                    
                    test();
                    test1();
                ?>
            </section> 

            <section class="footerOption">
                <h2>BMIT Solution Ltd.</h2>
            </section> 
        </div>  
    </body>
</html>