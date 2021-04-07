<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contents -->
    <div class="row">

        <!-- Category -->
        <div class="col-md-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eveniet cum nostrum, placeat accusamus repudiandae suscipit dolore fuga veniam vero ad aliquam quae doloremque dolor iure, minima fugiat cumque. Odit?</p>
        </div>
        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <!-- Gallery -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>

                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>

                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>

                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>

                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>

                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nemo facere perferendis, amet ad esse minima non soluta explicabo, eaque mollitia unde quis suscipit iure? Corrupti nostrum illum possimus dignissimos?</p>
                        </div>
                    </div>
                </div>
                <!-- Suggestions -->
                <div class="col-12">
                    <div class="container">
                        <form action="">
                            <label for="nm">Nama Buah</label>
                            <input type="text" id="nm" name="nama" class="form-control">
                            <br>

                            <label for="em">Harga Buah</label>
                            <input type="number" name="email" id="em" class="form-control">
                            <br>

                            <label for="al">Alamat Pengiriman</label><br>
                            <textarea name="alamat" id="al" cols="50" rows="10"></textarea>
                            <br>

                            <label for="jk">Potongan Harga</label><br><br>
                            <input type="radio" name="jensKelamin" id="jkl" value="laki">Diskon
                            <input type="radio" name="jensKelamin" id="jkl" value="perempuan">Tidak Diskon
                            <br>

                            <label for="jr">Jenis Buah</label>
                            <select name="jenisBuah" id="jr">
                                <option value=""></option>
                            </select>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>