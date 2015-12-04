 <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="img/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                  </div>
                </div>
              </div>
            </div>
          </div>    
        </section>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <i class="icon-check"> </i>
                <h3>Escolha o documento</h3>
                <p>Navegue pelo menu acima e encontre o documento que você precisa. Leia o termo de uso com atenção e, estando de acordo, preencha os dados requeridos referente ao solicitante.</p><a href="#"></a>
              </li>
              <li>
                <i class="icon-map"></i>
                <h3>Escolha o endereço de entrega</h3>
                <p>Selecione o endereço de entrega dos documentos, pois isso influencia no preço do mesmo. Confirme o endereço de entrega e clique em confirmar.</p><a href="#"></a>
              </li>
              <li>
                <i class="icon-document"> </i>
                <h3>Informe os dados</h3>
                <p>Informe os dados para emissão do documento/certidão. Após esse passo você terá a opção de:Solicitar outro documento/certidão, É equivalente a voltar ao primeiro passo.Confirmar os dados e finalizar seu pedido.</p><a href="#"></a>
              </li>
              <li>
                <i class="icon-email"> </i>
                <h3>Espere o orçamento</h3>
                <p>Assim que sua solicitação foi recebida, iremos avaliá-la e assim que possível entraremos em contato.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Certidões</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-calendar-o"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Busca de bens</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-group"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Serviço especial para advogados</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-thumbs-up"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Documentos diversos</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>Empresa</h2><?= $this->Html->image('page-1_img01.jpg') ?>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><a href="#" class="btn">Mais...</a>
              </div>
              <div class="grid_4">
                <h2>Serviços</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <br>
                <ul>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Averbação de Divórcio</a></li>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Casamento (2ª via) </a></li>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Distribuições Criminais</a></li>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Falência e Concordata</a></li>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Matrícula Atualizada</a></li>
                  <li><i class="icon-check2"></i><a href="#">Certidão de Negativa do IPTU</a></li>

                </ul><a href="#" class="btn">Mais...</a>
              </div>
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
