# Cadastro de Alunos - CRUD

Sistema de gerenciamento de alunos desenvolvido em PHP com MySQL. Implementa as operações CRUD (Create, Read, Update, Delete).

## Funcionalidades

- Cadastrar novos alunos
- Listar alunos cadastrados
- Editar dados do aluno
- Deletar aluno do sistema
- Sistema de login básico

## Tecnologias

- PHP 7.0+
- MySQL
- HTML5 / CSS3

## Instalação

### 1. Importar banco de dados

```bash
mysql -u root < banco.sql
```

### 2. Configurar conexão (conexao.php)

```php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_aluno";
```

### 3. Iniciar servidor

- Inicie Apache e MySQL no XAMPP
- Acesse: `http://localhost/Cadastroaluno/`

## Login

- **Usuário:** admin
- **Senha:** 123456

## Estrutura da Tabela

| Campo | Tipo |
|-------|------|
| id | INT (PK) |
| nome | VARCHAR(100) |
| ra | VARCHAR(20) |
| idade | INT |
| curso | VARCHAR(50) |

## Arquivos

- `index.php` - Lista de alunos
- `novo.php` - Formulário novo aluno
- `salvar.php` - Processa inserção
- `editar.php` - Edita aluno
- `excluir.php` - Deleta aluno
- `login.php` - Login do sistema
- `logout.php` - Sair do sistema
- `conexao.php` - Conexão com BD
- `banco.sql` - Script do banco
- `css/stryle.css` - Estilos

## Como Usar

1. Fazer login com admin/123456
2. Clicar em "+ Novo Aluno" para adicionar
3. Clicar em "Editar" para modificar
4. Clicar em "Excluir" para remover
5. Clicar em "Sair" para logout

## Requisitos

- PHP 7.0+
- MySQL 5.7+
- XAMPP

---

**Exercício de CRUD - Ciência da Computação**
