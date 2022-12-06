<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: plogin.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: plogin.php");
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

            <link rel="stylesheet" href="styles2.css">
            
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
            
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="karyawan.php"><span style="color:rgb(255, 255, 255); font-size:20px;">Daftar Karyawan</span></a>
                    </li>
                  </ul>
            
                  <!-- Icons -->
                  <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="logout.php"><span class="logout" style="color:rgb(255, 255, 255); font-size:20px;">Log Out</span></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;"><?php echo $_SESSION['username'];?><br> (Pemilik)</span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <div class=e86_72 style="position: absolute">
              <!-- <div  class="e2_110"></div>
              <div  class="e2_111"></div> -->
              <a href="dftkeuangan.php">
                <div class=e2_132>
                  <div  class="e2_113"><span  class="e2_117">Daftar Keuangan</span></div>
                </div>
              </a>
              <a href="inputbrg.php">
                <div class=e2_133>
                  <div  class="e2_113"><span  class="e2_120">Input Barang</span></div>
                </div>
              </a>
              <a href="caribarang.php">
                <div class=e2_134>
                  <div  class="e2_113"><span  class="e2_119">Info Data Barang</span></div>
                </div>
              </a>
              <a href="inputpluar.php">
                <div class=e2_131>
                  <div  class="e2_113"><span  class="e2_118">Input Pengeluaran</span></div>
                </div>
              </a>
              <a href="keuntungan.php">
                <div class=e2_135>
                  <div  class="e2_113"><span  class="e2_130">Data Keuntungan</span></div>
                </div>
              </a>
              
              <!-- <span  class="e2_121">Nama Pengguna</span>
              <span  class="e2_122">(Pemilik)</span> -->
              <span  class="e2_124">Pilih Menu :</span>
              <!-- <div  class="e2_125"></div> -->
              <!-- <div class=e2_126>
                <div  class="ei2_126_208_1526"></div>
              </div> -->
              <div  class="e53_26"></div>
              <div  class="e53_25"></div>
              <!-- <span  class="e86_124">Log Out</span> -->
            </div>
          </body>
          </html>