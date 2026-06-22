# Green Desk

Sistema de Service Desk desenvolvido para gerenciamento de chamados técnicos, inspirado em soluções como GLPI e outros sistemas de Help Desk corporativos.

## Sobre o Projeto

O Green Desk tem como objetivo centralizar solicitações de suporte dentro de uma organização, permitindo que usuários registrem chamados e que técnicos acompanhem, gerenciem e resolvam essas demandas de forma organizada.

O projeto está sendo desenvolvido utilizando Laravel como API REST, seguindo boas práticas de arquitetura, autenticação e modelagem de dados.

## Objetivos

* Desenvolver uma API REST completa utilizando Laravel.
* Aplicar autenticação baseada em tokens com Laravel Sanctum.
* Praticar modelagem de banco de dados e relacionamentos.
* Implementar regras de negócio comuns em sistemas corporativos.
* Construir uma base sólida para futuras integrações Web e Mobile.

## Funcionalidades Planejadas

### MVP (Versão Inicial)

* Cadastro de usuários
* Autenticação de usuários
* Criação de chamados
* Listagem de chamados
* Visualização de detalhes do chamado
* Atribuição de responsáveis
* Alteração de status
* Comentários em chamados

### Próximas Versões

* Categorias de chamados
* Prioridades
* Histórico de alterações
* Upload de anexos
* Dashboard com métricas
* Notificações
* SLA
* Relatórios gerenciais

## Arquitetura

O projeto está sendo desenvolvido com foco em separação de responsabilidades e escalabilidade.

Principais componentes:

* Controllers
* Form Requests
* Resources
* Services
* Policies
* Models Eloquent
* API RESTful

## Modelagem Inicial

### Users

* id
* name
* email
* password
* role

### Tickets

* id
* title
* description
* creator_id
* assigned_id
* status
* priority
* closed_at

### Comments

* id
* ticket_id
* user_id
* content

## Tecnologias

* PHP 8+
* Laravel 13
* PostgreSQL
* Laravel Sanctum
* REST API

## Objetivo de Aprendizado

Este projeto está sendo utilizado como estudo prático para aprofundamento em:

* Desenvolvimento Backend
* APIs REST
* Arquitetura de Software
* Domain Driven Design
* Autenticação e Autorização
* Banco de Dados Relacional
* Boas práticas de desenvolvimento

## Status

🚧 Em desenvolvimento.
