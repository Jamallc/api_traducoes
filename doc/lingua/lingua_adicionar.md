## lingua_adicionar [/lingua/lingua_adicionar.php]

## lingua_adicionar [POST]

Cadastra uma nova língua.

status    | code | message
---       | ---  | ---
`success` |  0   | língua adicionada com sucesso

+ Parameters 
    + LINGUA_NOME: `Português` (required, string) - Idioma.
    + LINGUA_SIGLA: `PT` (required, string) - Sigla.
    + PROJETO_ID: `20` (required, string) - Id.
    + Idioma: `pt`(required, string) - Idioma.

+ Request lingua_adicionar
    {
        "LINGUA_NOME": "Português",
        "LINGUA_SIGLA": "PT",
        "PROJETO_ID": "20",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "língua adicionada com sucesso",
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