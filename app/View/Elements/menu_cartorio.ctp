<?php 
    $menus = array(
        array(
            'label'=>'Home',
            'url'=>'/',
            'active'=>($this->name=='Sites')&&($this->action =='index'),
        ),
        array(
            'label'=>'Institucional',
            'url'=>'/institucional',
            'active'=>($this->name=='Sites')&&($this->action =='sigle_page'),
        ),
        array(
            'label'=>'Serviços',
            'url'=>'#',
            'active'=>false,
        ),
        array(
            'label'=>'Solicite a sua certidão',
            'url'=>'/solicitar-certidao',
            'active'=>($this->name=='SolicitacaoServicos')&&($this->action =='solicitar_servico'),
        ),
        array(
            'label'=>'Serviços para Advogados',
            'url'=>'/servicos-para-advogado',
            'active'=>($this->name=='Sites')&&($this->action =='servico_advogado'),
        ),
        array(
            'label'=>'Contato',
            'url'=>'/contato',
            'active'=>($this->name=='Sites')&&($this->action =='contato'),
        )
    );
?>
<nav class="nav">
    <ul data-type="navbar" class="sf-menu">
        <?php foreach($menus as $item) :?>
        <?php $active=""; 
        if($item['active']){
            $active ="active";
        }
        ?>
        <li class="<?= $active ?>" ><a href="<?= $this->Html->url($item['url']) ?>"><?= $item['label']?></a>
        
        <?php endforeach;?>
        
    </ul>
</nav>
