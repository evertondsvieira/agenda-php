# YourAgenda

### 📋 Descrição
YourAgenda é um site intuitivo e fácil de usar, projetado para ajudar as pessoas a gerenciar seus contatos importantes de forma eficiente e organizada. Com recursos de registro de conta, login e gerenciamento de contatos, o site é uma solução completa para quem busca manter suas informações de contato em um só lugar.

Ao se cadastrar no site, o usuário terá a possibilidade de criar sua própria conta pessoal, inserindo informações básicas como nome, endereço de e-mail e uma senha segura. Após confirmar sua conta, o usuário será redirecionado para a página inicial do site, onde encontrará todas as opções para gerenciar seus contatos.

Com a opção de cadastrar novos contatos, o usuário poderá adicionar informações como nome, endereço de e-mail e número de telefone. Além disso, o usuário poderá editar as informações existentes e excluir contatos, caso seja necessário.

### 🛠️ Tecnologias Utilizadas
* HTML5
* CSS3
* PHP
* JavaScript
* jQuery

### 🔧 Passos de instalação
Siga os seguintes passos para configurar a aplicação em sua máquina:

* Primeiro baixe o XAMPP em sua máquina, o download pode ser feito visitando a página oficial: [Xampp](https://www.apachefriends.org/pt_br/index.html)

* Após fazer o download e seguir a instalação necessária, você deve acessar o diretório onde o programa foi instalado, o diretório padrão é o:
```
C:\xampp
```

* O próximo passo é fazer o clone do repositório do YourAgenda na pasta htdocs:
```
C:\xampp\htdocs
```

* Também é necessário ter o MySQL Workbench instalado em sua máquina, o download também pode ser feito em sua página oficial: [MySQL](https://dev.mysql.com/downloads/workbench/)

### 👩🏼‍💻 Passos para execução em ambiente de desenvolvimento
Com o repositório na pasta htdocs, basta inicializar o Apache e o MySQL no Xampp, a porta padrão para o apache é a "80" e a porta padrão para o MySQL é a "3306", caso tenha algum problema em inicializar o MySQL siga os seguintes passos:

* Clique em 'Config' e abra o arquivo:
```
'my.ini'
```
* Agora utilize o comando Ctrl + L para fazer uma busca no arquivo, escreva "3306" e mude as portas para "3307", por exemplo. Isso deve resolver o problema.

* Agora basta você pode digitar no navegador o seguinte caminho e acessar a aplicação:
```
localhost:80/agenda-php/
```