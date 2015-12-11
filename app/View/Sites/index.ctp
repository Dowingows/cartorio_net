 <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <?php foreach ($slider as $image):?>
              <div data-src="<?= $image?>">
                <div class="camera_caption fadeIn">
                  <div class="container">
                    <div class="row">
                    </div>
                  </div>
                </div>
              </div>
           <?php endforeach; ?>
          </div>    
        </section>
        <section>
          <div class="container banner_wr editable2">
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
                      <a href="#"></a>
                  </div>
                
                </li>
              <?php endforeach;?>
            <?php endif;?>
            </ul>
          </div>
        </section>
        <section class="well ins1">
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
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
            <?php if (!empty($content)):?>

              <?php foreach ($content->bloco03 as $key => $value): ?>
                <div class="grid_4">
                  <div>
                  <h2><?= $value->title ?></h2>
                  <?= $value->content ?>
                  </div>
                  <a href="#" class="btn">Mais...</a>              
                </div>
              <?php endforeach; ?>
              
            <?php endif;?>
              <div class="grid_4">
                <div class="info-box">
                  <h2 class="fa-comment">Entre em contato</h2>
                  <hr>
                  <h3>Atendimento:</h3>
                  <dl>
                    <dt>Segunda - Sexta:</dt>
                    <dd>08:00-12:00</dd>
                    <dd>14:00-18:00</dd>
                  </dl>
                  <dl>
                    <dt>Sábado:</dt>
                    <dd>08:00-12:00</dd>
                  </dl>
                  <hr>
                  <h3>Telefone:</h3>
                  <dl>
                    <dt><?=$setting['phone'] ?></dt>
                  </dl>
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
