<html>
    <head>
        <title>ChatBox</title>
        <link href="./Resources/css/Style.css" rel="stylesheet" type="text/css"> 
        <link href="./Vendors/grid.css" rel="stylesheet" type="text/css">
        <link href="./Vendors/normalize.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        
        <header>
            <div>
             <img class="logo clearfix" src="./Resources/images/Screenshot%202021-10-26%20205153.png">
        </div>
       
            <div class="pp">
            <div class="row">
            <div class="login col span-1-of-3">
                <h2>Log in</h2>
                
            </div>
                
            </div>
             <div class="row pup ">
                <form method="post" action="#" class="contact-form up">
                    
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
                            <input type="password" name="name" id="name" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col span-2-of-3">
                            <input type="submit" value="Log In">
                    </div>
                </form>
            </div>
            </div>
            <div>
                    <h3>
                        Not a member yet? <a href="./php/Sign_up.php" class="signup" target="_blank">Sign up</a>
                    </h3>
                    
            </div>
        </header>
    </body>
</html>
