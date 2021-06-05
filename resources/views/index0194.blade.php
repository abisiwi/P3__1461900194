<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
          </div>
      </nav><br>
    <div class="container">
        <a href="{{route('tambah0194')}}" class="btn btn-warning">tambah data</a><br>
        <table class="table">
            <br>
            <tbody>

              <tr class="table-active">
                    <td>No</td>
                    <td>Nama Dokter</td>
                    <td>Jabatan</td>
                    <td>Aksi</td>

              </tr>

                @foreach ( $data as $no1 )
                    
                
                <tr>
                    <td>{{$no1->id}}</td>
                    <td>{{$no1->nama}}</td>
                    <td>{{$no1->jabatan}}</td>
                    <td>
                    <a href="{{route('edit0194',$no1->id)}}" class="btn btn-primary">edit</a>
                    <a href="{{route('hapus0194',$no1->id)}}" class="btn btn-danger">hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>