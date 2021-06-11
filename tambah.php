<html style="scroll-behavior: smooth;">
<head>    
    <title>Homepage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="web login dan register.css">
</head>
<body>
    <div class="kotak">
        <h1>TAMBAH</h1><hr>
        <h2>
            <a href="index.php">kembali</a>
        </h2>
        <form action="tambah_proses.php" method="POST">
            <table>
                <tr>
                    <td><h3>Nama Rumah</h3></td>
                    <td><input class="blok1" type="text" name="nama_rumah" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><h3>Luas Tanah</h3></td>
                    <td><input class="blok1" type="text" name="luas_tanah" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><h3>Jumlah Kamar</h3></td>
                    <td><select class="blok1" name="jlh_kamar" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
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
</hrml>