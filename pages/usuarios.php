<?php include ('../view/head.php'); ?>


<title><?php echo ucfirst(basename(__FILE__, '.php'))?></title>
</head>
    
<body>
 
<header class="flex">
        <div class="">
            <img class="logo" src="../imgs/logo.png" alt="">
        </div>


        <nav class="nav-list navbar navbar-expand-lg navbar-light justify-content-center">

            <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-lable="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="list-style navbar-nav">
                    <li><a class="" href="../pages/index.php" id="home">Home</a></li>
                    <li><a class="" href="../pages/eventos.php" id="eventos">Eventos</a></li>
                    <li><a class="active" href="../pages/usuarios.php" id="usuarios">Usuários</a></li>
                    <li><a class="" href="../pages/relatorios.php" id="relatorios">Relatórios</a></li>
                </ul>
            </div>

        </nav>

        <div class="flex">

            <img class="user" src="../imgs/user.png" alt="">

            <div class="flex-column">
                <span class="usuarios">Igor Gonçalves</span>
                <span class="desconectar"><a href="./index.php" class="color-link">Desconectar</a></span>
            </div>
        </div>

    </header>

    <main class="bg-grey">
        <div class="bg-orange"></div>
        <div class="flex">
            <div class="container flex-colum flex-column-evenly ">

                <p class="bem-vindo">Olá <span class="usuarios">Igor Gonçalves</span>, selecione uma das opções abaixo:
                </p>

                <div class="flex">
                    <a href="./eventos.php" class="link-decoration" >
                        <div class="card">
                            <img class="icons" src="../imgs/icone-eventos.png" alt="">
                            <div class="">
                                <span>Meus Eventos</span>
                            </div>
                        </div>
                    </a>

                    <a href="./usuarios.php" class="link-decoration" >
                        <div class="card">
                            <img class="icons" src="../imgs/icone-usuarios.png" alt="">
                            <div class="">
                                <span>Usuários</span>
                            </div>
                        </div>
                    </a>

                    <a href="./relatorios.php" class="link-decoration" >
                        <div class="card" id="cards">
                            <img class="icons" src="../imgs/icone-relatorios.png" alt="">
                            <div class="">
                                <span>Relatórios</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php include ('../view/footer.php'); ?>


    <!-- <script src="../script.js"></script> -->
    
</body>
</html>