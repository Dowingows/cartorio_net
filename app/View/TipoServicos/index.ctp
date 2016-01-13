<?php if (empty($servicos)): ?>

    <p class="alert alert-info nothing"><i class="icon-info-sign"></i> Não há nenhum arquivo ainda. <?= $this->Html->link('Enviar arquivo', '/tipoServicos/add', array('class' => 'btn btn-mini')) ?></p>

<?php else : ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="pic"></th>
                <th><?= $this->Paginator->sort("id", "ID") ?></th>
                <th><?= $this->Paginator->sort("name", "Nome") ?></th>
                <th>A&ccedil;&otilde;es</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicos as $servico): ?>

                <tr>
                    <td><i class="icon-file"></i></td>
                    
                    <td><?= $servico['TipoServico']['id'] ?></td>
                    <td><?= $servico['TipoServico']['nome'] ?></td>        
                    <td>                      
                        <?=  $this->Html->link( '<i class="icon-edit icon-white"></i>', "/tipoServicos/edit/{$servico['TipoServico']['id']}", array( 'class' => 'btn btn-mini btn-warning delete', 'escape' => false ) );?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php print $this->element("pagination"); ?>