<?php
       include("auth.php");
       ?>
       <!DOCTYPE html>
       <html>
       <head>
       <meta charset="utf-8">
       <title>Welcome User</title>
       <link rel="stylesheet" href="style.css" />
       </head>
       <body>
       <div class="form">
       <h1 >Welcome <?php echo $_SESSION['username']; ?>!</h1>
       <p >Sveicināti.</p>
       <p><a href="index.html"></a></p>
       <a href="logout.php">Logout</a>
       </div>
       </body>
       </html>
       <meta http-equiv = "refresh" content = "5; url =http://localhost/projekts/index.html" />