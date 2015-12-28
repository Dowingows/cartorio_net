 <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
          <div>
            <ul class="bxslider">
              <?php foreach ($slider as $image):?>                
                  <li><a href=""><img style="margin-left:auto; margin-right:auto;" src="<?= $image ?>"/></a></li>             
              <?php endforeach; ?>
            </ul>
          </div>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
            <?php if (!empty($content)):?>
              <?php foreach ($content->bloco01 as $key => $value): ?>
                <li>
                  <?php switch ($key) {
                    case 0:
                      echo '<i class="icon-check"> </i>';
                      break;
                    case 1:
                      echo '<i class="icon-map"> </i>';
                      break; 
                    case 2:
                      echo '<i class="icon-document"> </i>';
                      break;  
                    case 3:
                      echo '<i class="icon-email"> </i>';
                      break;               
                  }?>
                
                  <h3><?= $value->title?></h3>
                  <div class="editable">
                      <p><?= $value->content?></p>

                      <?php if ($key != 3){?>
                        <a href="#" class="btn_call_action"></a>
                      <?php } else {?>
                          <a href="<?= $this->Html->url('/servicos')?>" class="btn">Peça Já!</a>
                        <?php } ?>

                  </div>
                
                </li>
              <?php endforeach;?>
            <?php endif;?>
            </ul>
          </div>
        </section>
<!--         <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
             <?php if (!empty($content)):?>
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-file-text-o"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?= $content->bloco02[0]->title ?></a></h3>
                    <div class="editable">
                    <p><?= $content->bloco02[0]->content ?></p>
                    </div>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa fa-search"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?= $content->bloco02[1]->title ?></a></h3>
                    <p><?= $content->bloco02[1]->content ?></p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-group"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?= $content->bloco02[2]->title ?></a></h3>
                    <p><?= $content->bloco02[2]->content ?></p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-thumbs-up"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#"><?= $content->bloco02[3]->title ?></a></h3>
                    <p><?= $content->bloco02[3]->content ?></p>
                  </div>
                </div>
              </li>
            <?php endif;?>
            </ul>
          </div>
        </section> -->

        <section class="well1 ins4">
          <div class="container <?=(!empty($content->bloco02[0]->content)) ? '': 'bg-image';?>">
            <div class="row">
              <div class="grid_6" style="float:left">
                <?php if (!empty($content->bloco02[0]->content)): ?>
                  <?= $content->bloco02[0]->content ?>
                <?php endif; ?>
              </div>
              <div class="grid_6">

                <h2 style="color:rgb(234, 128, 21)"><?=$content->bloco02[1]->title?></h2>
                <?=$content->bloco02[1]->content?>
                <div style="text-align:center; margin-top:-10px;"><a href="<?= $this->Html->url('/servicos')?>" style="background-color:#9A9FA3;min-width: 150px;" class="btn2">Outros Documentos</a></div> 
              </div>
            </div>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
            <?php if (!empty($content)):?>

              <?php foreach ($content->bloco03 as $key => $value): ?>
                <div class="grid_4">
                  <div>
                  <h2 style="color:rgb(234, 128, 21)"><?= $value->title ?></h2>
                  <?= $value->content ?>
                  </div>
                  <a href="<?= $value->link_button ?>" class="btn2"><?= $value->description_button ?></a>              
                </div>
              <?php endforeach; ?>
              
            <?php endif;?>
              <div class="grid_4">
                <div class="info-box">
                  <h2 class="fa-comment">Entre em contato</h2>
                  <hr>
                  <h3>Atendimento:</h3>
                  <dl>
                    <dt><?=$setting['working_hours']?></dt>
                  </dl>
                  <hr>
                  <h3>Telefone:</h3>
                  <dl>
                    <dt><?=$setting['phone'] ?></dt>
                  </dl>
                  <hr>
                  <h3>Chat Online:</h3>
                    <a href="#chat" onclick="toggleChat()">
                      <?= $this->Html->image('chat-online.png', array('style' => 'margin-top:20px;width:40%')) ?>
                    </a> 
                </div>
                <!--
                <div class="owl-carousel">
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img02.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img03.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img04.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img05.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                </div>
                -->
              </div>
            </div>
          </div>
        </section>
      </main>

    <?= $this->Html->script(array('bxslider/jquery.bxslider'))?>
    <?= $this->Html->script(array('bxslider/plugins/jquery.easing.1.3'))?>

  <script type="text/javascript">
    $('.bxslider').bxSlider({
      mode: 'fade',
      useCSS: false,
      infiniteLoop: true,
      hideControlOnEnd: true,
      easing: 'easeOutElastic',
      speed: 2000,
      pager:false,
      auto:true,
      pause: 5000
    });
  </script>