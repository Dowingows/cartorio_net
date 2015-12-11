<!DOCTYPE html>
<html class="no-js" lang="pt-BR"  prefix="og: http://ogp.me/ns#">
  <head>
    
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="img/favicon.ico" type="img/x-icon">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />

    <?php if ($this->request->action == 'index'){?>
      <title><?= $setting['site_name'] . ' - ' . $setting['site_title'] ?></title>
      <meta property="og:title" content="<?= $setting['site_title']?>" />
      <meta property="og:site_name" content="<?= $setting['site_name'] ?>" />
      <meta property="og:description" content="<?= $setting['site_description']?>" />
    <?php } else {?>
      <title><?= $setting['site_name'] . ' - ' . $data['Page']['title'] ?></title>
      <meta property="og:title" content="<?= $data['Page']['title'] ?>" />
      <meta property="og:site_name" content="<?= $setting['site_name'] ?>" />
      <meta property="og:description" content="<?= $data['Page']['description']?>" />    
    <?php }?>

    <meta property="og:url" content="<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?= $this->Html->url('/img/logo3.png', true); ?>" />


    <?= $this->Html->css(array('bootstrap/bootstrap.min')); ?>
    
    <?= $this->Html->css(array('cartorio/grid'))?>
    <?= $this->Html->css(array('cartorio/style'))?>
    
    <?= $this->Html->script(array('cartorio/jquery'))?>
    <?= $this->Html->script(array('cartorio/jquery-migrate-1.2.1'))?>
    <?= $this->Html->script(array('bootstrap/bootstrap.min')); ?>
  
        <!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
  

    <style type="text/css">

      .brand_name{
        width: 80%;
      }

      header a[href^="callto:"] {
        margin-top: 40px;
        position: relative;
        font-size: 24px;
        color: #9A9FA3;
      }

      header a[href^="callto:"]:before {
        position: absolute;
        top: -4px;
        left: -44px;
        font-size: 40px;
        color: red;
      }

      header a[href^="callto:"]:hover {
        color: #9A9FA3;
      }



    .banner li:nth-child(1) {
      background: #434547;
    }
    .banner li:nth-child(2) {
      background: #4A4C4D;
    }
    .banner li:nth-child(3) {
      background: #434547;
    }
    .banner li:nth-child(4) {
      background: #4A4C4D;
    }

    .icon {
      background: #4A4C4D; 
    }
    .fa-map-marker{
      color:#F89830;
    }

    .fa-phone{
      color: #9A9FA3;
    }

    .icon:before {
      background: #4A4C4D;
    }
    

    header {
        background: #434547;
    }
    .stuck_container {
      background: #F89830;
    }

    .info-box {
      background: #434547;
    }


    .well1 ul{
        list-style-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><circle fill="red" cx="5" cy="5" r="5"/></svg>');
    }


    .well1 li {
      position: relative;
      margin-left: 25px;
      padding-left: 15px;
      padding-top: 16px;
      padding-bottom: 16px;
      font-size: 16px;
      line-height: 18px;
      color: #9A9FA3;
    }
    .well1 li a:before {
      content: "\f00c";
      position: absolute;
      left: 0;
      top: 16px;
      font-weight: 400;
      font-size: 22px;
      font-family: "FontAwesome";
    }
    .well1 li + li {
      margin-top: 0px;
      border-top: 1px solid #e5e5e5;
    }
    .well1 a:hover {
      color: #777777;
    }

   @media (max-width: 767px) {
    .product-list li .box_aside {
        float: none;
        background-color: ;
    }
  }

    </style>
  </head>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="#"><?= $this->Html->image('logo3.png',array('alt' => 'Cartório Net')) ?></a>        
            </h1>
            <a href="callto:#">
              <i class="fa fa-phone"></i>&nbsp;<?=$setting['phone'] ?>
            </a>   
          </div>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="<?= $this->Html->url('/institucional') ?>">Institucional</a>
<!--                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>-->
                </li>
                <li><a href="#">Serviços</a>
                </li>
                <li><?= $this->Html->link('Solicite a sua certidão','/solicitar-certidao')?></li>
                <li><?= $this->Html->link('Serviços para Advogados','/servicos-para-advogado')?></li>
                <li><?= $this->Html->link('Contato','/contato')?></li>

                <!--<li><a href="#">Contato</a></li>-->
                <!--<li><a href="#">FAQ</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
      </header>
     
      <?= $content_for_layout ?>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>Av.C Rua Teste, nº 12345</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#"><?= $setting['email_contact']?></a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#"><?=$setting['phone'] ?></a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#"><?=$setting['phone'] ?></a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">CartórioNet © <span id="copyright-year"></span>
            </div>
          </div
        </section>
      </footer>
    </div>
  <?= $this->Html->script(array("cartorio/script"))?>


  </body>
</html>