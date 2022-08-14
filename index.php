
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
            <form method="post" action="islem.php?" > 
                <div class="col-md-3">
                <h1 class="text text-success">Not Hesaplama</h1>
                <hr class="text text-success">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">İsim</label>
                    <input type="text" class="form-control" name="isim">
                    <div class="form-text"></div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Soyisim</label>
                    <input type="text" class="form-control" name="soyisim">
                </div>
                </div>
                <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ders</label>
                    <input type="text" class="form-control" name="ders">
                </div>
                </div>
                <div class="rowmd--12">
                <div class="col-md-3">
                <div class="mb-3">
                    <label class="form-check-label" for="exampleCheck1">Vize Notu Gir</label>
                    <input type="number" class="form-control" name="vize">  
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="exampleCheck1">Final Notu Gir</label>
                    <input type="number" class="form-control" name="final">  
                </div>
                <button type="submit" class="btn btn-warning" name="submit">Hesapla</button>
                </div>
                
            </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>