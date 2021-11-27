<html>
    <head>
        <title>ChatApp</title>
        <link href="./Resources/css/Style.css" rel="stylesheet" type="text/css"> 
        <link href="./Vendors/grid.css" rel="stylesheet" type="text/css">
        <link href="./Vendors/normalize.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
    <!---------------------------------navigation------------------------------------->
        <header>
            <div>
             <img class="logo clearfix" src="./Resources/images/Screenshot%202021-10-26%20205153.png">
        </div>
     <!-------------------------------login form------------------------------------>  
            <div class="pp">
            <div class="row">
            <div class="login col span-1-of-3">
                <h2>Log in</h2>
                
            </div>
                
            </div>
             <div class="row pup ">
                <form method="post" action="./php/validation.php" class="contact-form up">
                    
                     <div class="row">   
                        <div class="col span-1-of-3">
                            <label for="email">Username/Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Username/Email" required>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="password">Password</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="password" id="name" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col span-2-of-3">
                            <input type="submit" value="Log In">
                    </div>
                </form>
            </div>
            </div>
        <!-------------------------------not a member--------------->
            <div>
                    <h3>
                        Not a member yet? <a href="./php/Sign_up.php" class="signup" target="_blank">Sign up</a>
                    </h3>
                    
            </div>
        </header>
    </body>
</html>
