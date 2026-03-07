

# 🍺 BenzaDeus Cervejaria

O BenzaDeus Cervejaria é um sistema de gerenciamento de degustações de cerveja (Beer Journal) desenvolvido como trabalho final da disciplina de Desenvolvimento Backend para Web. O projeto tem como objetivo aplicar conceitos de persistência de dados, programação orientada a objetos e gestão de conteúdo dinâmico para catalogar experiências sensoriais de forma organizada.

---

## 🛠️ Tecnologias usadas

* **PHP 8.x:** Lógica de backend e processamento de dados.
* **MySQL:** Banco de dados relacional para persistência.
* **phpMyAdmin:** Administração visual do banco de dados.
* **HTML5:** Estrutura semântica das páginas.
* **CSS3:** Estilização moderna com foco em UX (User Experience).

---

## 🚀 Funcionalidades Principais

### **Gestão de Degustações**

* **Registro Técnico:** Armazena nome, estilo, teor alcoólico (ABV), IBU e país de origem.
* **Avaliação Completa:** Inclui data da degustação, local, nota, sugestão de consumo futuro e comentários.
* **Galeria de Rótulos:** Sistema de upload para anexar imagens das cervejas consumidas.

### **Sistema de Usuários**

* **Segurança:** Sistema de cadastro e login de usuários.
* **Manutenção:** Interface para busca e alteração de perfis existentes.

---

## 🗄️ Estrutura do Banco de Dados

O projeto utiliza um banco de dados chamado `cerveijaria` com a seguinte estrutura de tabelas:

### **Tabela: `cerveja**`

Responsável por armazenar as informações das degustações.

| Campo | Tipo | Descrição |
| --- | --- | --- |
| `id` | INT | Identificador único (Auto-incremento) |
| `nome` | VARCHAR(25) | Nome da cerveja |
| `tipo_estilo` | VARCHAR(25) | Estilo (ex: Pilsen, Lager, IPA) |
| `teor_alcoolico` | DOUBLE | Percentual de álcool por volume (ABV) |
| `ibu` | INT | Índice de amargor |
| `pais_origem` | VARCHAR(35) | País de fabricação |
| `avaliacao` | INT | Nota de satisfação |
| `rotulo` | VARCHAR(100) | Nome do arquivo da imagem enviada |

### **Tabela: `usuario**`

Responsável pelo controle de acesso ao sistema.

| Campo | Tipo | Descrição |
| --- | --- | --- |
| `id` | INT | Identificador único |
| `nome` | VARCHAR(25) | Nome do usuário |
| `email` | VARCHAR(25) | Email para login |
| `senha` | VARCHAR(255) | Senha de acesso |

---

## 🏗️ Arquitetura do Projeto

O código foi desenvolvido utilizando o padrão **DAO (Data Access Object)**, separando a lógica de negócio da persistência de dados:

* **`CervejaDAO.php` & `UsuarioDAO.php**`: Contêm os métodos de inserção, listagem e alteração no banco.
* **`Cerveja.php` & `Usuario.php**`: Classes modelo (Entities) que representam os dados.
* **`/Imagens/`**: Diretório que armazena fisicamente os rótulos enviados pelos usuários.

---

## 🔧 Como Executar

1. Clone o repositório.
2. No **phpMyAdmin**, crie um banco de dados chamado `cerveijaria`.
3. Importe o arquivo SQL (fornecido na pasta do projeto) para criar as tabelas e dados iniciais.
4. Certifique-se de que o diretório `/Imagens/` tenha permissão de escrita.
5. Acesse `Login.php` através do seu servidor local (Apache).

---
