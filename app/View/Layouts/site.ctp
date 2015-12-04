<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="img/favicon.ico" type="img/x-icon">
    <?= $this->Html->css(array('cartorio/grid'))?>
    <?= $this->Html->css(array('cartorio/style'))?>
    <?= $this->Html->css(array('cartorio/camera'))?>
    <?= $this->Html->css(array('cartorio/owl-carousel'))?>
    
    <?= $this->Html->script(array('cartorio/jquery'))?>
    <?= $this->Html->script(array('cartorio/jquery-migrate-1.2.1'))?>
  
        <!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
  

    <style type="text/css">

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
    

    .brand_name img{
      width: 35%;
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
            <h1 class="brand_name"><a href="#"><?= $this->Html->image('logo.png') ?></a> 
            <a href="callto:#" style="margin-top: 30px;color:#9A9FA3"><?=$setting['phone'] ?></a>          
            </h1>
          </div>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="#">Empresa</a>
                  <ul>
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
                  </ul>
                </li>
                <li><a href="#">Serviços</a>
                </li>
                <li><a href="#">FAQS</a>
                </li>
                <li><a href="#">Contato</a>
                </li>
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
            <div class="copyright">ContórioNet © <span id="copyright-year"></span>
            </div>
          </div
        </section>
      </footer>
    </div>
  <?= $this->Html->script(array("cartorio/script"))?>
  </body>
</html>