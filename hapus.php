<html style="scroll-behavior: smooth;">
<head>    
    <title>Homepage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
     <?php
        include('koneksi.php');
        if(isset($_GET['nama_rumah']))
        {
            $nama_rumah = $_GET['nama_rumah'];
            $cek=mysqli_query($koneksi,"select nama_rumah from custom
            where nama_rumah ='$nama_rumah'") or die(mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del=mysqli_query($koneksi,"delete from custom where nama_rumah='$nama_rumah'");
                if ($del)
                {
                    echo "<script>window.location='index.php';</script>";
                    echo "<script>alert('data berhasil ditambahkan');</script>";
                }
                else
                {
                    echo "<a href='index.php'>kembali</a>";
                }
            }
        }
        else{
            echo "<script>window.history.back()</script>";
        }
     ?>
</body>
</html>