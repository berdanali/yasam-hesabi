<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PROTEİN HESAPLA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/proteinihtiyacı.css">
</head>
<body>
<nav>
      <a
        href="../home.html"
        style="position: absolute; top: 10px; right: 10px; padding: 30px 20px; color: green; text-decoration: none;"
        >Ana Sayfa</a
      >
      <div class="logo">
        <p>
          <img
            src="../images/attachment_124010263-removebg-preview (1).png"
            alt=""
          />
        </p>
      </div>
    </nav>
  <div style="display:flex; justify-content: center; align-items:center;margin-top:50px">
  <div style="display:flex;flex-direction:column; justify-content: center; align-items:center;width:500px; background:rgba(39, 169, 6, 0.1);padding:20px;border-radius: 50px;box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);" >
    <h4>Günlük Protein Hesaplama</h4>
    <div style="display:flex; flex-direction:column; gap:50px;" class="kutu1">
          <input type="number" class="form-control" id="kilo" name="kilo" style="margin-top:50px; width: 400px;height:50px" placeholder="Kilonuzu kilogram olarak girin.">
          <input class="form-control" id="boy" name="boy" type="number" style="height:50px" placeholder="Boyunuzu santimetre olarak girin.">
          <input class="form-control" id="sex" name="sex" type="text" style="margin-bottom:50px;height:50px" placeholder="Cinsiyetinizi girin.">
        </div>
        <button style="margin-top:50px"><h5 style="padding:10px;width:250px;">Hesapla</h5></button>
  </div>
  </div>
      <?php
function calculate($boy, $kilo, $sex)
{
    /*
    Yağsız Vücut Ağırlığı (ERKEK): = (0.73 * Boy[cm]) – 59.42
    Yağsız Vücut Ağırlığı (KADIN):= (0.65 * Boy[cm]) – 50.74
    yağsız vücut ağırlığının 2,75 katı
     */
    $erkekyagsizagirlik = (0.73 * $boy) - 59.42;
    $kadinyagsizagirlik = (0.65 * $boy) - 50.74;
    if ($_POST['sex'] == "erkek") {
        echo "Günlük Protein İhtiyacınız : " . round($erkekyagsizagirlik * 1.50, 1) . " gr ile " . round($erkekyagsizagirlik * 2.50, 1) . " gr arasında";

    } elseif ($_POST['sex'] == "kadın") {
        echo "Günlük Protein İhtiyacınız : " . $kadinyagsizagirlik * 2.50 . " gr ile " . $kadinyagsizagirlik * 1.50 . " gr arasında";
    } else {
        echo "Lütfen Cinsiyeti Kadın veya Erkek Olarak Giriniz";
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
</body>
</html>