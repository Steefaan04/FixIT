<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="./appdata/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./appdata/zanimanjaV2.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./slike/Ikonice/FAVICON2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>FixIT</title>
</head>

<body>
    <?php
    $host = "localhost";
    $dbusername = "root"; //fixitinr_fixit
    $dbpassword = ""; //9KD!Co9]B+D*
    $dbname = "fixitinr_fixit"; //fixitinr_fixit
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    $radnik = $conn->query("SELECT ID,Ime,Prezime FROM `fizicko_lice` INNER JOIN poslovi ON fizicko_lice.Posao_id = poslovi.posao_id WHERE ID>7*($_GET[p]-1) and ID<=7*$_GET[p] and Poslovi.naziv_posla = '$_GET[posao]';")
        or die($conn->error);
    $opstine = $conn->query("SELECT ime_opstine FROM opstine")
        or die($conn->error);
    ?>
    <!--#region Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="myform bg-dark">
                        <h1 id="naslov" class="text-center">Forma za prijavu</h1>
                        <form>
                            <div class="mb-3 mt-4">
                                <label for="exampleInputEmail1" class="form-label">Email adresa</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Šifra</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" />
                            </div>
                            <button type="submit" class="btn btn-light mt-3">
                                PRIJAVI SE
                            </button>
                            <p id="nisi-korisnik">
                                Nemaš nalog? <a id="prijava-mini" href="#">Napravi nalog!</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#endregion -->
    <!--#region NavBar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top aa">
        <div class="container">
            <a href="./index.html" class="nav brand"><img class="image" src="./slike/logo/Logo(white).svg" alt="logo" /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto z">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">Pocetna</a>
                    </li>
                    <li class="nav-item">
                        <a href="./onama.html" class="nav-link">O nama</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Prijavi
                            se</a>
                    </li>
                    <li class="nav-item">
                        <a href="./korisnik.html" class="nav-link">Registruj se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--#endregion -->
    <?php
    $posao = $conn->query("SELECT poslovi.naziv_posla,delatnosti.naziv_delatnosti FROM ((`fizicko_lice` INNER JOIN poslovi ON fizicko_lice.Posao_id = poslovi.posao_id) INNER JOIN delatnosti ON fizicko_lice.id_delatnosti = delatnosti.id_delatnosti) WHERE Poslovi.naziv_posla = '$_GET[posao]';")
        or die($conn->error);
    $podatak = $posao->fetch_assoc();
    ?>
    <div class="pozadinaCenter" style="background-image: url('./slike/DelatnostiHighRes/<?= $podatak['naziv_delatnosti'] ?>/<?= $podatak['naziv_posla'] ?>.jpg');">
    </div>
    <div class="container">
        <div class="naslov text-uppercase fw-bold mb-5" id="ImePosla"><?= $podatak['naziv_posla'] ?></div>
        <table style="width:100%">
            <tr class="nafonu">
                <td>
                    <div class=" searchbar w-100" style="background-color: #212529;">
                        <table class="tabela">
                            <tr>
                                <td>
                                    <input type="text" placeholder="Pretrazi..." class="search">
                                </td>
                                <td>
                                    <a href="#"><i class="fa fa-solid fa-magnifying-glass"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr class="nafonu">
                <td style="text-align: center;">
                    <p class="tekstnafonu mb-4 bg-primary text-white fw-bold" data-bs-toggle="modal" data-bs-target="#filternafonu">Dodate
                        opcije
                        pretrazivanja
                    </p>
                </td>
            </tr>
            <div id="filternafonu" class="modal fade " data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content filtermodal">
                        <div class="modal-header">
                            <h1 class="modal-title">Dodatne Opcije</h1>
                            <button type="button" class="btn-close p-4" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="tekst">Opstina</h4>
                                    <select class="dropdown">
                                        <option value="odaberi" disabled selected>Odaberi Opstinu...</option>
                                        <option value="beograd">Beograd</option>
                                        <option value="beograd">Sopot</option>
                                        <option value="beograd">Mladenovac</option>
                                    </select>
                                    <h4 class="mt-3 tekst">Vrsta rada</h4>
                                    <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select class="rad">
                                                <option>Odaberi vrstu rada</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <label for="jedan"><input type="checkbox" id="jedan"> Krecenje</label>
                                            <label for="dva"><input type="checkbox" id="dva"> Gletovanje</label>
                                            <label for="tri"><input type="checkbox" id="tri"> Farbanje stolarije</label>
                                            <label for="cetiri"><input type="checkbox" id="cetiri"> Farbanje radiatora i
                                                cevi</label>
                                            <label for="pet"><input type="checkbox" id="pet"> Postavljanje zidnih
                                                lajsni</label>
                                            <label for="sest"><input type="checkbox" id="sest"> Spatulat</label>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <h4 class="mt-3 tekst">Duzina trajanja radova</h4>
                                        <input type="text" id="calendar-range" class="datum">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark text-white fw-bold px-4 py-2">Pretrazi
                                Filtrirano</button>
                        </div>
                    </div>
                </div>
            </div>
            <tr>
                <td style="vertical-align: top; width: 50%;" class="nakompu">
                    <div class="searchbar w-100 mb-3" style="background-color: #212529;">
                        <table class="tabela">
                            <tr>
                                <td>
                                    <input type="text" placeholder="Pretrazi..." class="search">
                                </td>
                                <td>
                                    <a href="#"><i class="fa fa-solid fa-magnifying-glass"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class=" tekst">Opstina</h4>
                            <select class="dropdown">
                                <option value="odaberi" disabled selected>Odaberi Opstinu...</option>
                                <?php while ($podatakOpstine = $opstine->fetch_assoc()) : ?>
                                    <option value="<?= $podatakOpstine['ime_opstine'] ?>"><?= $podatakOpstine['ime_opstine'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <h4 class="mt-3 tekst">Vrsta rada</h4>
                            <div class="multiselect">
                                <div class="selectBox" onclick="showCheckboxes2()">
                                    <select class="rad">
                                        <option>Odaberi vrstu rada</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes2">
                                    <label for="jedan2"><input type="checkbox" id="jedan2"> Krecenje</label>
                                    <label for="dva2"><input type="checkbox" id="dva2"> Gletovanje</label>
                                    <label for="tri2"><input type="checkbox" id="tri2"> Farbanje stolarije</label>
                                    <label for="cetiri2"><input type="checkbox" id="cetiri2"> Farbanje radiatora i
                                        cevi</label>
                                    <label for="pet2"><input type="checkbox" id="pet2"> Postavljanje zidnih
                                        lajsni</label>
                                    <label for="sest2"><input type="checkbox" id="sest2"> Spatulat</label>
                                </div>
                            </div>

                            <div class="group">
                                <h4 class="mt-3 tekst">Duzina trajanja radova</h4>
                                <input type="text" id="calendar-range" class="datum">
                            </div>
                            <div class="dugme pt-4">
                                <button class="btn btn-dark text-white fw-bold px-4 py-2">Pretrazi
                                    Filtrirano</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="as">
                        <table class="tabelaa">
                            <tr class="aa1">
                                <td class="majstor">Majstor</td>
                                <td class="ocena">Prosecna ocena</td>
                            </tr>
                        </table>
                        <table class="tabela2">
                            <?php
                            $limit = ($_GET['p'] - 1) * 7;
                            $radnik = $conn->query("SELECT ID,Ime,Prezime FROM `fizicko_lice` INNER JOIN poslovi ON fizicko_lice.Posao_id = poslovi.posao_id WHERE Poslovi.naziv_posla = '$_GET[posao]' LIMIT $limit,7")
                                or die($conn->error);
                            while ($podatak = $radnik->fetch_assoc()) : ?>
                                <tr class="aa">
                                    <td onclick="getId(this);" class="majstor2" id="<?= $podatak['ID'] ?>"><?= $podatak['Ime'] ?> <?= $podatak['Prezime'] ?></td>
                                    <td class="ocena2">10.0</td>
                                </tr>
                            <?php endwhile; ?>
                            <tr>
                                <td colspan="2" class="page">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-md-end justify-content-center">
                                            <li class="page-item"><a class="page-link  fs-5" href="#">Nazad</a></li>
                                            <li class="page-item"><a class="page-link fs-5" id="1" onclick="page(this);">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link fs-5" id="2" onclick="page(this);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link  fs-5" id="3" onclick="page(this);">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link  fs-5" href="./moler-p2.php">Napred</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h1 class="text-center text-white">OCENE MAJSTORA</h1>
            <p class="lead text-center text-white mb-5">
                Recenzije najbolje ocenjenih majstora
            </p>
            <div class="row g-4 pb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Marko Nikolic</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Stefan Markovic</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Milos Nikolic</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Aleksandar Pavlovic</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5  bg-dark">
        <div class="container text-center text-sm-start">
            <h2 class="nasMajstorNaslov pt-5 text-white display-4">
                POSTANITE NAS MAJSTOR
            </h2>
            <h4 class="text-primary nasMajstorTekst">Besplatno se upisite u nasu bazu majstora brzo i lako u
                par
                koraka
            </h4>
            <div style="text-align: center;">
                <button type="button" class="majstor-button btn btn-primary text-white py-2 mt-5 fs-4">Register</button>
            </div>
        </div>
    </section>

    <div class="bg-primary ss"></div>
    <!--#region Footer-->
    <footer class="p-4 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 FixIT</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-4">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
    <!--#endregion-->
    <script src="https://kit.fontawesome.com/41428e8763.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/sr.js"></script>
    <script>
        function getId(element) {
            var posao = document.getElementById("ImePosla").textContent.toLocaleLowerCase();
            let id = element.id;
            let naziv = element.textContent;
            window.location.href = "./radnik.php?posao=" + posao + "&id=" + id;
        }

        function page(element) {
            var posao = document.getElementById("ImePosla").textContent.toLocaleLowerCase();
            var page = element.id;
            window.location.href = "./posao.php?posao=" + posao + "&p=" + page;
        }
        flatpickr('#calendar-range', {
            mode: "range",
            minDate: "today",
            dateFormat: "d-m-Y",
            "locale": "sr"
        });
        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }

        function showCheckboxes2() {
            var checkboxes2 = document.getElementById("checkboxes2");
            if (!expanded) {
                checkboxes2.style.display = "block";
                expanded = true;
            } else {
                checkboxes2.style.display = "none";
                expanded = false;
            }
        }
        $('tr').click(function() {
            window.location = $(this).find('a').attr('href');
        }).hover(function() {
            $(this).toggleClass('hover');
        });
    </script>
</body>

</html>