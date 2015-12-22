<!DOCTYPE html>
<html class="no-js" lang="pt-BR"  prefix="og: http://ogp.me/ns#">
  <head>
    
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?= $this->Html->url('/img/favicon.ico') ?>" type="img/x-icon">
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

    <?= $this->Html->css(array('bxslider/jquery.bxslider'))?>

    
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
        width: 40%;
      }

      .brand img {
/*          width: 25%;
          float:left;*/
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

    <!--Start of tawk.to clickable text Script-->

  <script type="text/javascript">

  function toggleChat() {

  Tawk_API.toggle(); return false;

  }

  </script>
  <!--End of tawk.to clickable text Script-->

  <!--Start of Tawk.to Status Code-->
  <script type="text/javascript">Tawk_API.onStatusChange = function (status){if(status === 'online'){document.getElementById('status').innerHTML = '<a href="#" onclick="toggleChat()">Online - Click to chat</a>';}else if(status === 'away'){document.getElementById('status').innerHTML = 'We are currently away';}else if(status === 'offline'){document.getElementById('status').innerHTML = 'Live chat is Offline';}};
  </script>
  <!--End of Tawk.to Status Code -->
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
            <div class="row">
              <div class="grid_4">
                <a href="<?= $this->Html->url('/') ?>"><?= $this->Html->image('logo3.png',array('alt' => 'Cartório Net', 'width' => '90%')) ?></a>        
              </div>  
              <div class="grid_4" style="text-align:center;">
                <a href="#chat" onclick="toggleChat()">
                  <?= $this->Html->image('chat-online.png', array('style' => 'margin-top:20px;width:40%')) ?>
                </a> 
              </div>
              <div class="grid_3">
                <a href="callto:#">
                  <i class="fa fa-phone"></i>&nbsp;<?=$setting['phone'] ?>
                </a>
              </div>
            </div>    
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
                    <address><a href="#"> <?= $setting['address']?></a></address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="<?= $this->Html->url('/contato')?>"><?= $setting['email_contact']?></a></div>
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
                  <div class="box_cnt__no-flow"><a href="<?= $setting['facebook_link'] ?>" target="_blank">Siga-nos no Facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="<?= $setting['twitter_link']?>" target="_blank">Siga-nos no Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">Copyright © <span id="copyright-year"></span> Cartório Net. Todos os direitos reservados. 
            </div>
          </div
        </section>
      </footer>
    </div>
  <?= $this->Html->script(array("cartorio/script"))?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5677e4c8189c2a551bbc070e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  </body>
</html>