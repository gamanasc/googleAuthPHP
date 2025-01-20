# Login Simples em PHP com Google

Este projeto implementa um sistema de login simples em PHP utilizando a autenticação do Google. 
Ele permite que usuários façam login com suas contas Google de forma rápida e segura.

## Funcionalidades

- Login com contas do Google utilizando OAuth 2.0.
- Redirecionamento após login bem-sucedido.
- Visualização de informações básicas do perfil do usuário (nome, e-mail, foto).
- Logout para encerrar a sessão.

## Requisitos

- PHP 7.4 ou superior
- Composer
- Conta no Google Cloud Platform (GCP) com credenciais de OAuth 2.0 configuradas
- Biblioteca `google/apiclient` (instalada via Composer)
- Biblioteca `vlucas/phpdotenv` (instalada via Composer)