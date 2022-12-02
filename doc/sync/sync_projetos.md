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
                "PROJETOS_ID": 1,
                "PROJETOS_NOME": "App Traduções",
                "PROJETOS_DESCRICAO": "Um aplicativo que cria as traduções de outros aplicativos!",
                "PROJETOS_CRIACAO": "2022-09-04 17:44:17",
                "PROJETOS_ATUALIZACAO": "2022-09-04 17:44:17",
                "PROJETOS_EXCLUIDO": null,
                "PROJETO_USUARIO_ID": 1,
                "NIVEL_PERMISSOES": 2
            },
            {
                "PROJETOS_ID": 3,
                "PROJETOS_NOME": "App Teste",
                "PROJETOS_DESCRICAO": "Descrição de teste",
                "PROJETOS_CRIACAO": "2022-11-28 16:56:41",
                "PROJETOS_ATUALIZACAO": "2022-11-28 17:49:56",
                "PROJETOS_EXCLUIDO": 0,
                "PROJETO_USUARIO_ID": 2,
                "NIVEL_PERMISSOES": 1
            },
            {
                "PROJETOS_ID": 4,
                "PROJETOS_NOME": "Aasdasdas",
                "PROJETOS_DESCRICAO": "Descrição de teste 2",
                "PROJETOS_CRIACAO": "2022-12-02 14:55:28",
                "PROJETOS_ATUALIZACAO": "2022-12-02 14:55:28",
                "PROJETOS_EXCLUIDO": null,
                "PROJETO_USUARIO_ID": 2,
                "NIVEL_PERMISSOES": 1
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