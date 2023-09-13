<h1> Editar Usuário </h1>
<?php

$id = $_REQUEST["ID"];

$usuario = $entityManager->find('Usuario', (int)$id);

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="ID" value="<?php print $usuario->getId(); ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $usuario->getNome(); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $usuario->getEmail(); ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $usuario->getDataNascimento()->format("Y-m-d"); ?>" class="form-control">
    </div>
    <div class="mb-3">
        
        <button type="submite" class="btn btn-primary">Enviar</button>
    </div>


</form>