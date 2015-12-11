
<fieldset>
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
</fieldset>
<fieldset>
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
</fieldset>