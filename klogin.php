<!DOCTYPE html>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles.css">
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
              */
              body {background: rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1); }
            </style>
            <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
          
          </head>
          
          <body>
            <div class=e86_49>
                <div class="ei86_49_2_81"></div>
                <div class="ei86_49_2_5"></div>
                <div class="ei86_49_2_6"></div>
                <span  class="e99_998">Karyawan</span>
                <span  class="ei86_49_2_11">Masuk</span>
                <!-- <span  class="ei86_49_2_13">Username</span>
                <span  class="ei86_49_2_14">Password</span> -->
                <form action="klogin-process.php" method="POST">
                    <span  class="ei86_49_2_13"><label for="username">Username</label></span>
                    <input type="text" class="ei86_49_2_7" name="username" placeholder="Masukkan username..." required>
                    <span  class="ei86_49_2_14"><label for="password">Password</label></span>
                    <input type="password" class="ei86_49_2_8" name="password" placeholder="Masukkan password..." required>
                    <input type="submit" class="ei86_49_2_9" value="Masuk">
                </form>
                <div class="ei86_49_2_20"></div>
                <div class="ei86_49_2_82"></div>
                <div class="ei86_49_8_19"></div>
                <!-- <a href="index.php">
                    <div class=ei86_49_86_97></div>
                </a> -->
              </div>
              <script type="text/javascript">
                function validasi() {
                  var username = document.getElementById("username").value;
                  var password = document.getElementById("password").value;		
                  if (username=="" || password=="") {
                    alert("Username dan Password harus di isi !");
                    return false;
                  }else{
                    return true;
                  }
                }
              </script>
          </body>
          </html>