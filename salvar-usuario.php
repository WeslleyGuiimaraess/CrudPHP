<?php

    switch($_REQUEST["acao"])
    {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $data_nasc = $_POST["data_nasc"];
            $data_nasc = DateTime::createFromFormat("Y-m-d", $data_nasc);

            $usuario = new Usuario();

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setDataNascimento($data_nasc);

            try {
                $entityManager->persist($usuario);
                $entityManager->flush();

                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            
            catch (Exception $e) {
                print"<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $id = $_REQUEST["ID"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $data_nasc = $_POST["data_nasc"];
            $data_nasc = DateTime::createFromFormat("Y-m-d", $data_nasc);

            $usuario = $entityManager->find('Usuario', (int)$id);

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setDataNascimento($data_nasc);

            try {
                $entityManager->flush();

                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            catch (Exception $e) {
                print"<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $id = $_REQUEST["ID"];

            try {
                $usuario = $entityManager->find('Usuario', (int)$id);

                $entityManager->remove($usuario);
                $entityManager->flush();

                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            
            catch (Exception $e) {
                print"<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }

?>