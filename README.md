# CRUD PHP MySQL

Este projeto é um sistema simples de cadastro de funcionários utilizando **PHP**, **MySQL** e **Bootstrap**. Ideal para testes práticos, entrevistas ou como base para sistemas maiores.

## 🧱 Funcionalidades

- Criar funcionário
- Listar todos
- Editar informações
- Excluir registro

## 💻 Requisitos

- PHP 7.4+
- MySQL/MariaDB
- Servidor local (XAMPP, WAMP, Laragon, etc.)

## 🚀 Como rodar

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/crud-php-mysql.git
   cd crud-php-mysql
   ```

2. **Crie o banco de dados**
   - Abra o MySQL (phpMyAdmin ou terminal)
   - Execute o conteúdo do arquivo `schema.sql`

3. **Configure o acesso ao banco**
   - No arquivo `db.php`, verifique os dados:
     ```php
     $conn = new mysqli("localhost", "root", "", "empresa");
     ```

4. **Inicie o servidor local**
   - Copie a pasta para o `htdocs/` se estiver usando XAMPP
   - Acesse: `http://localhost/crud-php-mysql/index.php`

## 📁 Estrutura

```
crud-php-mysql/
├── create.php
├── db.php
├── delete.php
├── edit.php
├── index.php
├── schema.sql
├── store.php
└── update.php
```

## 📄 Licença

Código aberto para fins de estudo e uso pessoal.
