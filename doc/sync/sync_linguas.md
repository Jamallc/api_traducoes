## sync_idiomas [/sync/sync_idiomas.php]

## sync_idiomas [POST]

Retorna todos os idiomas cadastrados no projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | success

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + PROJETO_ID: `20`(required, string) - Id do projeto.
    + Idioma: `pt`(required, string) - Idioma.

+ Request sync_idiomas
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "PROJETO_ID": "20",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "success",
        "idiomas": [
            {
                LINGUA_ID: 12,
                LINGUA_NOME: "Português",
                LINGUA_SIGLA: "PT",
                LINGUA_CRIACAO: "2022-04-01 12:30:07",
                LINGUA_ATUALIZACAO: "2022-04-02 14:30:07",
            },
            {
                LINGUA_ID: 13,
                LINGUA_NOME: "Inglês",
                LINGUA_SIGLA: "EN",
                LINGUA_CRIACAO: "2022-04-01 12:30:07",
                LINGUA_ATUALIZACAO: "2022-04-02 14:30:07",
            },
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