<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>İDEAL KİLO HESAPLAMA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/idealKilo.css">
</head>

<body>
  
  <nav>
  <a href="../secim.html" style="position: absolute; top: 10px; right: 10px; padding: 30px 20px;  color:green; text-decoration: none;">Ana Sayfa</a>

    <div class="logo">
      <p> <img src="../images/attachment_124010263-removebg-preview (1).png" alt=""> </p>
    </div>

  </nav>

  <header>
    <div class="sema">
      <h4>İDEAL KİLO HESAPLAMA</h4>


      <div class="box">
        <div class="container mt-3">
          <form method="POST">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="weight"></label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="weight" name="kilo" style=" box-sizing: border-box;

          
          
          display: flex;
          flex-direction: row;
          align-items: center;
          padding: 10px 20px;
          gap: 10px;
          
          width: 427px;
          height: 60px;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 1;
          align-self: stretch;
          flex-grow: 0;" placeholder="
          Kilonuzu kilogram olarak girin.">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="height"></label>
              <div class="col-sm-10">
                <input class="form-control" id="height" name="boy" type="number" style=" box-sizing: border-box;

          /* Auto layout */
          
          display: flex;
          flex-direction: row;
          align-items: center;
          padding: 10px 20px;
          gap: 10px;
          
          width: 427px;
          height: 60px;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 1;
          align-self: stretch;
          flex-grow: 0;" placeholder="
          Boyunuzu santimetre olarak girin.">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="height"></label>
              <div class="col-sm-10">
                <input class="form-control" id="sex" name="sex" type="text" style="box-sizing: border-box;

          /* Auto layout */
          
          display: flex;
          flex-direction: row;
          align-items: center;
          padding: 10px 20px;
          gap: 10px;
          
          width: 427px;
          height: 60px;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 1;
          flex-grow: 0;" placeholder="Cinsiyetinizi girin.">

              </div>
            </div>
            <div class="buton">
              <div class="form-group mt-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 align-right">
                  <button type="submit" name="Hesapla" style="/* Auto layout */

          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          padding: 10px 30px;
          gap: 20px;
          
          width: 427px;
          height: 65px;
          
          background: #27A906;
          border-radius: 48px;
          
          /* Inside auto layout */
          
          flex: none;
          order: 4;
          align-self: stretch;
          flex-grow: 0;">
                    <h5 style="width: 130px;
          height: 40px;
          
          font-family: 'Rubik';
          font-style: normal;
          font-weight: 400;
          font-size: 30px;
          line-height: 40px;
          /* identical to box height, or 133% */
          
          letter-spacing: 0.1em;
          
          color: #FFFFFF;
          
          
          /* Inside auto layout */
          
          flex: none;
          order: 0;
          flex-grow: 0;"> Hesapla</h5>
                  </button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  <div class="row"></div>
  <div class="col-sm-2"></div>
  <div class="col-sm-10 align-right">

    <div class="sonuc3">
      <?php
   
function calculate($boy, $kilo)
{
  

    $idealkilo = ($boy - 100 - (($boy - 150) / 4));
    $message1 = "İdeal kilonuzun üzerindesiniz :";
    $message2 = "İdeal kilonuzun altınızdasınız:" ;
      
    $fark = $idealkilo - $kilo;
    $index = ($kilo / $boy / $boy) * 10000;
    $bmiRounded = round($index, 1);

    if ($idealkilo - $kilo < 0) {
        echo "<h4>İdeal kilonuz =" . "$idealkilo" .  "kilonuza ulaşmanız için vermeniz gereken " . abs($fark) . " kg kaldı </h4>";
        echo "<h4>$message1</h4>";
    } else {
        echo "<h4>İdeal kilonuz =" . "$idealkilo" . "İdeal kilonuza ulaşmanız için almanız gereken " . "$fark" . " kg kaldı </h4>";
        echo "<h4>$message2</h4>";
    }
    $boy = filter_var(htmlentities(floatval($_POST['boy'])), FILTER_SANITIZE_NUMBER_FLOAT);
  $kilo = filter_var(htmlentities(floatval($_POST['kilo'])), FILTER_SANITIZE_NUMBER_FLOAT);
  $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
  
  if ($boy && $kilo && $sex) {
    calculate($boy, $kilo, $sex);
  } else {
    echo "Lütfen tüm alanları doldurun.";
  }
}
?>
    </div>
  </div>
  </div>
  </div>
</body>

</html>