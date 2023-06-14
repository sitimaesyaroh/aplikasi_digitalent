html>
    <body>
        <form name="form1" method="post">
            Nama <input type="text" name="nama"><br>
            Jenis Kelamin <select name="jk">
                <option value="Laki-laki">Laki-laki<option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            <input type="submit" name="tombol" value="cek">
            
</form>

<?php
if(isset($_POST['tombol'])) {
    echo "Salam kenal ". $_POST['nama']."<br>";
    echo "Jenis Kelamin".$_POST['jk'];
}
?>
