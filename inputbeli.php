<?php session_start(); ?>
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>NEW SARJANA CHEMICAL</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="style3.css">
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
                <!-- <a href="kdashboard.html"><img src="images/back.png" alt="back" width="50px"></a> -->
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
                <span  class="e2_150" style="position: absolute; top: 20px; left: 520px;">Data Pelanggan</span>
                <!-- <div class=e2_285>
                  <div class="e2_286"></div>
                  <div class="e2_289"></div>
                </div> -->
                <div class=e2_151>
                  <!-- <div class="e2_142"></div> -->
                  <!-- <form action="inputbeli2.html">
                    <span  class="e2_145"><label for="nama">Nama</label></span>
                    <input type="text" class="e2_143" name="nama" placeholder="Masukkan nama customer...">
                    <span  class="e2_146"><label for="alamat">Alamat</label></span>
                    <input type="text" class="e2_144" name="alamat" placeholder="Masukkan alamat customer...">
                    <span  class="e2_148"><label for="notelp">No Telp</label></span>
                    <input type="text" class="e2_147" name="notelp" placeholder="Masukkan no telp customer...">
                    <input type="submit" class="e2_285" value="Next" style="color:rgb(255, 255, 255) ;">
                </form> -->
                </div>
                <div class="e36_22"></div>
                <div class="e38_22"></div>
              </div>
              <div class=e53_91>
                <div class=e53_30>
                  <span  class="e53_33">Produk yang di beli</span>
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
                    <span  class="e53_59">Deterjen <br>
                      Rp <input type="button" id="harga-dtj" value="0"/>
                    </span>
                    <div class="e53_60"></div>
                  </div>
                </div>
                <div class=e53_64>
                  <div class="e53_65"></div>
                  <span  class="e53_66">Fabric Softener <br>
                    Rp <input type="button" id="harga-fs" value="0"/>
                  </span>
                  <div class="e53_67"></div>
                </div>
                <div class=e53_68>
                  <div class="e53_69"></div>
                  <span  class="e53_70">Parfum Laundry <br>
                    Rp <input type="button" id="harga-pl" value="0"/>
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
            </div>
            <form action="inputbeli-process.php" method="POST">
              <!-- <div class="e86_76"> -->
                <div style="left:415.0001220703125px; top:80px; position: absolute;">
                  <span  class="e2_145"><label for="nama">Nama</label></span>
                  <input type="text" class="e2_143" style="font-weight: bold;" name="nama" placeholder="Masukkan nama customer..." required>
                  <span  class="e2_146"><label for="alamat">Alamat</label></span>
                  <input type="text" class="e2_144" style="font-weight: bold;" name="alamat" placeholder="Masukkan alamat customer..." required>
                  <span  class="e2_148"><label for="notelp">No Telp</label></span>
                  <input type="text" class="e2_147" style="font-weight: bold;" name="notelp" placeholder="Masukkan no telp customer..." required>
                  <span  class="e2_148" style="top: 490px;"><label for="pmethod">MetodePembayaran</label></span>
                  <input type="text" class="e2_147" style="top: 520px; font-weight: bold;" name="pmethod" placeholder="Masukkan metode pembayaran..." value="CASH" required>
                  <span  class="e2_148" style="top: 590px;"><label for="marketplace">Marketplace</label></span>
                  <input type="text" class="e2_147" style="top: 620px; font-weight: bold;" name="marketplace" placeholder="Masukkan nama marketplace..." value="N/A" required>
                  <span  class="e2_148" style="top: 690px;"><label for="noresi">No Resi</label></span>
                  <input type="text" class="e2_147" style="top: 720px; font-weight: bold;" name="noresi" placeholder="Masukkan nama marketplace..." value="N/A" required>
              </div>
                <!-- </div> -->
              <div class="e53_91">
                <div class="addDeterjen">
                  <input type="button" class="min" onclick="delDeterjen()" value="-" />
                  <input type="text" class="add" onchange="hargadtj()" id="deterjen" name="deterjen" value="0"/>
                  <input type="button" class="plus" onclick="addDeterjen()" value="+" />
                </div>
                <div class="addFSoftener">
                    <input type="button" class="min" onclick="delFSoftener()" value="-" />
                    <input type="text" class="add" onchange="hargafs()" id="fsoftener" name="fsoftener" value="0"/>
                    <input type="button" class="plus" onclick="addFSoftener()" value="+" />
                </div>
                <div class="addPLaundry">
                    <input type="button" class="min" onclick="delPLaundry()" value="-" />
                    <input type="text" class="add" onchange="hargapl()" id="plaundry" name="plaundry" value="0"/>
                    <input type="button" class="plus" onclick="addPLaundry()" value="+" />
                </div>
                <div style="position: absolute; top:760px; left: 100px;">
                  <label style="color: white;">Total harga : Rp <input type="button" id="totalharga" value="0"/></label>
                </div>
                <input type="submit" class="e53_284" value="Kirim" name="Kirim" style="color:rgb(255, 255, 255) ;">
              </div>
            </form>
            <script>
                function addDeterjen()
                {
                    var value = parseInt(document.getElementById('deterjen').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById('deterjen').value = value;
                    hargadtj();
                }
                function addFSoftener()
                {
                    var value = parseInt(document.getElementById('fsoftener').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById('fsoftener').value = value;
                    hargafs();
                }
                function addPLaundry()
                {
                    var value = parseInt(document.getElementById('plaundry').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById('plaundry').value = value;
                    hargapl();
                }
                function delDeterjen()
                {
                    var value = parseInt(document.getElementById('deterjen').value, 10);
                    value = isNaN(value) ? 0 : value;
                    if (value==0) value++;
                    value--;
                    document.getElementById('deterjen').value = value;
                    hargadtj();
                }
                function delFSoftener()
                {
                    var value = parseInt(document.getElementById('fsoftener').value, 10);
                    value = isNaN(value) ? 0 : value;
                    if (value==0) value++;
                    value--;
                    document.getElementById('fsoftener').value = value;
                    hargafs();
                }
                function delPLaundry()
                {
                    var value = parseInt(document.getElementById('plaundry').value, 10);
                    value = isNaN(value) ? 0 : value;
                    if (value==0) value++;
                    value--;
                    document.getElementById('plaundry').value = value;
                    hargapl();
                }
                function hargadtj()
                {
                    var value = parseInt(document.getElementById('deterjen').value, 10);
                    var harga = parseInt(document.getElementById('harga-dtj').value, 10);
                    harga = isNaN(harga) ? 0 : harga;
                    harga=value*40000;
                    document.getElementById('harga-dtj').value = harga;
                    totalharga();
                }
                function hargafs()
                {
                    var value = parseInt(document.getElementById('fsoftener').value, 10);
                    var harga = parseInt(document.getElementById('harga-fs').value, 10);
                    harga = isNaN(harga) ? 0 : harga;
                    harga=value*50000;
                    document.getElementById('harga-fs').value = harga;
                    totalharga();
                }
                function hargapl()
                {
                    var value = parseInt(document.getElementById('plaundry').value, 10);
                    var harga = parseInt(document.getElementById('harga-pl').value, 10);
                    harga = isNaN(harga) ? 0 : harga;
                    harga=value*140000;
                    document.getElementById('harga-pl').value = harga;
                    totalharga();
                }
                function totalharga()
                {
                  var dtj = parseInt(document.getElementById('harga-dtj').value, 10);
                  var fs = parseInt(document.getElementById('harga-fs').value, 10);
                  var harga = parseInt(document.getElementById('harga-pl').value, 10);
                  var total = dtj+fs+harga;
                  document.getElementById('totalharga').value = total;
                }
            </script>
          </body>
          </html>