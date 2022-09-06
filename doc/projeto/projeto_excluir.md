## projeto_excluir [/projeto/projeto_excluir.php]

## projeto_excluir [DELETE]

Cadastra um novo projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | projeto excluído com sucesso

+ Parameters 
    + PROJETO_ID: `20` (required, string) - ID.
    + Idioma: `pt`(required, string) - Idioma.

+ Request projeto_excluir
    {
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