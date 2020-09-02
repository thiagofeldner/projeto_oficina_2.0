<h1 align="center">OFICINA 2.0</h1>

<p align="justify"> CRUD para cadastro e consulta de orçamento de uma oficina.</p>

<img src="https://img.shields.io/static/v1?label=laravel&message=framework&color=blue&style=for-the-badge&logo=LARAVEL"/>

Criação de uma CRUD para o teste da codificar, foi utilizado o PHP laravel utilizando o WAMP server para criação da tabela.

### Mudanças 

    - Finalizado o filtro por nome do cliente;
    - Retirado a página inicial;
    - Criado Model no projeto para seguir o padro MVC, usando a Query no Model;
    - Criado um request no projeto;
    - Criado um template para deixar as views mais leves;
    - Recriado todas as views, deixando a views de create/edit em uma só;
    - Foi alterado o modo de delete, sendo executado dentro de uma arquivo JavaScript;
    - Foi padronizado as tabelas do banco de dados para Inglês;
    - Foi padronizado as mensagens de erros para seguir o padrão do Laravel para validação mais organizada;
    - Foi comentado todo o código pelos padrões javaDoc;


### Listas não ordenadas
    - Cadastro de Clientes
    - Cadastro de vendedor;
    - Cadastro de orçamento;
    - Preço;
    - Data e hora atual do sistema;
    - Ordenação feita através dos últimos orçamentos cadastrados;
    - Paginação;
    - Filtro pelo nome do cliente;

## O que a plataforma é capaz de fazer: checkered_flag:

:trophy: Criação de cadastro de cliente, vendedor, orçamento e valor
:trophy: Edição de cliente, vendedor, orçamento e valor
:trophy: Visualização pelos últimos cadastros realizados
:trophy: Pesquisa por cliente finalizada.


> Status do Projeto: Concluido :heavy_check_mark:

> Status do Projeto: Em desenvolvimento constante :warning:

------- Como Rodar a aplicação 

No terminal, clone o projeto :arrow_forward:

    - git clone https://github.com/thiagofeldner/projeto_oficina_2.0.git
    
Entre na pasta do projeto:

    - cd projeto_oficina_2.0

Instale as dependencias:

    - php artisan migrate

Execute a aplicação :

    - php artisan serve





