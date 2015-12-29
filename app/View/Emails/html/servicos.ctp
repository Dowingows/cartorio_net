<?php // pr($solicitacao);die;    ?>

<style>
/*    table, th, td {
        border: 1px solid black;

    }*/
/*    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
    }*/
    table {
        width: 100%;
    }


/*    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }*/
/*    tr:nth-child(even) {
        background-color: #f2f2f2;
    }*/

/*    td:first-child{
        background-color: #5F5F5F;
        width: 10%;
        color: white;
        font-weight: bold;
        height: 50px;
        text-align: left;
        border: none;
    }*/
/*    fieldset {
        font-family: sans-serif;
        border: 3px solid #000000;
        background: white;
        border-radius: 5px;
        padding: 10px;
    }*/

/*    fieldset legend {
        background: #EA8015;
        color: #fff;
        padding: 5px 10px ;
        font-size: 26px;
        border-radius: 5px;
        box-shadow: 0 0 0 5px #CC6017;
        margin-left: 20px;
    }*/
/*    .logo{
        height:140px;
    }*/
/*    .logo-container{
        padding-bottom:  40px;
    }*/
    h2{
       
    }
</style>
<br/>
<div  style=" padding-bottom:  40px;">
    <img height="140" style="height:140px;" src="http://www.cartorionet.com/img/logo.png">
</div>

<h2 align="center" style=" font-size: 40px; line-height: 38px;font-weight: bold;color:#A5A8AB;padding-bottom:  40px;">
    Solicitação de Serviço Nº <?=sprintf("%06d",$solicitacao['SolicitacaoServico']['id']);?>
</h2>

<fieldset style="font-family: sans-serif; border: 3px solid #000000; background: white; border-radius: 5px; padding: 10px;">
    <legend style="background: #EA8015; color: #fff; padding: 5px 10px ; font-size: 26px; border-radius: 5px; box-shadow: 0 0 0 5px #CC6017; margin-left: 20px;">Dados do solicitante</legend>
    <table style=" border-collapse: collapse; border: 1px solid black; width: 100%;">
        <tbody>
            <tr style="padding:15px;">
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Nome</td>
                <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['nome_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">CPF/CNPJ</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['cpf_cnpj_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">RG</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['rg_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Telefone 1</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['telefone_1_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Telefone 2</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['telefone_2_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Ramal</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['ramal'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Celular</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['telefone_1_solicitante'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Email</td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['email_solicitante'] ?></td>
            </tr>
        </tbody>
    </table>
</fieldset>
<br/>
<fieldset style="font-family: sans-serif; border: 3px solid #000000; background: white; border-radius: 5px; padding: 10px;">
    <legend style="background: #EA8015; color: #fff; padding: 5px 10px ; font-size: 26px; border-radius: 5px; box-shadow: 0 0 0 5px #CC6017; margin-left: 20px;">Endereço de Entrega</legend>
    <table>
        <tbody>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Endereço: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['endereco_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Número: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['numero_endereco_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Bairro: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['bairro_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">CEP: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['cep_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Estado: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['estado_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Complemento: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= empty($solicitacao['SolicitacaoServico']['complemento_entrega']) ? '' : $solicitacao['SolicitacaoServico']['complemento_entrega'] ?></td>
            </tr>
            <tr>
                <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;">Cidade: </td>
               <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $solicitacao['SolicitacaoServico']['cidade_entrega'] ?></td>
            </tr>
        </tbody>
    </table>
</fieldset>
<br/>
<fieldset style="font-family: sans-serif; border: 3px solid #000000; background: white; border-radius: 5px; padding: 10px;">
    <legend style="background: #EA8015; color: #fff; padding: 5px 10px ; font-size: 26px; border-radius: 5px; box-shadow: 0 0 0 5px #CC6017; margin-left: 20px;">Dados do documento</legend>
    <table>
        <?php if (empty($solicitacao['DadoDocumento'])): ?>
            <tr>
                <td colspan="2">Sem campos </td>

            </tr>
        <?php else : ?>
            <?php foreach ($solicitacao['DadoDocumento'] as $value) : ?>
                <tr>
                    <td style="padding:15px;background-color: #5F5F5F; width: 10%; color: white; font-weight: bold; height: 50px; text-align: left; border: none;"><?= $value['label'] ?> </td>
                    <td style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd;"><?= $value['value'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</fieldset>