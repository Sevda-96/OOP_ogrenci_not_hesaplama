<?php
   
class Bilgi{

public $isim;
public $soyisim;
public $vize;
public $final;
public $ders;

public function __construct(){
    
    //inputlar da deger var mı yok mu kontrol edder.
    if(empty($_REQUEST['isim']) || empty($_REQUEST['soyisim']) || empty($_REQUEST['ders']) || empty($_REQUEST['vize']) || empty($_REQUEST['final'])){
        header('Location:index.php');
    }
    else{

        //verileri filtreleme yapar bosluk veya html tagleri var ise kaldirir ve diziye atar.
        $dizi = array_map(function($e){
            return strip_tags(trim($e));

        },$_POST);
        
        //verileri public degiskenlere atar.
        $this->isim = $dizi['isim'];
        $this->soyisim = $dizi['soyisim'];
        $this->ders = $dizi['ders'];
        $this->vize = $dizi['vize'];
        $this->final = $dizi['final'];

    }
}
public function __destruct(){}

}

class Hesapla extends Bilgi{

    protected $harfnotu="";
    
    //vize ve final not ortalasini bulur.
    public function nothesapla(){
        $sonuc =($this->vize* 0.40) + ($this->final*0.60);
        return $sonuc;
    }

    public function harfhesapla($sonuc){

        //sonuca göre harf notu belirler.
        switch($sonuc){
        case($sonuc<=100 && $sonuc>=90):
            $this->harfnotu = "AA GEÇTİ :)";
            break;
        case($sonuc<=89 && $sonuc>=85):
            $this->harfnotu = "BA GEÇTİ :)";
            break;
        case($sonuc<=84 && $sonuc>=75):
            $this->harfnotu = "BB GEÇTİ :)";
            break;
        case($sonuc<=74 && $sonuc>=70):
            $this->harfnotu = "CB GEÇTİ :)";
            break;
        case($sonuc<=69 && $sonuc>=50):
            $this->harfnotu = "CC GEÇTİ :)";
            break;
        case($sonuc<=49 && $sonuc>=0):
            $this->harfnotu = "FF KALDI :(";
            break;
        default:
            $this->harfnotu = "GEÇERSİZ";
            break;
        }

        return $this->harfnotu;
    }

}
//nesne olustur    
$a = new Hesapla();
//ilgili fonksiyonlar cagrildi.
$sonuc = $a->nothesapla();
$durum = $a->harfhesapla($sonuc);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container text-center">
        <div class="row-md-12">
        <h1>Durum Tablosu</h1>
        <hr/>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Ders Adı</th>
                <th scope="col">İsim</th>
                <th scope="col">Soyisim</th>
                <th scope="col">Vize Notu</th>
                <th scope="col">Final Notu</th>
                <th scope="col">Durum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?=$a->ders?></td>
                <td><?=$a->isim?></td>
                <td><?=$a->soyisim?></td>
                <td><?=$a->vize?></td>
                <td><?=$a->final?></td>
                <td><?=$sonuc." ".$durum?></td>
                </tr>
            </tbody>
            </table>
        </div>
        <a href="index.php" class="btn btn-success">Tekrar Hesapla</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
