<?php session_start();?>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles4.css">
            
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
                <!-- <a href="pdashboard.php"><img src="images/back.png" alt="back" width="50px"></a> -->
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
                      <a class="nav-link" href="logout.php"><span class="logout" style="color:rgb(255, 255, 255); font-size:20px;">Log Out</span></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#"><span style="color:rgb(255, 255, 255); font-size:20px;">
                          <?php echo $_SESSION['username'];?></span></a>
                    </li>
                    <li>
                      <img src="images/account.png" alt="account" width="70px">
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            <div class=e53_91_ style="position: unset;">
                <div class=e53_30>
                  <span  class="e53_33">Edit Stok Barang</span>
                  <div class="e53_37"></div>
                </div>
                <div class="e53_50"></div>
                <div class=e53_53>
                  <div class="e53_54"></div>
                  <div class="e53_55"></div>
                </div>
                <div class=e53_56>
                  <div class=e53_57>
                    <div class="e53_58"></div>
                    <span  class="e53_59">
                        Deterjen <br>Total saat ini : <br>
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B01'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </span>
                    <div class="e53_60"></div>
                  </div>
                </div>
                <div class=e53_64>
                  <div class="e53_65"></div>
                  <span  class="e53_66">
                    Fabric Softener <br>Total saat ini : <br>
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B02'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </span>
                  <div class="e53_67"></div>
                </div>
                <div class=e53_68>
                  <div class="e53_69"></div>
                  <span  class="e53_70">
                    Parfum Laundry <br>Total saat ini : <br> 
                        <?php
                                include('config.php');
                                $query = "SELECT stok FROM barang WHERE id='B03'";
                                $total=mysqli_query($db,$query);
                                $result=mysqli_fetch_array($total);
                                echo $result['stok'];
                        ?>
                    </span>
                  <div class="e53_71"></div>
                </div>
                <div class="e53_74"></div>
                <div class="e53_75"></div>
                <div class="e53_76"></div>
                <div class="e53_99"></div>
                <!-- deterjen -->
                <span  class="e53_77">Jumlah :    </span>
                <!-- plaundry -->
                <span  class="e53_78">Jumlah :    </span>
                <!-- fsoftener -->
                <span  class="e53_79">Jumlah :    </span> 
                <!-- <div class="e53_284"></div>
                <span class="kirim">Kirim</span> -->
                <form action="inputbrg-process.php" method="POST">
                    <div class="addDeterjen">
                        <input type="button" class="min" onclick="delDeterjen()" value="-" />
                        <input type="text" class="add" id="deterjen" name="deterjen" value="0"/>
                        <input type="button" class="plus" onclick="addDeterjen()" value="+" />
                    </div>
                    <div class="addFSoftener">
                        <input type="button" class="min" onclick="delFSoftener()" value="-" />
                        <input type="text" class="add" id="fsoftener" name="fsoftener" value="0"/>
                        <input type="button" class="plus" onclick="addFSoftener()" value="+" />
                    </div>
                    <div class="addPLaundry">
                        <input type="button" class="min" onclick="delPLaundry()" value="-" />
                        <input type="text" class="add" id="plaundry" name="plaundry" value="0"/>
                        <input type="button" class="plus" onclick="addPLaundry()" value="+" />
                    </div>
                    <input type="submit" class="e53_284" value="Kirimkan" name="tambah" style="color:rgb(255, 255, 255) ;">
                </form>
                <script>
                    function addDeterjen()
                    {
                        var value = parseInt(document.getElementById('deterjen').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('deterjen').value = value;
                    }
                    function addFSoftener()
                    {
                        var value = parseInt(document.getElementById('fsoftener').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('fsoftener').value = value;
                    }
                    function addPLaundry()
                    {
                        var value = parseInt(document.getElementById('plaundry').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('plaundry').value = value;
                    }
                    function delDeterjen()
                    {
                        var value = parseInt(document.getElementById('deterjen').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value--;
                        document.getElementById('deterjen').value = value;
                    }
                    function delFSoftener()
                    {
                        var value = parseInt(document.getElementById('fsoftener').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value--;
                        document.getElementById('fsoftener').value = value;
                    }
                    function delPLaundry()
                    {
                        var value = parseInt(document.getElementById('plaundry').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value--;
                        document.getElementById('plaundry').value = value;
                    }
                </script>
            </div>
          </body>
          </html>