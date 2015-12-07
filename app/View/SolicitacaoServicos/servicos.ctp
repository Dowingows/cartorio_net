<?php if (empty($solicitacoes)) { ?>

    <p class="alert alert-info nothing"><i class="icon-info-sign"></i> Não há nenhuma solicitação ainda.</p>

<?php } else { ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="pic"></th>
                <th><?= $this->Paginator->sort("nome_solicitante", "Nome") ?></th>
                <th><?= $this->Paginator->sort("email_solicitante", "Email") ?></th>
                <th><?= $this->Paginator->sort("cpf_cnpj_solicitante", "CPF/CNPJ") ?></th>
                <th><?= $this->Paginator->sort("DadoDocumento.TipoServico", "Serviço") ?></th>
                <th><?= $this->Paginator->sort("cpf_cnpj_solicitante", "Enviado?") ?></th>
                <th><?= $this->Paginator->sort("cpf_cnpj_solicitante", "Enviada em") ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacoes as $solicitacao): ?>

                <tr>
                    <td><i class="icon-user"></i></td>
                    <td><?= $this->Html->link($solicitacao['SolicitacaoServico']['nome_solicitante'], "/SolicitacaoServicos/view_solicitacao/{$solicitacao['SolicitacaoServico']['id']}", array('escape' => false)) ?></td>
                    <td><?= $solicitacao['SolicitacaoServico']['email_solicitante'] ?></td>
                    <td><?= $solicitacao['SolicitacaoServico']['cpf_cnpj_solicitante'] ?></td>
                    <td><?= $solicitacao['DadoDocumento']['TipoServico']['nome'] ?></td>
                    <td><?= $solicitacao['SolicitacaoServico']['email_send'] ?></td>
                    <td><?= $this->Frontend->nicedate($solicitacao['SolicitacaoServico']['created']) ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <?php print $this->element("pagination");
}
?>