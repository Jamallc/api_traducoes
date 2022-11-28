## lingua_excluir [/lingua/lingua_excluir.php]

## lingua_excluir [DELETE]

Excluir uma língua.

status    | code | message
---       | ---  | ---
`success` |  0   | Língua excluída com sucesso
`fail`    |  -1  | A língua não existe

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + LINGUA_ID: `23` (required, string) - Id.
    + Idioma: `pt`(required, string) - Idioma.

+ Request lingua_excluir
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "LINGUA_ID": "23",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "língua excluída com sucesso",
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