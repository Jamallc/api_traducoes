## usuario_excluir [/usuarios/usuario_excluir.php]

## usuario_excluir [DELETE]

Desvincula o usuário do projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | usuário desvinculado com sucesso

+ Parameters
    + USUARIO_ID: `123` (required, string) - ID.
    + Idioma: `pt`(required, string) - Idioma.

+ Request usuario_excluir
    {
        "USUARIO_ID": "123",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "usuário desvinculado com sucesso",
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