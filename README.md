# Desafio MDS - Backend (Rede SUAS)

Este repositório contém a API desenvolvida em **Laravel 11** para o sistema de gerenciamento de usuários da Rede SUAS.

## 🛠️ Tecnologias
- PHP 8.2+
- Laravel 11
- MySQL

## 🚀 Como rodar o projeto localmente
1. Clone o repositório.
2. Instale as dependências: `composer install`.
3. Configure o arquivo `.env` com suas credenciais do banco de dados.
4. Gere a chave da aplicação: `php artisan key:generate`.
5. Execute as migrations para criar as tabelas: `php artisan migrate`.
6. Inicie o servidor: `php artisan serve`.

## 📌 Endpoints da API (Laravel)
- Todas as rotas estão configuradas no arquivo `routes/api.php`