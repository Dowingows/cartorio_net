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

    <?php if($this->action == 'solicitar_servico' || $this->action == 'servico_advogado' || $this->action =='contato') :?>
        <?= $this->Html->css(array('bootstrap/bootstrap.min')); ?>
        
    <?php endif; ?>

    
    <?= $this->Html->css(array('cartorio/grid'))?>
    <?= $this->Html->css(array('cartorio/style'))?>
    <?= $this->Html->css(array('cartorio/camera'))?>
    <?= $this->Html->css(array('cartorio/owl-carousel'))?>
    <?= $this->Html->script(array('cartorio/device.min'))?>
    
    <?= $this->Html->script(array('cartorio/jquery'))?>
    <?= $this->Html->script(array('cartorio/jquery-migrate-1.2.1'))?>
    <?php if($this->action == 'solicitar_servico' || $this->action == 'servico_advogado' || $this->action =='contato') :?>
    
   <?php endif; ?>
        <!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
  

    <style type="text/css">

      table.well1 {
        width: 100%;
        border: 0px;
      }

      table.well1 td {
        padding: 15px 15px;
        line-height: 18px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }
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
      background: rgba(67, 69, 71, 0.98);
    }
    .banner li:nth-child(3) {
      background: rgba(67, 69, 71, 0.95);
    }
    .banner li:nth-child(4) {
      background: rgba(67, 69, 71, 0.93);
    }

    .icon {
      background: #4A4C4D; 
    }

    .fa-facebook{
      color:#9A9FA3;
    }

    .fa-envelope{
      color: #9A9FA3;
    }

    .fa-fax{
      color: #9A9FA3;
    }

    .fa-twitter{
      color: #9A9FA3;
    }

    .fa-map-marker{
      color: #9A9FA3;
    }
    
    .fa-phone{
      color: #9A9FA3;
    }
    
    
    .icon:before {
      background: #434547;
    }
   

    header {
        background: rgb(0, 0, 0);
    }


    menu > li > a:hover {
        background: rgb(242, 149, 30);
    }

    .stuck_container {
      background: rgb(234, 128, 21);
    }
    
    .sf-menu > li.active > a {
        color: #fff;
        background: #CC6017;
        border-right: 1px solid #A5A8AB;
        border-left: 1px solid #A5A8AB;
    }
    
    .sf-menu > li.sfHover > a, .sf-menu > li > a:hover {
        color: #fff;
        background: #CC6017;
        border-right: 1px solid #BDBDBD;  
    }
    
    .info-box {
      background: #434547;
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

    .well1 li:before {
      content: "\f00c";
      position: absolute;
      left: -20px;
      top: 16px;
      font-weight: 400;
      font-size: 22px;
      font-family: "FontAwesome";
      color:rgb(234, 128, 21);
    }

    .well1 li a:before {
      content: "\f00c";
      position: absolute;
      left: -20px;
      top: 16px;
      font-weight: 400;
      font-size: 22px;
      font-family: "FontAwesome";
      color:rgb(234, 128, 21);
    }
    .well1 li + li {
      margin-top: 0px;
      border-top: 1px solid #e5e5e5;
    }
    .well1 a:hover {
      color: #777777;
    }

    .banner li:hover {
      margin-top: 0px;
      height: 388px;
      padding-bottom: 50px;
    }
    .banner li [class*="fa-"] {
      font-size: 62px;
      line-height: 1;
      color: inherit;
    }
    .banner li a {
      position: absolute;
      bottom: 26px;
      right: -30px;
    }

    .banner li:nth-child(4) a {
      position: absolute;
      bottom: 26px;
      right: 30px;
    }

    .banner li a:before {
      font-family: "FontAwesome";
      font-size: 19px;
      line-height: 1;
      color: inherit;
      content: "";
    }

    .banner li:nth-child(4) a:before {
      content: "";
    }

    .banner li a:hover {
      opacity: .7;
    }

    .banner li:nth-child(4) a:hover {
      opacity: 30;
    }

    .banner li:hover a {
      right: 30px;
    }

    .banner li a {
        right: 20px;
    }

    .banner li:nth-child(4) a {
        right: 70px;
    }

    .btn {
      background: rgb(234, 128, 21);
    }
    .btn:hover{
      background: #F89830;
    }


    .well1 .btn2 {
      background: #F89830;
      color: white;
      
    }

    .well1 .btn2:hover {
      background: rgb(234, 128, 21);
      color: white;
    }


     @media (max-width: 767px) {
      .product-list li .box_aside {
          float: none;
          background-color: ;
      }
    }

    .ins4 {
      background-color: #F0F4F5;
    }

    h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover {
        color: rgb(234, 128, 21);
    }
    
    /*
    footer {
      background: rgb(0, 0, 0);
    }

    .icon2:before {
      background: rgba(0, 0, 0, 0.78)
    }*/


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
            <h1 class="brand_name"><a href="<?= $this->Html->url('/') ?>"><?= $this->Html->image('logo3.png',array('alt' => 'Cartório Net')) ?></a>        
            </h1>
            <a href="callto:#">
              <i class="fa fa-phone"></i>&nbsp;<?=$setting['phone'] ?>
            </a>   
          </div>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <?= $this->element('menu_cartorio')?>
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
            <div class="copyright">Cartório Net © <span id="copyright-year"></span>
            </div>
          </div
        </section>
      </footer>
    </div>
  <?= $this->Html->script(array("cartorio/script"))?>


  </body>
</html>