## projeto_excluir [/projeto/projeto_excluir.php]

## projeto_excluir [DELETE]

Exclui um projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | projeto excluído com sucesso
`fail`    |  -1  | O projeto não existe

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + PROJETO_ID: `20` (required, string) - ID.
    + Idioma: `pt`(required, string) - Idioma.

+ Request projeto_excluir
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "PROJETO_ID": "20",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "projeto excluído com sucesso",
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