  
<?php
    $luasTanah = $_POST['luast'];
    $hargaTanah = $_POST['hargat'];
    $luasBangunan = $_POST['luasb'];
    $hargaBangunan = $_POST['hargab'];
    $njoptkp = $_POST['njoptkp'];

    $totalTanah = $luasTanah * $hargaTanah;
    $totalBangunan = $luasBangunan * $hargaBangunan;

    $njop = $totalTanah + $totalBangunan;
    $njkp = $njop - $njoptkp;

    if ($njop <= 1000000000) {
        $pbb = 0.1 / 100 * $njkp;
    } else {
        $pbb = 0.2 / 100 * $njkp;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pajak PBB</title>
</head>
<body>
    
</body>
</html>
<div class="hasil">
    <div class="kotakhasil">
        <h2><?php echo "Dari data yang dimasukkan, <br> didapatkan besaran pajak yang harus dibayar oleh Anda senilai <br> Rp. $pbb per tahun.";
        ?></h2>
        <h2>Rincian:</h2>
        <p><?php echo "Total Tanah: Rp. $totalTanah<br>"; ?></p>
    <p><?php echo "Total Bangunan: Rp. $totalBangunan<br>"; ?></p>
    <p><?php echo "NJOP: Rp. $njop <br>"; ?></p>
    <p><?php echo "NJKP: Rp. $njkp <br>"; ?></p>
    <p><?php echo "PBB : Rp. $pbb"; ?></p>
    <div class="gambarlogo">
    <img src="image/logo.png" alt="Logo">
</div>
    

    <form method="post" action="calculator.php">
        <input type="submit" value="Hitung Ulang">
    </form>
    </div>
    
</div> 
   
