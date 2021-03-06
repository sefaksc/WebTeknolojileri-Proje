<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Web Teknolojileri Projesi</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand mb-1" href="index.html">Hüseyin Sefa Kesici</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive" style>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ilgialan.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <main class="text-center container d-flex h-100 align-items-center">
          <div class="mx-auto col-2mx-auto">
            <h1>
                <?php
                if(($_POST["email"] == "g201210001@sakarya.edu.tr") && ($_POST["password"] == "g201210001"))
                {
                    echo "<h1 class=\"login_yazi\">Hoşgeldiniz \"g201210001\"</h1> <br><br> <a class=\"btn bg-light\" href=\"index.html\">Ana Sayfa</a>";
                }
                else
                {
                    echo "<h1 class=\"login_yazi\">Giriş bilgileriniz hatalı. Lütfen tekrar deneyiniz.</h1> <br><br> <a class=\"btn bg-light\" href=\"login.html\">Giriş</a>";
                }
                ?>
            </h1>
          </div>
        </main>
      </header>
    <footer class="py-5 bg-dark text-white text-center en_alt">
        Web-Teknolojileri-Projesi © Hüseyin Sefa Kesici 2021
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>
