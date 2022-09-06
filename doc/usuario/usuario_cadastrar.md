## usuario_cadastrar [/usuarios/usuario_cadastrar.php]

## usuario_cadastrar [POST]

Cadastra um usuário a um projeto.

status    | code | message
---       | ---  | ---
`fail`    | -1   | email já cadastrado no projeto
`success` |  0   | link de cadastro enviado ao email do usuário
`success` |  1   | usuário adicionado

+ Parameters
    + USUARIO_EMAIL: `teste@email.com` (required, string) - Email.
    + NIVEL_PERMISSOES: `2` (required, string) - Nível de permissão (1: Master, 2: Editor, 3: Leitor).
    + Idioma: `pt`(required, string) - Idioma.

+ Request usuario_cadastrar
    {
        "USUARIO_EMAIL": "teste@email.com",
        "NIVEL_PERMISSOES": "2",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 1,
        "message": "usuário adicionado",
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