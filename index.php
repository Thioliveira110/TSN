<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSNetwork</title>
    <!--SEO, PESQUISA EM SITE DE PESQUISA-->
    <meta name="description" content="Conecte seu mundo">
     <!--SMO, PESQUISA EM REDES SOCIAIS-->
    <meta property="og:title" content="TSNetwork">
    <meta property="og:site_name" content="TSNetwork">
    <meta property="og:url" content="http://localhost/projeto1/html/"><!--LINK DO SITE-->
    <meta property="og:description" content="Conecte seu mundo ">
    <meta property="og:image" content="images\LogoTSN.jpg"><!--LINK DA IMAGEM OSPEDADA NA INTERNET-->
    <meta property="og:image:type" content="image/jpeg">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>images\icone.png">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="top_box">
            <div class="logo">
                <a href="<?php echo INCLUDE_PATH; ?>Home"><img img src="<?php echo INCLUDE_PATH; ?>images\LogoTSN.jpg" width="200" height="80" class=" media-object  img-responsive img-thumbnail"></a>    
            </div><!--FIM LOGO-->
            <div class="nav">
                <li><a href="<?php echo INCLUDE_PATH; ?>Home">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
                <a id="btn" href="<?php echo INCLUDE_PATH; ?>Login"><i class="fa-regular fa-user"><span>LOGIN</span></a></i>
            </div>
        </div>
           
        <div class="barm">
                <i class="fa-solid fa-bars"></i>
        </div>          
    </header>
    <div class="boxmenu">
        <div class="navm">
                <a href="<?php echo INCLUDE_PATH; ?>Home"><i class="fa-solid fa-house"><span>  HOME</span></a></i>
                <a href="<?php echo INCLUDE_PATH; ?>Contato"><i class="fa-solid fa-phone"><samp>  CONTATO</samp></a></i>
                <a href="<?php echo INCLUDE_PATH; ?>Sobre"><i class="fa-solid fa-circle-info"><samp>  SOBRE</samp></a></i>
                <a href="<?php echo INCLUDE_PATH; ?>Login"><i class="fa-regular fa-user"><span>  LOGIN</span></a></i>
        </div>
    </div>    
   <?php 
   $url = isset($_GET['url']) ? $_GET['url'] : 'Home';
   //$url = $_GET['url'] ?? 'Home';//
   if(file_exists('pages/'.$url.'.php')){
    include('pages/'.$url.'.php');
   }else{
    $pagerro=true;
    include('pages/erro.php');
   }
   ?>
    <footer <?php if(isset($pagerro) && $pagerro == true) echo 'class="fixed"';?>>
        <div class="center">
            <p>Todos os direitos reservados TSNetwork ®</p>
        </div>    
        <div class="info">
            <div class="redes">
                <h2>Redes Sociais:</h2>
            </div>
            <div class="icons">
                <a target="_blank" href="<?php echo INCLUDE_PATH; ?>#"><i class="fa-brands fa-facebook"></a></i>
                <a target="_blank" href="<?php echo INCLUDE_PATH; ?>#"><i class="fa-brands fa-instagram"></a></i>
                <a target="_blank" href="<?php echo INCLUDE_PATH; ?>#"><i class="fa-brands fa-whatsapp"></a></i>
            </div>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>