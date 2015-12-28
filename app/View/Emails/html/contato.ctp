<table>
    <tr>
        <td>Assunto:</td>
        <td><?= $contato['subject'] ?> </td>
    </tr>
    <tr>
        <td>Nome:</td>
        <td><?= $contato['name'] ?></td>
    </tr>
    <tr>
        <td>Telefone:</td>
        <td><?= $contato['phone'] ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $contato['email'] ?></td>
    </tr>
    <tr>
        <td colspan="2">Mensagem:</td>
    </tr>
    <tr>
        <td colspan="2"><?= $contato['message'] ?></td>
    </tr>
</table>
