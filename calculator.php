<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Pajak PBB</title>
</head>

<body style="background-color: #fafafa;">
    <div class="hitung">
        <div class="header">
            <a href="index.php">
                <i class="fas fa-arrow-left"></i>
            </a>
            
        </div>
        <h1>Masukkan Data Anda Disini!</h1>
        <div class="kalkulator">
            <div class="kaltkiri">
                <form method="post" action="hasil.php">
                    
                    <label>Luas Tanah (m^2)*</label><br />
                    <input required type="text" placeholder="Ketik disini..." name="luast"><br />
                    <label>Harga Tanah (m^2)*</label><br />
                    <input required type="text" placeholder="Ketik disini..." name="hargat"><br />
                    <label>NJOP-TKP</label><br />
                    <input required type="text" placeholder="Ketik disini..." name="njoptkp"><br />
            </div>
            <div class="kaltkanan">
                <label>Luas Bangunan (m^2)*</label><br />
                <input required type="text" placeholder="Ketik disini..." name="luasb"><br />
                <label>Harga Bangunan (m^2)*</label><br />
                <input required type="text" placeholder="Ketik disini..." name="hargab"><br />
                <div class="submit">
                    <input type="submit" value="HITUNG">
                </div>
            </div>




            </form>
        </div>
    </div>

</body>

</html>