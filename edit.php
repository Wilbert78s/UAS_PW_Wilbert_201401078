<html style="scroll-behavior: smooth;">
<head>    
    <title>Edit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="web login dan register.css">
</head>
<body>

<?php
    include('koneksi.php');
    $nama=$_GET['nama_rumah'];
    $show= mysqli_query($koneksi,"select * from custom where nama_rumah='$nama'");
    if(mysqli_num_rows($show)==0)
    {
        echo '<script>window.history.back()</script>';
    }
    else
    {
        $d=mysqli_fetch_assoc($show);
    }
?>
<div class="kotak">
    <form action="edit_proses.php" method="POST">
        <input type="hidden" name="nama_rumah" value="<?php echo $nama; ?>">
        <h1>EDIT</h1><hr>
        <table>
            <tr>
                <td><h3>Luas Tanah (m^2)</h3></td>
                <td>
                    <input class="blok1" type="text" name="luas_tanah" size="33" value="<?php echo $d['luas_tanah']; ?>" required> 
                </td>
            </tr>
            <tr>
                <td><h3>Jumlah Kamar</h3></td>
                <td>
                    <select class="blok1" name="jlh_kamar" required>
                        <option value="1" <?php if($d['jlh_kamar']=='1'){echo 'selected';} ?>>1</option>
                        <option value="2" <?php if($d['jlh_kamar']=='2'){echo 'selected';} ?>>2</option>
                        <option value="3" <?php if($d['jlh_kamar']=='3'){echo 'selected';} ?>>3</option>
                        <option value="4" <?php if($d['jlh_kamar']=='4'){echo 'selected';} ?>>4</option>
                        <option value="5" <?php if($d['jlh_kamar']=='5'){echo 'selected';} ?>>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="blok1" type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>