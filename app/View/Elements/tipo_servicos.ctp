<style>

    .type-service{
        padding-top: 30px;
    }

    .type-service > ul {
        list-style-type: none;
        border: 1px solid #434547;
        background-color: #f1f1f1;
        list-style-image:none;
        margin: 0;
        padding: 0;
        width: 100%;
    }


    .type-service > ul >li{

        position: relative;
        margin-left: auto;
        padding-left: auto;
        padding-top: auto;
        padding-bottom: auto;
        font-size: 16px;
        /*// line-height: 18px;*/
        color: #9A9FA3;
    }
    .type-service > ul >li:hover{
        background-color: #636c72;
    }
    .type-service > ul >li:hover  > a{
        color: white;
        font-weight: bold;

    }
    .type-service > ul >li > a {
        display: block;
        color: #000;
        padding: 8px 0 8px 16px;
        text-decoration: none;
    }

    .type-service > ul > li.active {
        background-color: #434547;
    }
    .type-service > ul > li.active > a {    
        color: white;
    }

    /*    .type-service > ul >li > a:hover:not(.active) {
            background-color: #434547;
            color: white;
        }*/

    .type-service > ul >li > a:before {
        content: none;
    }

</style>
<div class="type-service">
    <?php $passed = empty($this->passedArgs[0]) ? "" : $this->passedArgs[0]; ?>
    <ul class="type-servico-menu">
        <?php foreach ($servicos as $key => $servico): ?>
            <?php
            $active = "";
            if ($key == $passed) {
                $active = "active";
            }
            ?>

            <li class="type-servico-item <?= $active; ?>"><?= $this->Html->link($servico, "/solicitar-certidao/" . $key, array('escape' => false)); ?></li>
<?php endforeach; ?>
    </ul>

    <!--        <li class="type-servico-item active"><a  href="#home">aasdasdlkjasldkjlaskjdlkajsdlkjalskjdlkajsdlkjaslkjdkljalkjsdklasdasdsdlaksjdlkajsdlkjasdkjalkjsdlkjasdxxxxx</a></li>
            <li class="type-servico-item"><a href="#news">News</a></li>
            <li class="type-servico-item"><a href="#contact">Contact</a></li>
            <li class="type-servico-item"><a href="#about">About</a></li>-->
</div>