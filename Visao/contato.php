<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/vars.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/contato.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/rodape.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Contato - Code>Go!</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-terminal icon'></i>
            <div class="logo_name"><a href="../landing.html">Code>Go!</a></div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="../sobre.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Sobre</span>
                </a>
                <span class="tooltip">Sobre</span>
            </li>
            <li>
                <a href="../planos.html">
                    <i class='bx bx-cart'></i>
                    <span class="links_name">Planos</span>
                </a>
                <span class="tooltip">Planos</span>
            </li>
            <li>
                <a href="../cursos.html">
                    <i class='bx bxs-graduation'></i>
                    <span class="links_name">Cursos</span>
                </a>
                <span class="tooltip">Cursos</span>
            </li>

            <li>
                <a href="contato.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Contato</span>
                </a>
                <span class="tooltip">Contato</span>
            </li>
            <li>

            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">Code>Go!</div>
                        <div class="job">Cursos de Tecnologia</div>
                    </div>
                    <i class='bx bx-code-alt' id="log_out"></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <section class="principal">
            <div class="container">
                <div class="box">
                    <h1>Entre em Contato</h1>

                    <form action="../Controle/controleContato.php" method="POST">
                    <div class="user">
                        <i class="far fa-address-card"></i>
                        <label for="nome"></label>
                        <input type="text" name="username" id="username" autocomplete="off"
                            placeholder="Digite o seu nome!" pattern="[A-Za-z]+$" required/>
                        <br>

                        <i class="fas fa-at"></i>
                        <label for="email"></label>
                        <input type="email" name="email" id="email" autocomplete="off" placeholder="email@email.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                        <br>

                        <i class="fas fa-mobile-alt"></i>
                        <label for="tel"></label>
                        <input type="tel" name="tel" id="tel" autocomplete="off" placeholder="XXXXXXX-XXXX" pattern="[0-9]{7}-[0-9]{4}" required/>
                        <br>

                        <i class="fas fa-thumbtack"></i>
                        <label for="assunto"></label>
                        <input type="text" name="text" id="text" autocomplete="off" placeholder="Assunto!" maxlength="50" required/>
                        <br>

                        <i class="fas fa-quote-left"></i>
                        <br>
                        <br>
                        <label for="mensagem"></label>
                        <textarea type="textbox" name="text_box" id="text_box" autocomplete="off"
                            placeholder="Digite aqui a sua mensagem!" cols="43" rows="5"></textarea>
                    </div>
                    <div class="enviar-btn">
                        <input type="submit" value="Enviar" class="btn">
                        <br>
                        <p class="signup">Primeira vez por aqui? <span><br><a href="planos.html">-Veja nossos planos-</a></span></p>
                    </div>
                </form>
                </div>
            </div>
        </section>
        <br>

    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });


        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }
    </script>

    <div class="home-section_f">
        <footer class="rodape">
            <img src="../img/Screenshot_20210907-120233_Logo_Maker.jpg" alt="Logo da Apeperia" class="rodape__logo">
            <ul class="rodape__social">
                <li><a href="#" class="rodape__midia"><img src="../img/facebook.png" alt="Ícone do Facebook"></a></li>
                <li><a href="#" class="rodape__midia"><img src="../img/twitter.png" alt="Ícone do Twitter"></a></li>
                <li><a href="#" class="rodape__midia"><img src="../img/instagram.png" alt="Ícone do Instagram"></a></li>
            </ul>
            <nav>
                <ul class="rodape__navegacao">
                    <li class="rodape__link"><a href="../sobre.html">Sobre</a></li>
                    <li class="rodape__link"><a href="../planos.html">Planos</a></li>
                    <li class="rodape__link"><a href="../cursos.html">Cursos</a></li>
                    <li class="rodape__link"><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>

</html>