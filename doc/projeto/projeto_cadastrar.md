## projeto_cadastrar [/projeto/projeto_cadastrar.php]

## projeto_cadastrar [POST]

Cadastra um novo projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | projeto cadastrado com sucesso

+ Parameters 
    + PROJETO_NOME: `Projeto delivery` (required, string) - Email.
    + PROJETO_DESCRICAO: `Essa é a descrição do projeto delivery` (optional, string) - Email.
    + Idioma: `pt`(required, string) - Idioma.

+ Request projeto_cadastrar
    {
        "PROJETO_NOME": "Projeto delivery",
        "PROJETO_DESCRICAO": "Essa é a descrição do projeto delivery",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "projeto cadastrado com sucesso",
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