Pré-requisitos (Linux [Distros baseadas em Ubuntu] / WSL Windows):
        1. sudo apt update
        2. sudo apt install -y apt-transport-https ca-certificates curl gnupg-agent software-properties-common
        3. curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/docker-archive-keyring.gpg
        4. sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(. /etc/os-release; echo "$UBUNTU_CODENAME") stable"
        5. sudo apt update
        6. sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

Instalação (Linux / WSL Windows):
        1. Clone o projeto.
        2. Entre no diretório do repositório:
                2.1 cd CrudPHP/
        3. Execute o comando para buildar e iniciar o container com a aplicação:
                3.1 sudo docker compose up -d
		3.2 sudo docker exec -it crud sh
			3.2.1 cd crud
			3.2.2 composer install
			3.2.3 chmod -R 777 .
        4. Espere o container subir
        5. Acesse utilizando o navegador em http://localhost:8000/crud

CRUD:
    Create: Na aba suspensa acesse "Novo Usuário" para cadastrar um novo usuário.
    Read: Utilize a aba "Listar Usuários" para visualizar usuários cadastros, editar ou excluir os mesmos.
    Update: Utilize o botão editar na tela "Listar Usuários" para atualizar um cadastro existente.
    Delete: Utilize o botão excluir na tela "Listar Usuários" para deletar um cadastro existente.

