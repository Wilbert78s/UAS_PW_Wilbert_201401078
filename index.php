<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['userna'])){
    header("location:login.php");
}
?>



<html style="scroll-behavior: smooth;">
<head>    
    <title>Homepage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="Logo-removebg-preview.png" alt="Logo" width="50" height="50" class="d-inline-block align-top" alt="">
    </a>
    <a class="navbar-brand" href="#">Rumahku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  tabindex="-1" aria-disabled="true">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#detail">Detail</a>
            <a class="dropdown-item" href="#kartu">Lokasi,Harga,Rating</a>
            <a class="dropdown-item" href="#custom">Custom Rumah</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#kalkulator">Kalkulator harga tanah</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="aksi_logout.php" >Log out</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



  <!--Carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner container mt-4">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
      </ol>
  
      <div class="carousel-item active ">
        <img src="1.jpg" class="d-block w-100 h-100   " alt="Tipe 36">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 36</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="2.jpg" class="d-block w-100 h-100  " alt="Tipe 21">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 21</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100 h-100 " alt="Tipe 45">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 45</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="4.jpg" class="d-block w-100 h-100 " alt="Tipe 54">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 54</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="5.jpg" class="d-block w-100 h-100 " alt="Tipe 60">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 60</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="6.jpg" class="d-block w-100 h-100 " alt="Tipe 120">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe 120</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="7.jpg" class="d-block w-100 h-100 " alt="Tipe Modular">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tipe Modular</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="8.jpg" class="d-block w-100 h-100 " alt="Tipe Kontainer">
        <div class="carousel-caption d-none d-md-block">
          <h5>Rumah Kontainer</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="9.jpg" class="d-block w-100 h-100 " alt="Tipe Trailer">
        <div class="carousel-caption d-none d-md-block">
          <h5>Rumah Trailer</h5>
        </div>
      </div>

      <div class="carousel-item">
        <img src="0.jpg" class="d-block w-100 h-100 " alt="Conch House">
        <div class="carousel-caption d-none d-md-block">
          <h5>Conch house</h5>
        </div>
      </div>
     
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="ml-auto carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only ">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="mr-auto carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>


 
  <!--Tabel-->
      <table id="detail" class="text-center table table-hover table-bordered table-striped table-secondary container mt-3">
        <caption>Detail rumah</caption>
        <tr>
          <th scope="col">Rumah</th>
          <th scope="col">Luas (m^2)</th>
          <th scope="col">Kamar Tidur</th>
        </tr>
        <tr>
          <td>Tipe 36</td>
          <td>36</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Tipe 21</td>
          <td>21</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Tipe 45</td>
          <td>45</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Tipe 54</td>
          <td>54</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Tipe 60</td>
          <td>60</td>
          <td>4</td>
        </tr>
        <tr>
          <td>Tipe 120</td>
          <td>120</td>
          <td>4</td>
        </tr>
        <tr>
          <td>Tipe Modular</td>
          <td>?</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Tipe kontainer</td>
          <td>?</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Tipe Trailer</td>
          <td>?</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Conch House</td>
          <td>?</td>
          <td>2</td>
        </tr>
      </table>
</div>



