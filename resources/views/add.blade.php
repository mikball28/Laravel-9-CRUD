<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row justify-content-center ">
        <div class="col-xl-6 col-lg-5 col-md-6 items-align-center mt-5">
            <div class="card shadow-lg my-5">
                <div class="mx-4 my-3">
                    <h3>Veri Ekle</h3>
                    <form action="{{route('add')}}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label class="mb-1">Ad</label>
                                <input type="text" class="form-control" name="name" placeholder="Ad">
                            </div>
                            <div class="mb-3">
                                <label class="mb-1">Soyad</label>
                                <input type="text" class="form-control" name="lastName" placeholder="Soyad">
                            </div>
                            <div class="mb-3">
                                <label class="mb-1">Nick</label>
                                <input type="text" class="form-control" name="nickName" placeholder="Nick">
                            </div>
                            <div class="mb-3">
                                <label class="mb-1">Telefon</label>
                                <input type="text" class="form-control" name="phoneNumber" placeholder="Telefon">
                            </div>
                           
                            <button type="submit" class="btn btn-success">Ekle</button>
                        </form>

                </div>
                    
                    
                 
            </div>   
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>