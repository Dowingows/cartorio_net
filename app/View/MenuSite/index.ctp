<?php if( empty( $menus ) ){ ?>

	<p class="alert alert-info nothing"><i class="icon-info-sign"></i> Não há nenhum Usuário ainda. <?= $this->Html->link( 'Criar Novo', '/MenuSite/add', array( 'class' => 'btn btn-mini' ) ) ?></p>

<?php } else { ?>

	<table class="table table-striped">
	<thead>
	<tr>
		<th class="pic"></th>
		<th><?= $this->Paginator->sort( "MenuSite.descricao", "Descrição" ) ?></th>
		<th><?= $this->Paginator->sort( "MenuSite.link", "Link" ) ?></th>
		<th><?= $this->Paginator->sort( "MenuSite.posicao", "Posição" ) ?></th>
		<th>Ações</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach( $menus as $menu ): ?>

	<tr>
		<td><i class="icon-user"></i></td>
		<td><?= $menu[ 'MenuSite' ][ 'descricao' ]?></td>
		<td><?= $menu[ 'MenuSite' ][ 'link' ] ?></td>
		<td><?= $menu[ 'MenuSite' ][ 'posicao' ] ?>
		<td><?php 
			echo $this->Html->link( '<i class="icon-edit"></i> Editar', "/MenuSite/edit/{$menu['MenuSite']['id']}", array( 'class' => 'btn btn-mini', 'escape' => false ) );
			echo '&nbsp;&nbsp;';
			echo $this->Html->link( '<i class="icon-trash icon-white"></i> Excluir', "/MenuSite/delete/{$menu['MenuSite']['id']}", array( 'class' => 'btn btn-mini btn-danger delete', 'escape' => false ) );?>
		</td>


	</tr>
		
	<?php endforeach; ?>
	</tbody>
	</table>

<?php print $this->element( "pagination" ); } ?>

<?= $this->element( 'deleteModal', array( 'model' => 'Menu' ) ) ?>