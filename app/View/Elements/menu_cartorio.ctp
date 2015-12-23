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
            'url'=>'/servicos',
            'active'=>($this->name=='SolicitacaoServicos')&&($this->action =='solicitar_servico'),
        ),
        array(
            'label'=>'Serviços advocatícios',
            'url'=>'/servicos-advocaticios',
            'active'=>($this->name=='Sites')&&($this->action =='servico_advogado'),
        ),
        array(
            'label'=>'Clube de investidores judiciais',
            'url'=>'/',
            'active'=>false,
        ),
        array(
            'label'=>'Depoimentos',
            'url'=>'/',
            'active'=>false,
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
