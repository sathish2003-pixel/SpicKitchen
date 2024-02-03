<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        
    </script>

</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../images/admin.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            ADMIN
        </div>
        <form class="p-3 mt-3" action="adminsignupignup.php" method="post">
            <div class="form-field align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uname" id="userName" placeholder="Username">
            </div>
            <div class="form-field  align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="upass" id="pwd" placeholder="Password">
            </div>

            <div class="form-field align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uemail" id="email" placeholder="Email">
            </div>
            <div class="form-field align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uphone" id="phone" placeholder="Phone no">
            </div>
            <button class="btn mt-3" type="submit" name="subup">Signup</button>
        </form>
      
    </div>  
</body>
</html>