## acesso_login [/acesso/acesso_login.php]

## acesso_login [POST]

Gerador de token e validação de acesso.

status    | code | message
---       | ---  | ---
`fail`    | -2   | email não ativado
`fail`    | -1   | email ou senha inválidos
`success` |  0   | login concluído

+ Parameters
    + USUARIO_EMAIL: `teste@email.com` (required, string) - Email.
    + USUARIO_SENHA: `12345678` (required, string) - Senha de acesso.
    + Idioma: `pt`(required, string) - Idioma.

+ Request acesso_login
    {
        "USUARIO_EMAIL": "teste@email.com",
        "USUARIO_SENHA": "12345678",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "login concluído",
        "user": {
            "TOKEN": "qi91wu82ey37rt46",
            "ID_USUARIO": 1,
            "USUARIO_NOME": "Steve Jobs",
            "USUARIO_EMAIL": "teste@email.com",
        }
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