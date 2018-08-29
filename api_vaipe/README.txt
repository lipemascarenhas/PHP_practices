Estrutura api_vaipe:

|-api_vaipe

|--config
|---database.php /*acesso ao banco de dados*/

|--employee /*CRUD e todos os arquivos executáveis*/
|---create.php
|---delete.php
|---form_teste.html
|---profile.php
|---read.php
|---read_one.php
|---update.php

|--object 
|---employee.php /*classe Employee, onde estão todos os métodos e atributos dos códigos*/

Como executar:
1. Acesse o arquivo 'database.php' e altere o caminho para acessar o banco de dados;
  1.1. Alterar os atributos que estão definidos em 'database.php'.
2. Acesse o diretório 'employee';
3. Execute o arquivo 'form_teste.html'
>> faz uma consulta no banco de dados para acessar o cadastro dos colaboradores cadastrados a partir de input de 'id'; e perfil,
retornando a quantidade de colaboradores do gênero feminino (F) e masculino (m);
