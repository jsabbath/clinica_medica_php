<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Med System</title>

    <?php $this->load->view("includes/header_sources");//carregamos arquivos de estilo ?>

</head>

<body>

    <div class="brand">Projeto Med System</div>
    <div class="address-bar">Sua Saúde É Nosso Dever</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="<?= base_url()?>">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url()?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url("consultas/dashboard") ?>">Consultas</a>
                    </li>
                    <?php if(!is_patient()){ ?>
                        <li>
                            <a href="<?= base_url('precadastro/pacientes')?>">Pré Cadastro</a>
                        </li>
                    <?php } ?>
                    <?php if(is_patient()){ ?>
                        <li>
                            <a href="<?= base_url('logout') ?>">Logoff</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
    <?php show_messages(); ?>