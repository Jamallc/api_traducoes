## projeto_editar [/projeto/projeto_editar.php]

## projeto_editar [PUT]

Edita um projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | projeto salvo com sucesso

+ Parameters 
    + PROJETO_ID: `20` (required, string) - ID.
    + PROJETO_NOME: `Projeto delivery` (optional, string) - Email.
    + PROJETO_DESCRICAO: `Essa é a descrição do projeto delivery` (optional, string) - Email.
    + Idioma: `pt`(required, string) - Idioma.

+ Request projeto_editar
    {
        "PROJETO_ID": "20",
        "PROJETO_NOME": "Projeto delivery",
        "PROJETO_DESCRICAO": "Essa é a descrição do projeto delivery",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "projeto salvo com sucesso",
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