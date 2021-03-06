<?php if( empty( $pages ) ){ ?>

	<p class="alert alert-info nothing"><i class="icon-info-sign"></i> Não há nenhum Usuário ainda. <?= $this->Html->link( 'Criar Novo', '/admin/users/add', array( 'class' => 'btn btn-mini' ) ) ?></p>

<?php } else { ?>

	<table class="table table-striped">
	<thead>
	<tr>
		<th class="pic"></th>
		<th><?= $this->Paginator->sort( "id", "ID" ) ?></th>
		<th><?= $this->Paginator->sort( "Page.title", "Título" ) ?></th>
		<th>Link</th>
		<th><?= $this->Paginator->sort( "Page.modifed", "Última modificação" ) ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach( $pages as $page ): ?>

	<tr>
		<td><i class="icon-user"></i></td>
		<td><?= $page[ 'Page' ][ 'id' ] ?></td>
		<td><?= $this->Html->link( $page[ 'Page' ][ 'title' ], "/admin/sites/page_edit/{$page['Page']['id']}", array('escape' => false)) ?></td>
		<td> <a href="<?php echo $this->html->url('/', true) . $page[ 'Page' ][ 'slug' ]?>" target="_blank"><?php echo $this->html->url('/', true) . $page[ 'Page' ][ 'slug' ]?></a></td>
		<td><?= $this->FrontEnd->nicedate($page[ 'Page' ][ 'modified' ]) ?></td>
	</tr>
		
	<?php endforeach; ?>
	</tbody>
	</table>

<?php print $this->element( "pagination" ); } ?>