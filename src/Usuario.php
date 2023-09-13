<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'usuario')]
class Usuario {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $nome;

    #[ORM\Column(type: 'string')]
    private string $email;

    #[ORM\Column(type: 'string')]
    private string $senha;

    #[ORM\Column(type: 'date')]
    private \DateTime $dataNascimento;

    public function getId(): int|null {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }

    public function getDataNascimento(): \DateTime {
        return $this->dataNascimento;
    }

    public function setDataNascimento(\DateTime $dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }
}

?>