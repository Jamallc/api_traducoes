## acesso_recuperar_senha [/acesso/acesso_recuperar_senha.php]

## acesso_recuperar_senha [POST]

Envia para o email da pessoa uma recuperação de senha.

status    | code | message
---       | ---  | ---
`fail`    | -1   | email não existe
`success` |  0   | link de recuperação enviado ao email

+ Parameters
    + USUARIO_EMAIL: `teste@email.com` (required, string) - Email.
    + Idioma: `pt`(required, string) - Idioma.

+ Request acesso_recuperar_senha
    {
        "USUARIO_EMAIL": "teste@email.com",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "link de recuperação enviado ao email",
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