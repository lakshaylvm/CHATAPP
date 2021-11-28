<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../Resources/css/setting.css" type='text/css'>
    <link href="../Vendors/grid.css" rel='stylesheet' type='text/css'>
    <link href="../Vendors/normalize.css" rel='stylesheet' type='text/css'>

    <title>Setting</title>

</head>

<body>

    <div>
        <!---------------navigation----------------->
        <nav>
           <!-------------settings----> 
            <h1>SETTINGS</h1>
            <!-----------------signout-->
            <a href="../index.php" target="blank"> <img src="../Resources/images/power-off.png" id="sign-out"></a>

        </nav>
        <!--------------------profile pic-------------->
        <div class="col span-1-of-2">
            <img src="../Resources/images/profile.jpg" id="profile">
        </div>
        <!-------------------------options--------------------->
        <div class="col span-1-of-2" id="stng">
            <ul>
                <li><a href="#">Update Profile</a></li>
                <li><a href="#">Update UserName</a></li>
                <li><a href="#">Update Password</a></li>
                <p id="save"><input type="submit" value="Save Changes" class="btn"></p>
            </ul>
        </div>
    </div>



</body>

</html>