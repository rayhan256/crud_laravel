<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Update Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Update Mahasiswa</h1>
        <div class="row">
            <form action="/mahasiswa/update" method="post">
                {{ csrf_field() }}
                @foreach ($mahasiswa as $i)
                <input type="hidden" name="id_mhs" value="{{$i->id_mhs}}">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control w-100" value="{{$i->nama}}">
                </div>
                <div class="form-group">
                    <input type="text" name="umur" class="form-control w-100" value="{{$i->umur}}">
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" class="form-control w-100" value="{{$i->alamat}}">
                </div>
                <input type="submit" value="Submit" class="btn btn-primary">
                @endforeach
            </form>
        </div>
    </div>
</body>
</html>