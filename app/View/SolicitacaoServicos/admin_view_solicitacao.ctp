<div class="row">
    <div class="form-horizontal view">
        <div class="span5">
            <legend>Dados do solicitante</legend>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td class="dlabel">Nome</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['nome_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">CPF/CNPJ</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['cpf_cnpj_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">RG</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['rg_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">Telefone 1</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['telefone_1_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">Telefone 2</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['telefone_2_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">Ramal</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['ramal'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">Celular</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['telefone_1_solicitante'] ?></td>
                    </tr>
                    <tr>
                        <td class="dlabel">Email</td>
                        <td class="data"><?= $solicitacao['SolicitacaoServico']['email_solicitante'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>    
        <div class="span5">
            <legend>Dados do documento</legend>
            <table class="table table-striped">
                <?php if (empty($solicitacao['DadoDocumento'])): ?>
                    <tr>
                        <td colspan="2">Sem campos </td>

                    </tr>
                <?php else : ?>
                    <?php foreach ($solicitacao['DadoDocumento'] as $value) : ?>
                        <tr>
                            <td><?= $value['label'] ?> </td>
                            <td><?= $value['value'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
            </legend>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <legend>Endereço de Entrega</legend>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td class="dlabel">Endereço</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['endereco_entrega'] ?></td>
                </tr>
                <tr>
                    <td class="dlabel">Número</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['numero_endereco_entrega'] ?></td>
                </tr>
                <tr>
                    <td class="dlabel">Bairro</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['bairro_entrega'] ?></td>
                </tr>
                <tr>
                    <td class="dlabel">CEP</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['cep_entrega'] ?></td>
                </tr>
                <tr>
                    <td class="dlabel">Estado</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['estado_entrega'] ?></td>
                </tr>
                <tr>
                    <td class="dlabel">Cidade</td>
                    <td class="data"><?= $solicitacao['SolicitacaoServico']['cidade_entrega'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('deleteModal', array('model' => 'Usuário')) ?>