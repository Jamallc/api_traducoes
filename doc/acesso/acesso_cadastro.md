## acesso_cadastro [/acesso/acesso_cadastro.php]

## acesso_cadastro [POST]

Cadastra um novo usuário.

status    | code | message
---       | ---  | ---
`fail`    | -2   | cadastro falhou
`fail`    | -1   | email já cadastrado
`success` |  0   | cadastro concluído

+ Parameters
    + USUARIO_EMAIL: `teste@email.com` (required, string) - Email.
    + USUARIO_SENHA: `12345678` (required, string) - Senha de acesso.
    + USUARIO_NOME: `12345678` (required, string) - Nome do usuário.
    + Idioma: `pt`(required, string) - Idioma.

+ Request acesso_cadastro
    {
        "USUARIO_EMAIL": "teste@email.com",
        "USUARIO_SENHA": "12345678",
        "USUARIO_NOME": "Steve Jobs",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "cadastro concluído",
    }

+ Response 400
    {
        "code": 400,
        "message": "Bad request"
    }

+ Response 401
    {
        "code": 401,
        "message": "Unauthorized"
    }

+ Response 404
    {
        "code": 404,
        "message": "Not found"
    }