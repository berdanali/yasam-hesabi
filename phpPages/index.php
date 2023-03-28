<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BKI HESAPLAYICI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/index.css">
</head>
<body>
  <nav>
  <a href="../secim.html" style="position: absolute; top: 10px; right: 10px; padding: 30px 20px;  color:green; text-decoration: none;">Ana Sayfa</a>
    <div class="logo">
      <p><img src="../images/attachment_124010263-removebg-preview (1).png" alt=""></p>
      

    </div>
  </nav>

<div class="sema">
  <header class="mt-3 text-center row">

    <div class="col-sm-10 align-right">
	
      <h4 class="text-secondary ">BEDEN KÜTLE İNDEKSİ HESAPLAMA</h4>
    </div>
  </header>
  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)"></label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="weight" name="Kilo" style="box-sizing: border-box;

          /* Auto layout */
          position: absolute;
          display: flex;
          flex-direction: row;
          align-items: center;
          padding: 15px 30px;
          gap: 10px;
          margin-top: 1.5rem;
          margin-left: -5rem;
          
          width: 400px;
          height: 68px;

          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 20px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 1;
          flex-grow: 0;" placeholder="
          Kilonuzu kilogram olarak girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="height" name="BoyUzunluğu" type="number" style="box-sizing: border-box;
   
          /* Auto layout */
          position: absolute;
          display: flex;
          flex-direction: row;
          align-items: center;
          padding: 15px 30px;
          gap: 10px;
          
          width: 400px;
          height: 68px;
          margin-top: 6rem;
          margin-left: -5rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 20px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 2;
          flex-grow: 0;" placeholder="
          Boyunuzu santimetre olarak girin.">
        </div>
      </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit"  name="Hesapla" style="
          width: 258px;
          height: 68px;
          position: absolute;
          background: #27A906;
          border-radius: 48px;
          
          margin-top: 7rem;
          margin-left: -7rem;
          
          flex: none;
          order: 3;
          flex-grow: 0;"
          > <h5 style="position: absolute;
          width: 130px;
          height: 40px;
          left: 80px;
          top: 12px;
         
          
          
          font-family: 'Rubik';
          font-style: normal;
          font-weight: 400;
          font-size: 30px;
          line-height: 40px;
          /* identical to box height, or 133% */
          
          letter-spacing: 0.1em;
          
          color: #ffffff;">Hesapla</h5>
        </button>
        </div>
      </div>
    </div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">

<div class="sonuc">
      <?php
 function calculate($uzunluk, $kilo)
{
    $idealkilo = ($uzunluk - 100 - (($uzunluk - 150) / 4));
    $message1 = "İdeal kilonuzun üzerindesiniz
     " ;

    $message2 = "İdeal kilonuzun altınızdasınız  
      
        ";
    $fark = $idealkilo - $kilo;
    $index = ($kilo / $uzunluk / $uzunluk) * 10000;
    $bmiRounded = round($index, 1);

    if ($idealkilo - $kilo < 0) {
        echo "<h4>İdeal kilonuz =  " . "$idealkilo". " İdeal kilonuza ulaşmanız  için vermeniz gereken " . abs($fark) . " kg kaldı </h4>";
        echo "<h4>$message1</h4>";
    } else {
        echo "<h4>İdeal kilonuz = " . "$idealkilo" . " İdeal kilonuza ulaşmanız  için almanız gereken " . "$fark" . " kg kaldı </h4>";
        echo "<h4>$message2</h4>";
    }
    $uzunluk = filter_var(htmlentities(floatval($_POST['BoyUzunluğu'])), FILTER_SANITIZE_NUMBER_FLOAT);
$kilo = filter_var(htmlentities(floatval($_POST['Kilo'])), FILTER_SANITIZE_NUMBER_FLOAT);
calculate($uzunluk, $kilo);
}

//Boy-100-[(boy-150)/4] ideal kilo formulu


?>


</div>
    </div>

  </div>
</body>
</html>