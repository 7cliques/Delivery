<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Ronda Pizzaria - Delivery 7Cliques & RMS</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/jquery.datatables.css" rel="stylesheet">
        <link href="css/delivery.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
    </head>

    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>

        <section>

            <div class="leftpanel">

                <div class="logopanel">
                    <h1><img src="img/logoronda.png" /> </h1>
                </div><!-- logopanel -->

                <div class="leftpanelinner">    

                    <h5 class="sidebartitle">Menu</h5>
                    <ul class="nav nav-pills nav-stacked nav-bracket">
                        <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Início</span></a></li>

                        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Cadastro</span></a>
                            <ul class="children">
                                <li><a href="categorias.php"><i class="fa fa-caret-right"></i> Categorias</a></li>
                                <li><a href="sub_categorias.php"><i class="fa fa-caret-right"></i> Sub Categorias</a></li>
                                <li><a href="produtos.php"><i class="fa fa-caret-right"></i> Produtos</a></li>
                                <li><a href="usuario.php"><i class="fa fa-caret-right"></i> Usuários</a></li>
                                <li><a href="formasPagamento.php"><i class="fa fa-caret-right"></i> Formas de Pagamento</a></li>
                                <li><a href="cartoes.php"><i class="fa fa-caret-right"></i> Cartões</a></li>
                                <li><a href="grupoFretes.php"><i class="fa fa-caret-right"></i> Grupos de frete</a></li>

                            </ul>
                        </li>
                        <li class="nav-parent"><a href="#"><i class="fa fa-suitcase"></i> <span>Relatórios</span></a>
                            <ul class="children">
                                <li><a href="relatorio.php"><i class="fa fa-caret-right"></i> Pedidos</a></li>
                                <li><a href="relatorio.php"><i class="fa fa-caret-right"></i> Clientes</a></li>
                                <li><a href="relatorio.php"><i class="fa fa-caret-right"></i> Aniverssariantes</a></li>
                                <li><a href="relatorio.php"><i class="fa fa-caret-right"></i> Entregas</a></li>

                            </ul>
                        </li>

                    </ul>


                </div><!-- leftpanelinner -->
            </div><!-- leftpanel -->

            <div class="mainpanel">

                <div class="headerbar">

                    <a class="menutoggle"><i class="fa fa-bars"></i></a>
                    <div class="header-right">
                        <ul class="headermenu">

                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <img src="images/photos/loggeduser.png" alt="">
                                        Adriano Ruiz
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                        <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> Minha Conta</a></li>
<!--                                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>-->
                                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Ajuda</a></li>
                                        <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>



                </div><!-- headerbar -->

