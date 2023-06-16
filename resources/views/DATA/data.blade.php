<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 

    {{-- fav-icon --}}
    <link rel="shorcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet
        integrity=" sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {
            background-image: url("aset/brand/deni.jpg");
        }

    </style>
    <title>DATA | DUA PUTRA</title>
</head>

<body>


    {{-- tabel --}}
    <div class="container col-8">
        <br>
        <a class="btn btn-primary" href="/create">TAMBAH <i class="bi bi-plus-square"></i></a>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/data" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>
<table class="table" id="example" class="display">
            @if (session('setatus'))
                <div class="alert alert-success">
                    {{ session('setatus') }}
                </div>
            @endif
            @if (session('sukses'))
                <div class="alert alert-success">
                    {{ session('sukses') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">POTO</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead id="example" class="display">
            <tbody>
                @foreach ($duaputra as $dp)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $dp->nama }}</td>
                        <td>{{ $dp->alamat }}</td>
                        <td>{{ $dp->email }}</td>
                        <td>{{ $dp->jurusan }}</td>
                        <td><img src="/images/{{ $dp->poto }}" width="100"></td>
                        <td>
                            <a href="/edit/{{ $dp->id }}" class="btn btn-info "><i
                                    class="bi bi-arrow-down-left-square"></i></a>
                            <form action="/hapus/{{ $dp->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin mau dihapus')"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
</table>
        {{ $duaputra->links() }}
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="bootstrap/js/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>

</body>

</html>
