<?php
    include('koneksi.php');
    if(isset($_POST['simpan']))
    {
        $nama_rumah         =$_POST['nama_rumah'];
        $luas_tanah         =$_POST['luas_tanah'];
        $jlh_kamar          =$_POST['jlh_kamar'];
        $update             = mysqli_query($koneksi,"update custom set
        luas_tanah          ='$luas_tanah',
        jlh_kamar           ='$jlh_kamar'

        where nama_rumah    ='$nama_rumah'")
        or die(mysqli_error());
     
        if($update)
        {
            echo "<h2>data berhasil diupdate</h2>";
            echo "<script>window.location = 'index.php'</script>";
        }
        else
        {
            echo "<h2>gagal menyimpan data</h2>";
            echo "<a href='edit.php ?nama_rumah = ".$nama_rumah."'>kembali</a>";
        }
    }
    else
    {
        echo"<script>window.history.back()</script>";
    }
?>