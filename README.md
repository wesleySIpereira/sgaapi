# API NOVOSGA 2.0.8 
## _Api para gerar senha de forma simples_



[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Api desenvolvida para facilitar a criação de novas senhas dentro do sistema.

- simples e direta.
- retorna a senha em arquivo pdf
- podendo  enviar  direto para impressão  

## Criação


Criado para facilitar a geração de tickets sem a necessidade de um painel touch
o que diminui bastante no valor final do sistema, o mesmo computado pode mostrar as senhas e gerar os tickets por meio de softwarer desktop. 

## Instalação

Requerimento para funcionar [PHP 7.4 ou superior](https://php.net/).


Para instalar o sgaapi deve-se setar o mesmo banco de dados usado pelo novosga 2.0.8.

```sh
deve setar o mesmo banco de dados usad pelo novosga
modifique o arquivo database.php dentro deo app/config/

```
#### Database.php 

Modifique as linhas como o exemplo.

    public $default = [
       'DSN'      => '',
       'hostname' => 'Endereco_servidor',
       'username' => 'usuario_bd',
       'password' => 'senha_bd',
       'database' => 'novosga_db'//nome do banco

### API endpoints

| Tipo       |  Parametros    | endpoint                                             | Descrição           |
| -------------|------------- | -------------------------------------------------------- | ---------------------- |
| POST | id_unidade,id_servico,prioridade  | /sgapi/api/distribui  | Adiciona uma nova senha na fila.Retorna um binario em pdf.    |

**Nota**: Se ainda não tem o Novosga instalado, segue o link do tutorial simplificado para linux e windows [Canal do Pereira](https://www.youtube.com/watch?v=WKR2GNmvMxI)


 