<!--Kartu-->
<div id="kartu" class="container">
     <div class="row">
      <div class="card col w-10 h-10 " style="width: 18rem;">
        <img src="5.jpg" class="card-img-top" alt="Sample">
          <div class="card-body">
           <h5 class="card-title">Cek Lokasi</h5>
           <p class="card-text">Lokasi yang kami sediakan sudah dijamin tingkat keamanan dan kenyamanannya.</p>
           <a href="#" class="btn btn-primary">Detail</a>
           </div>
      </div>

      <div class="card col w-10 h-10 " style="width: 18rem;">
        <img src="7.jpg" class="card-img-top  " alt="Sample">
          <div class="card-body">
           <h5 class="card-title">Cek Harga</h5>
           <p class="card-text">Harga yang ada merupakan harga terbaik.</p>
           <a href="#" class="btn btn-primary">Detail</a>
           </div>
      </div>

      <div class="card col w-10 h-10 " style="width: 18rem;">
        <img src="8.jpg" class=" card-img-top " alt="Sample">
          <div class="card-body">
           <h5 class="card-title">Cek Rating</h5>
           <p class="card-text">Rating diberi dari setiap orang yang membeli properti dari kami.</p>
           <a href="#" class="btn btn-primary">Detail</a>
           </div>
      </div>
    </div>
  </div>

  <table id="custom" class="text-center table table-hover table-bordered table-striped table-secondary container mt-3">
        <caption>Custom rumah</caption>
        <tr>
          <th scope="col">no</th>
          <th scope="col">Nama Rumah</th>
          <th scope="col">Luas (m^2)</th>
          <th scope="col">Kamar Tidur</th>
          <th scope="col"><a href="tambah.php">Tambah</a></th>
        </tr>

        <?php
            $no=1;
            $data=mysqli_query($koneksi,"select * from custom");
            while ($d=mysqli_fetch_array($data)){
        ?>

        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama_rumah'];  ?></td>
          <td><?php echo $d['luas_tanah']; ?></td>
          <td><?php echo $d['jlh_kamar']; ?></td>
          <td><a href="edit.php ?nama_rumah=<?php echo $d['nama_rumah']; ?>">Edit</a>
              <a href="hapus.php ?nama_rumah=<?php echo $d['nama_rumah']; ?>">Hapus</a>
          </td>
        </tr>
        
        <?php
            }
        ?>
  </table>



  <!--Kalkulator-->
  <h2 id="kalkulator" class="text-center mt-5">Kalkulator harga tanah</h2>
  <form id="posisi">
  <select id="letak" class="form-control container mt-2">
    <option value="strategis">Strategis</option>
    <option value="kurang">Kurang strategis</option>
    <option value="tidak">Tidak Strategis</option>
  </select>
  </form>
  <div class="container">
  <form class="row">
    <div class="form-group col">
      <label >Lebar</label>
      <input type="number" class="form-control" id="lebar" ">
      <small class="form-text text-muted">Lebar minimal 5</small>
    </div>
    <div class="form-group col">
      <label >Panjang</label>
      <input type="number" class="form-control" id="panjang">
      <small class="form-text text-muted">panjang minimal 4</small>
    </div>
  </form>
  <button onclick="kalkulator()">Hitung</button>
  <small class="form-text text-muted">Strategis 5jt/m^2</small>
  <small class="form-text text-muted">Kurang Strategis 2,5jt/m^2</small>
  <small class="form-text text-muted">Tidak Strategis 1,25jt/m^2</small>
  <h3>Harga tanah : <span id="hasil"></span></h3>



  <!--JavaScript-->
  <script>
    function kalkulator()
    {
      var lebar=document.getElementById("lebar").value, panjang=document.getElementById("panjang").value,hasil,
      letak=document.getElementById("posisi").letak.value,harga;
      if (lebar>=5 && panjang>=4)
        {
          switch(letak)
          {
            case "strategis" :
            {
              hasil=lebar*panjang*5;
              document.getElementById("hasil").innerHTML=hasil+" juta";
              break;
            }
            case "kurang" :
            {
              hasil=lebar*panjang*2.5;
              document.getElementById("hasil").innerHTML=hasil+" juta";
              break;
            }
            case "tidak" :
            {
              hasil=lebar*panjang*1.25;
              document.getElementById("hasil").innerHTML=hasil+" juta";
              break;
            }
          }
        }
      else
      {
          document.getElementById("hasil").innerHTML="ERROR";
      }

    }
  </script>



<!--Navbar-->
</div>
  </div>
    <nav class=" navbar d-block navbar-light bg-light mt-3">
      <a class="navbar-brand" href="#">
       <img src="Logo-removebg-preview.png" width="30" height="30" class="align-center" alt="">
        Rumahku
      </a>
     </nav>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>