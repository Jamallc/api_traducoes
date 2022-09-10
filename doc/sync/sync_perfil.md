## sync_perfil [/sync/sync_perfil.php]

## sync_perfil [POST]

Retorna todos os editores cadastrados no projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | success

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + USUARIO_ID: `20`(required, string) - Id do projeto.
    + Idioma: `pt`(required, string) - Idioma.

+ Request sync_perfil
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "USUARIO_ID": "20",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "success",
        "perfil": {
            USUARIO_ID: 20,
            USUARIO_NOME: "Fulano de Tal",
            USUARIO_EMAIL: "contato@email.com",
            USUARIO_SENHA: "ASDHRTWE1223ASDZ",
            USUARIO_TOKEN: "ASDHRTWE1223ASDZ",
            NIVEL_CRIACAO: "2022-04-01 12:30:07",
            NIVEL_ATUALIZACAO: "2022-04-01 12:30:07",
        }
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