<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- fav-icon --}}
    <link rel="shorcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon">

    <title>tambah data</title>
</head>

<body>
    <div class="container col-5">
        <br>
        <form method="post" action="/student">
            @csrf
            <div class="form-group mb-3  ">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" id="nama" placeholder="Silahkan isikan nama anda" name="nama"
                    Required>
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <input type="text" class="form-control" id="alamat" placeholder="Silahkan isikan alamat  anda"
                    name="alamat" Required>
            </div>
            <form>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" id="email" placeholder="Silahkan isikan nama anda"
                        name="email" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">JURUSAN</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Silahkan isikan nama anda"
                        name="jurusan" required>
                </div>
                <div class="form-group">
                    <label for="poto">POTO</label>
                    <input type="file" class="form-control" id="poto" placeholder="Silahkan isikan poto anda"
                        name="poto" required>
                </div><br>
                <button type="submit" class="btn btn-primary">TAMBAH DATA</button>
            </form>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
