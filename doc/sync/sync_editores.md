## sync_editores [/sync/sync_editores.php]

## sync_editores [POST]

Retorna todos os editores cadastrados no projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | success

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + PROJETO_ID: `20`(required, string) - Id do projeto.
    + Idioma: `pt`(required, string) - Idioma.

+ Request sync_editores
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
        "editores": [
            {
                USUARIO_ID: 20,
                USUARIO_NOME: "Fulano de Tal",
                USUARIO_EMAIL: "contato@email.com",
                NIVEL_PERMISSOES: "1",
                NIVEL_CRIACAO: "2022-04-01 11:00:02",
            },
            {
                USUARIO_ID: 123,
                USUARIO_NOME: "Fulano de Tal",
                USUARIO_EMAIL: "contato@email.com",
                NIVEL_PERMISSOES: "2",
                NIVEL_CRIACAO: "2022-04-01 12:30:07",
            },
            {
                USUARIO_ID: 124,
                USUARIO_NOME: "Sicrano de Tal",
                USUARIO_EMAIL: "contato2@email.com",
                NIVEL_PERMISSOES: "3",
                NIVEL_CRIACAO: "2022-04-04 14:30:04",
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