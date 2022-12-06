<?php 

session_start();

include("config.php");

if( !isset($_GET['username']) ){
	// kalau tidak ada id di query string
	header('Location: karyawan.php');
}

//ambil id dari query string
$uname = $_GET['username'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE username='$uname'";
$query = mysqli_query($db, $sql);
$kry = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="style3.css">
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
              */
              body {background: rgba(96.15624949336052, 125.81190258264542, 192.31249898672104, 1); }
            </style>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
            <!-- MDB -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
          
          </head>
          
          <body style="background-color: rgba(96.15624949336052, 125.81190258264542, 192.31249898672104, 1);;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(1.0000000591389835, 32.00000189244747, 96.00000187754631, 1);">
              <div class="container-fluid">
                <!-- Navbar brand -->
                <!-- <a href="pdashboard.html"><img src="images/back.png" alt="back" width="50px"></a> -->
                <a class="navbar-brand" href="#"> <img src="images/rectangle_1.png" alt="logo" width="232px"></a>
            
                <!-- Toggle button -->
                <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fas fa-bars"></i>
                </button>
            
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            
                  <!-- Icons -->
                  <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="index.html"><span class="logout" style="color:rgb(255, 255, 255); font-size:20px;">Log Out</span></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;"><?php echo $_SESSION['username'];?></span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <div class=e86_76>
                <div class="e2_136"></div>
                <!-- <div class=e2_285>
                  <div class="e2_286"></div>
                  <div class="e2_289"></div>
                </div> -->
                <div class=e2_151>
                  <div class="e2_142"></div><span  class="e2_150">Edit Akun</span>
                  <form action="kry-edit-process.php" method="POST">
                  <input type="hidden" name="uname" value="<?php echo $kry['username'] ?>" />
                    <span  class="e2_145"><label for="username">Username</label></span>
                    <input type="text" class="e2_143" name="username" placeholder="Masukkan username..." value="<?php echo $kry['username'] ?>">
                    <span  class="e2_146"><label for="pwd">Password</label></span>
                    <input type="text" class="e2_144" name="pwd" placeholder="Masukkan password..." value="<?php echo $kry['password'] ?>">
                    <input type="submit" class="e2_285" value="Simpan" name="simpan" style="color:rgb(255, 255, 255) ;">
                </form>
                </div>
                <div class="e36_22"></div>
                <div class="e38_22"></div>
              </div>
          </body>
          </html>

