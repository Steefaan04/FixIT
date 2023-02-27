<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="appdata/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="appdata/styleV3.css" />
    <link rel="stylesheet" href="appdata/saznajVise.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="slike/Ikonice/FAVICON2.png" type="image/x-icon">
    <link rel="stylesheet" href="./appdata/modal_style.css" />
    <title>O nama</title>
</head>

<body>
    <?php
    $host = "localhost";
    $dbusername = "root"; //fixitinr_fixit
    $dbpassword = ""; //9KD!Co9]B+D*
    $dbname = "fixitinr_fixit"; //fixitinr_fixit
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    ?>
    <!--#region Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark">
                        <h1 id="naslov" class="text-center">Forma za prijavu</h1>
                        <form action="appdata/login.php" method="POST">
                            <div class="mb-3 mt-4">
                                <label for="exampleInputEmail1" class="form-label">Email adresa</label>
                                <input type="email" name="email" class="form-control login-textbox" id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Šifra</label>
                                <input type="password" name="sifra" class="form-control login-textbox" id="exampleInputPassword1" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary text-light mt-3">
                                Prijavi se
                            </button>
                        </form>
                        <p id="nisi-korisnik">
                            Nemaš nalog? <a id="prijava-mini" href="#">Napravi nalog!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->

    <!--#region Registracija main modal-->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-dark">
                    <div id="reg-right">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="reg-title-top"></div>
                    <h3 class="text-white text-center fw-bold">Registrujte se kao:</h2>
                        <div class="row my-4">
                            <div class="col-sm  text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerKorisnik">Korisnik</button></div>
                            <div class="col-sm razmak text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerFizickoLice">Fizicko lice</button></div>
                            <div class="col-sm text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerFirma">Firma</button></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion-->

    <!--#region Korisnik modal -->
    <div class="modal fade" id="registerKorisnik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content radius-register-mc">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark radius-register">
                        <div class="row">
                            <div class="col-xl-6"><img src="./register_images/register_korisnik.jpg" class="img-fluid w-100 h-100 d-none d-xl-block" alt="Responsive image"></div>
                            <div class="col">
                                <h1 class="text-center mb-4 fw-bolder">Korisnicka registracija</h1>
                                <input style="display: block;" type="text" class="input register-textbox" placeholder="Ime" name="IME KORISNIKA" required>

                                <input style="display: block;" type="text" class="input my-4 register-textbox" placeholder="Prezime" name="PREZIME KORISNIKA" required>

                                <input style="display: block;" type="email" class="input register-textbox" placeholder="Email" name="EMAIL" required>

                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Sifra" name="SIFRA" required>

                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Potvrdite sifru" required>

                                <button type="submit" name="submit" class="btn btn-primary text-center text-white fw-bold w-100">Registruj
                                    se</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--#endregion -->

    <!--#region Fizicko lice modal -->
    <div class="modal fade" id="registerFizickoLice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered ">
            <div class="modal-content radius-register-mc">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark radius-register">
                        <div class="row">
                            <div class="col-xl-6"><img src="./register_images/register_fizickolice.png" class="img-fluid w-100 h-100 d-none d-xl-block" alt="Responsive image"></div>
                            <div class="col">
                                <h2 class="text-center mb-4 fw-bolder">Registracija fizickog lica</h2>

                                <input style="display: block;" type="text" class="input register-textbox" placeholder="Ime" name="IME FIZICKOG LICA" required>
                                <input style="display: block;" type="text" class="input my-4 register-textbox" placeholder="Prezime" name="PREZIME FIZICKOG LICA" required>

                                <input style="display: block;" type="email" class="input register-textbox" placeholder="Email" name="EMAIL" required>

                                <input style="display: block;" type="text" class="input my-4 register-textbox" placeholder="Broj telefona" name="BROJ TELEFONA" required>

                                <input style="display: block;" type="text" class="input my-4 register-textbox" placeholder="JMBG" name="JMBG" required>

                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Sifra" name="SIFRA" required>
                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Potvrdite sifru" required>
                                <div class="row">
                                    <div class="col">
                                        <select class="dropdown reg-drop" required id="delatnost-levo" NAME="delatnost">
                                            <option value="odaberi" disabled selected>Odaberi delatnost...</option>
                                            <?php
                                            $delatnosti = $conn->query("SELECT naziv_delatnosti FROM delatnosti")
                                                or die($conn->error);
                                            while ($podatakDelatnost = $delatnosti->fetch_assoc()) : ?>
                                                <option value="<?= $podatakDelatnost['naziv_delatnosti'] ?>">
                                                    <?= $podatakDelatnost['naziv_delatnosti'] ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <select class="dropdown my-4 reg-drop" required id="vrstaPosla" name="VRSTA_POSLA">
                                    <!-- OPASNOST SQL INJECTIONA -->
                                    <option value="odaberiPosao" id="odaberiPosao" disabled selected>Odaberi vrstu posla
                                    </option>
                                    <!--  -->
                                </select>
                                <select class="dropdown reg-drop" NAME="OPSTINA">
                                    <option value="odaberi" disabled selected>Odaberi opstinu...</option>
                                    <?php
                                    $opstine = $conn->query("SELECT ime_opstine FROM opstine")
                                        or die($conn->error);
                                    while ($podatakOpstine = $opstine->fetch_assoc()) : ?>
                                        <option value="<?= $podatakOpstine['ime_opstine'] ?>">
                                            <?= $podatakOpstine['ime_opstine'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                                <button type="submit" name="submit" class="btn btn-primary text-center text-white fw-bold w-100 mt-4">Registruj
                                    se</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--#endregion -->

    <!--#region firma modal -->
    <div class="modal fade" id="registerFirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered ">
            <div class="modal-content radius-register-mc">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark radius-register">
                        <div class="row">
                            <div class="col-xl-6"><img src="./register_images/register_firma.jpg" class="img-fluid w-100 h-100 d-none d-xl-block" alt="Responsive image"></div>
                            <div class="col">
                                <h1 class="text-center mb-4 fw-bolder">Registracija firme</h1>
                                <input style="display: block;" type="text" class="input register-textbox" placeholder="Ime firme" name="IME FIRME" required>
                                <input style="display: block;" type="text" class="input my-4 register-textbox" placeholder="Ime i prezime vlasnika" name="IME I PREZIME VLASNIKA" required>
                                <input style="display: block;" type="email" class="input register-textbox" placeholder="Email" name="EMAIL" required>
                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Sifra" name="SIFRA" required>
                                <input style="display: block;" type="password" class="input my-4 register-textbox" placeholder="Potvrdite sifru" required>
                                <div class="row">
                                    <div class="col">
                                        <select class="dropdown reg-drop" required id="delatnost-firma" NAME="DELATNOST">
                                            <option value="odaberi" disabled selected>Odaberi delatnost</option>
                                            <?php
                                            $delatnosti = $conn->query("SELECT naziv_delatnosti FROM delatnosti")
                                                or die($conn->error);
                                            while ($podatakDelatnost = $delatnosti->fetch_assoc()) : ?>
                                                <option value="<?= $podatakDelatnost['naziv_delatnosti'] ?>">
                                                    <?= $podatakDelatnost['naziv_delatnosti'] ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>


                                <select class="dropdown my-4 reg-drop" required id="vrstaPoslaFirma" name="VRSTA_POSLA">
                                    <option value="odaberi" id="odaberi" disabled selected>Odaberi vrstu posla </option>
                                </select>

                                <select class="dropdown reg-drop mb-4" id="firma_opstina" NAME="OPSTINA">
                                    <option value="odaberi" disabled selected>Odaberi opstinu</option>
                                    <?php
                                    $opstine = $conn->query("SELECT ime_opstine FROM opstine")
                                        or die($conn->error);
                                    while ($podatakOpstine = $opstine->fetch_assoc()) : ?>
                                        <option value="<?= $podatakOpstine['ime_opstine'] ?>">
                                            <?= $podatakOpstine['ime_opstine'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>

                                <label class="form-label" for="customFile">Izaberite sliku kao dokaz o postojanju
                                    firme:</label>
                                <input type="file" class="form-control upload-rad text-white" id="customFile" />

                                <button type="submit" name="submit" class="btn btn-primary text-center text-white fw-bold w-100 mt-4">Registruj
                                    se</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->

    <!--#region NavBar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top aa">
        <div class="container">
            <a href="./index.php" class="nav brand"><img class="image" src="./slike/logo/Logo(white).svg" alt="logo" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto z">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">Pocetna</a>
                    </li>
                    <li class="nav-item">
                        <a href="./onama.php" class="nav-link">O nama</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Prijavi se</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#registerModal">Registruj se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--#endregion -->
    <!--#region UnderNavBar-->
    <section class="bg-dark text-light p-3 pt-0 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="display-1">
                        Upoznajte naš <span class="text-primary">TIM</span>
                    </h1>
                    <p class="lead my-4">
                        Tim se sastoji iz učenika Tehničke škole Mladenovac.<br />
                        Svi članovi tima su učenici 4. godine, smera informacione
                        tehnologije.<br />
                        Svako od nas raspolaže veštinama programiranja, grafickog dizajna, WEB
                        dizajna kao i mnogim drugim!
                    </p>
                    <button class="btn btn-primary btn-lg" onclick="location.href='#sekcija'">
                        Zapocni
                    </button>
                </div>
                <img class="img-fluid w-25 d-none d-sm-block" src="slike/team.png" />
            </div>
        </div>
    </section>
    <!-- #endregion -->
    <!-- #region Ostatak-->
    <section class="bg-primary text-light p-5 ">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center text-center text-sm-start">
                <h3 class="mt-1">Profili članova tima</h3>
                <!--DODATI NESTO-->
                <button type="button" class="btn btn-warning mt-1" onclick="location.href='#a'">
                    FRONTEND
                </button>
                <button type="button" class="btn btn-warning mt-1" onclick="location.href='#v'">
                    BACKEND
                </button>
                <button id="a" type="button" class="btn btn-warning mt-1" onclick="location.href='#c'">
                    FRONTEND
                </button>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <h1>Developers: <span class="text-warning">FRONTEND </span></h1>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-file-earmark-code-fill"></i>
                            </div>
                            <h3 class="card-title mb-3 ">Stefan Ilić</h3>
                            <p class="card-text">Programer</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-stefani">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-file-earmark-code-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Mihajlo Jovanović</h3>
                            <p class="card-text">Programer</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-mihajloj">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-file-earmark-code-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Andrija Andrejić</h3>
                            <p class="card-text">Programer</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-andrijaa">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-file-earmark-code-fill"></i>
                            </div>
                            <h3 class="card-title mb-3">Mateja Milentijević</h3>
                            <p class="card-text">Programer</p>
                            <button id="v" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-matejam">SAZNAJ
                                VIŠE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" p-5">
        <div class="container">
            <h1>Developer: <span class="text-warning">BACKEND </span></h1>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <h3 class="card-title mb-3">Relja Stojanović</h3>
                            <p class="card-text">Database coordinator</p>
                            <button id="c" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-reljas">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <h1>Graphics Designers: <span class="text-warning">FRONTEND </span></h1>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-brush"></i>
                            </div>
                            <h3 class="card-title mb-3">Stefan Brkić</h3>
                            <p class="card-text">Graphics Designer</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-stefanb">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-brush"></i>
                            </div>
                            <h3 class="card-title mb-3">Mateja Živanović</h3>
                            <p class="card-text"> Graphics Designer</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ImePrezime-matejaz">SAZNAJ VIŠE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img class="img-fluid" src="./slike/programmers2.png" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Kako tim funkcioniše?</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque
                        omnis ratione non quasi dolore libero!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Delectus, optio praesentium. Culpa quasi, cumque numquam accusamus
                        hic veritatis exercitationem vel repellat esse est, labore magni
                        harum possimus nulla? Ipsum, natus!
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>Saznaj više
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="head bg-dark pb-5">
        <div class="container">
            <div class="card border-dark bg-dark">
                <div class="card-body">
                    <h1 id="r" class="font-weight-light text-center py-4 my-4"><span class="text-primary">Contact</span><span class="text-white"> US</span></h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">

                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9 w-65">
                                    <h3 class="font-weight-light text-white mt-5">Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit.
                                        Delectus, optio praesentium.
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-0">
                            <form>
                                <div class="form-row mb-3">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12 d-inline-block float-start pb-3">
                                        <label class="text-white ">Ime</label>
                                        <input type="text" class="form-control border-secondary w-100 mb-1 " placeholder="Ime...">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12 d-inline-block float-end pb-3">
                                        <label class="text-white ">Prezime</label>
                                        <input type="text" class="form-control border-secondary w-100 mb-1" placeholder="Prezime...">
                                    </div>
                                </div>
                                <label class="pt-3 text-white ">Email</label>
                                <input type="email" class="form-control border-secondary mb-3" placeholder="Email...">
                                <label class="pt-3 text-white ">Vasa poruka</label>
                                <textarea class="form-control mb-4 border-secondary" placeholder="Poruka..." name="" id="" cols="10" rows="5"></textarea>
                                <button class="btn btn-primary mb-5 mt-4 float-end">Posalji</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>
    <!--#endregion-->
    <!--#region ViseONamaMateja -->
    <div class="modal fade" id="ImePrezime-matejam">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Mateja Milentijević</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                <p>
                                <p class="mejl mb-0 text-center text-sm-start">matejamilentijevic1205@gmail.com</h>
                                    <h class="broj mb-1">tel: 061/26-34-945
                                </p>
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta,
                                iusto doloribus placeat fuga, illum optio vitae cupiditate corrupti, fugiat blanditiis
                                accusamus numquam maxime provident officia.</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Programer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region ViseONamaStefanI -->
    <div class="modal fade" id="ImePrezime-stefani">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Stefan Ilić</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                <p>
                                <p class="mejl mb-0 text-center text-sm-start">ilic.stefann4@gmail.com</h>
                                    <h class="broj mb-1">tel: 064/98-27-168
                                </p>
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sit
                                quibusdam labore eos repellat vel nobis perspiciatis, consequuntur odio, alias, eligendi
                                est mollitia aperiam iste.</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Programer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region ViseOMihajloJ -->
    <div class="modal fade" id="ImePrezime-mihajloj">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Mihajlo Jovanović</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                <p>
                                <p class="mejl mb-0 text-center text-sm-start">micmicmia@gmail.com</h>
                                    <h class="broj mb-1">tel: 061/25-82-368
                                </p>
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                                quis id, repellendus quibusdam corporis asperiores, magnam assumenda possimus commodi
                                labore similique? Ea voluptas eos minus!</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Programer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region ViseONamaAndrijaA -->
    <div class="modal fade" id="ImePrezime-andrijaa">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Andrija Andrejić</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                <p class="mejl mb-0 text-center text-sm-start">aki.andrejic123@gmail.com</h>
                                    <h class="broj mb-1">tel: 064/33-66-999
                                </p>
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt rem
                                reprehenderit dolor ipsum hic accusamus fugit eum quibusdam magni, mollitia nulla harum
                                esse ea consequuntur!</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Programer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region ViseONamaReljaS-->
    <div class="modal fade" id="ImePrezime-reljas">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Relja Stojanović</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                <p class="mejl mb-0 text-center text-sm-start">relja.stojanovic12@gmail.com</h>
                                    <h class="broj mb-1">tel: 060/13-52-676
                                </p>
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt rem
                                reprehenderit dolor ipsum hic accusamus fugit eum quibusdam magni, mollitia nulla harum
                                esse ea consequuntur!</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Database coordinator</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#endregion -->
    <!--#region ViseONamaMatejaZ -->
    <div class="modal fade" id="ImePrezime-matejaz">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Mateja Živanović</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Multimedija</p>
                                <p class="mejl mb-0 text-center text-sm-start">littlemaki05@gmail.com</h>
                                </p></br>
                                <h class="broj mb-1">tel: 064/03-30-611
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere
                                consequuntur, obcaecati vel modi autem dicta maxime ex magnam pariatur aliquam error
                                animi enim. Facilis, ratione.</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Graphics Designer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region ViseONamaStefanB -->
    <div class="modal fade" id="ImePrezime-stefanb">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h2 class="ime"><b>Stefan Brkić</b></h2>
                    <button class="btn-close p-4" data-bs-dismiss="modal" data-bs-target="ImePrezime"></button>
                </div>
                <div class="modal-body">

                    <div class="row row-cols-2">

                        <div class="col-8">
                            <h5 class="levi-tekst">
                                <h4 class="mb-0 text-center text-sm-start">Tehnička Škola Mladenovac</h4>
                                </br>
                                <p class="smer-it text-center text-sm-start">Elektrotehničar Informacionih Tehnologija
                                </p>
                                <p class="mejl mb-0 text-center text-sm-start">stefanbrkicdzn.contact@gmail.com</h>
                                </p></br>
                                <h class="broj mb-1">tel: 062/87-14-081
                        </div>
                        <div class="col-4"><img src="slike/Profile Banenr.jpg" class="img-fluid profilna" alt="Responsive image"></div>
                    </div>


                    <div class="razdvoj"></div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <h6 class="donji-tekst">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere
                                consequuntur, obcaecati vel modi autem dicta maxime ex magnam pariatur aliquam error
                                animi enim. Facilis, ratione.</h6>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <img src="slike/logo/Logo.svg" class="img-fluid fixit-sv" alt="Responsive image">
                    <p style="padding: left 1em;"><b>Graphics Designer</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--#region Footer-->
    <footer class=" p-2 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 FixIT</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-2">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
    <!--#endregion-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#delatnost-levo").change(function() {
                var selectedOption = $(this).children("option:selected").val();
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {
                        option: selectedOption
                    },
                    success: function(response) {
                        $("#vrstaPosla").html(response); // Update the content of the #result div with the selected value
                    }
                });
            });
        });

        $(document).ready(function() {
            $("#delatnost-firma").change(function() {
                var selectedOption = $(this).children("option:selected").val();
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {
                        option: selectedOption
                    },
                    success: function(response) {
                        $("#vrstaPoslaFirma").html(response); // Update the content of the #result div with the selected value
                    }
                });
            });
        });
    </script>
</body>

</html>