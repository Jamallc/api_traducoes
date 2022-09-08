## lingua_editar [/lingua/lingua_editar.php]

## lingua_editar [PUT]

Edita uma língua.

status    | code | message
---       | ---  | ---
`success` |  0   | língua salva com sucesso

+ Parameters 
    + LINGUA_ID: `23` (required, string) - Id.
    + LINGUA_NOME: `Português` (optional, string) - Nome.
    + LINGUA_SIGLA: `PT` (optional, string) - Sigla.
    + Idioma: `pt`(required, string) - Idioma.

+ Request lingua_editar
    {
        "LINGUA_ID": "23",
        "LINGUA_NOME": "Português",
        "LINGUA_SIGLA": "PT",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "língua salva com sucesso",
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