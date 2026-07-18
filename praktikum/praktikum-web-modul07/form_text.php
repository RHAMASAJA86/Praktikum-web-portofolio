<html>
    <head>
    <title>Form Input Text</title>
    </head>

    <body>
        <form id="form_text" enctype="multipart/form-data" name="form_text" method="POST" action="proses_text.php">
            <p>NIM <input type="text" name="nim" id="nim"> </p>
            <p>Nama <input type="text" name="nama" id="nama"> </p>
            <p>Tempat <input type="text" name="tempat" id="tempat"> </p>
            <p>Tanggal Lahir <input type="date" name="tanggal_lahir" id="tanggal_lahir"> </p>
            <p>Jenis Kelamin <br>
                Laki-laki<input type="radio" name="jk" value="laki-laki">
                Perempuan<input type="radio" name="jk" value="perempuan">
            </p>
            <!-- <p>Agama  <input type="text" name="nama" id="nama"> </p> -->
            <p>Agama 
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Khatolik</option>
                    <option value="Hindu">HIndu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghuchu">Konghucu</option>
                </select>
            </p>
            <p>Alamat <br> <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> </p>
            <p>Hobi : <br> 
                <input type="checkbox" name="hobi1" id="" value="Sepak Bola"> Sepak bola <br>
                <input type="checkbox" name="hobi2" id="" value="Bulu Tangkis"> Bulu Tangkis <br>
                <input type="checkbox" name="hobi3" id="" value="Berenang"> Berenang <br>
                <input type="checkbox" name="hobi4" id="" value="Lainnya"> Lainnya <br>
            </p>
            <p>Masukkan foto <input type="file" name="file" id=""></p>
            <p> <input type="submit" name="button" id="button" value="tampil"> </p>
        </form>
    </body>
</html>