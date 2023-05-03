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
                        <a href="{{route('add')}}" class="btn btn-danger mb-3">Veri Ekle</a>
                        <table class="table text-center">
                            <thead> 
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ad</th>
                                    <th scope="col">Soyad</th>
                                    <th scope="col">nick</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Aksiyonlar</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->last_name}}</td>
                                    <td>{{$item->nick_name}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td><a href="{{route('update',$item->id)}}" class="btn btn-outline-warning mr-3">Güncelle</a>
                                        <a href="{{route('delete',$item->id)}}" class="btn btn-outline-danger ">Sil</a></td>
                                </tr>
                                @endforeach
                                
                                
                                </tr>
                            </tbody>
                        </table>
            </div>   
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>