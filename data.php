<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <form action="" method="post">
            <label>Nama Operator</label> :
            <input type="text" name="operator" id="operator" required><br>
            <label>NIM</label> :
            <input type="text" name="nim" id="nim" required><br>
            <label>Jenis Zakat</label> :
            <select name="jeniszakat" id="jeniszakat" required>
                <option>Zakat Penghasilan</option>
                <option>Zakat Maal</option>
                <option>Zakat Fitrah</option>
                
            </select> <br>
            <label>No</label> :
            <input type="text" name="no" id="no" required><br>
            <label>Nominal</label> :
            <input type="text" name="nominal" id="nominal" required><br>
            <label>Nama Lengkap</label> :
            <input type="text" name="nama" id="nama" required><br>
            <label>Nomor Hp</label> :
            <input type="text" name="hp" id="hp" required><br>
            <label>Email</label> :
            <input type="text" name="email" id="email" required><br>
            <label>Nama Bank</label> :
            <input type="text" name="bank" id="bank" required><br>
            <label>Nomor Rekening</label> :
            <input type="text" name="rek" id="rek" required><br>
            <button type="submit" name="tampilkan">Tampilkan</button>    
        </form>
        
        <?php
        if (isset($_POST['tampilkan'])) :
            echo "<pre><center>";
            echo "Data Pembayaran Zakat. " . $_POST["jeniszakat"] . "<br>";
            echo DATE("d M Y H:i:s") . "(Waktu dan Jam Sekarang)<br>";
            echo $_POST["operator"] . "/" . $_POST["nim"];
            echo "<table border='8'>";
            echo "<tr><td>No.</td><td>Jenis Zakat</td><td>Nominal</td><td>Nama Lengkap</td><td>Nomor Hp</td><td>Email</td><td>Nama Bank</td><td>Nomor Rekening</td></tr><br>";
            echo "<tr><td>" . $_POST["no"] . "</td><td>" . $_POST["jeniszakat"] . "</td><td>" . $_POST["nominal"] . "</td><td>" . $_POST["nama"] . "</td><td>" . $_POST["hp"] . "</td><td><br>" . $_POST["email"] . "</td><td>" . $_POST["bank"] . "</td><td>" . $_POST["rek"] . "</td></tr>";
            echo "</table>";
            echo "</center></pre>";
        ?>
        <script type="text/javascript">
            document.getElementById('operator').value="<?= $_POST["operator"] ?>";
            document.getElementById('nim').value="<?= $_POST["nim"] ?>";
            document.getElementById('no').value="<?= $_POST["no"] ?>";
            document.getElementById('nominal').value="<?= $_POST["nominal"] ?>";
            document.getElementById('nama').value="<?= $_POST["nama"] ?>";
            document.getElementById('hp').value="<?= $_POST["hp"] ?>";
            document.getElementById('email').value="<?= $_POST["email"] ?>";
            document.getElementById('bank').value="<?= $_POST["bank"] ?>";
            document.getElementById('rek').value="<?= $_POST["rek"] ?>";
            document.getElementById('jeniszakat').value="<?= $_POST["jeniszakat"] ?>";

        </script>
        <?php
        endif;
        ?>
    </pre>
</body>

</html>