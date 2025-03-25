<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Garante que o Sanctum gerencie a autenticação via cookie

    'allowed_methods' => ['*'], // Permite todos os métodos (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['*'], // Aqui você pode definir os domínios que podem acessar sua API (exemplo: 'https://seusite.com')

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Permite todos os headers necessários para requisições

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // Importante para Sanctum, pois permite o envio de cookies de autenticação
];
