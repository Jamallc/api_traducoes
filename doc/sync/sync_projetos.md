## sync_projetos [/sync/sync_projetos.php]

## sync_projetos [POST]

Retorna todos os projetos cadastrados.

status    | code | message
---       | ---  | ---
`success` |  0   | success

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + Idioma: `pt`(required, string) - Idioma.

+ Request sync_projetos
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "success",
        "projetos": [
            {
                PROJETO_ID: 20,
                PROJETO_NOME: "Traduções APP",
                PROJETO_DESCRICAO: "Aplicativo para adicionar traduções nos apps",
                PROJETO_CRIACAO: "2022-04-01 12:30:07",
                PROJETO_ATUALIZACAO: "2022-07-04 16:24:38",
            },
            {
                PROJETO_ID: 21,
                PROJETO_NOME: "Traduções APP",
                PROJETO_DESCRICAO: "Aplicativo para adicionar traduções nos apps",
                PROJETO_CRIACAO: "2022-04-01 12:30:07",
                PROJETO_ATUALIZACAO: "2022-07-04 16:24:38",
            },
            {
                PROJETO_ID: 22,
                PROJETO_NOME: "Traduções APP",
                PROJETO_DESCRICAO: "Aplicativo para adicionar traduções nos apps",
                PROJETO_CRIACAO: "2022-04-01 12:30:07",
                PROJETO_ATUALIZACAO: "2022-07-04 16:24:38",
            }
        ]
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