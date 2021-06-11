<?php
    include('koneksi.php');
    if(isset($_POST['simpan']))
    {
        $nama_rumah=$_POST['nama_rumah'];
        $luas_tanah=$_POST['luas_tanah'];
        $jlh_kamar=$_POST['jlh_kamar'];
        $input=mysqli_query($koneksi,"insert into custom values
        ('$nama_rumah','$luas_tanah','$jlh_kamar')");
        if($input)
        {
            echo "<h3>Data berhasil ditambahkan</h3>";
            echo "<script>window.location='index.php'</script>";
        }
        else
        {
            echo "<script>window.location='index.php'</script>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>