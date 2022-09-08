## sync_textos [/sync/sync_textos.php]

## sync_textos [GET]

Retorna todas as frases cadastradas no idioma.

status    | code | message
---       | ---  | ---
`success` |  0   | success

+ Parameters 
    + LINGUA_ID: `23`(required, string) - Id da lingua.
    + Idioma: `pt`(required, string) - Idioma.

+ Request sync_textos
    {
        "LINGUA_ID": "23",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "success",
        "idiomas": [
            {
                TEXTO_ID: 56,
                TEXTO_ID_FRASE: "frase_app1",
                TEXTO_FRASE: "Uma frase para o app1",
                TEXTO_SIGLA: "PT",
                TEXTO_ATUALIZACAO: "2022-04-02 14:30:07",
                TEXTO_LINGUA_ID: "23"
            },
            {
                TEXTO_ID: 57,
                TEXTO_ID_FRASE: "frase_app2",
                TEXTO_FRASE: "Uma frase para o app2",
                TEXTO_SIGLA: "PT",
                TEXTO_ATUALIZACAO: "2022-04-02 14:30:07",
                TEXTO_LINGUA_ID: "23"
            },
            {
                TEXTO_ID: 58,
                TEXTO_ID_FRASE: "frase_app3",
                TEXTO_FRASE: "Uma frase para o app3",
                TEXTO_SIGLA: "PT",
                TEXTO_ATUALIZACAO: "2022-04-02 14:30:07",
                TEXTO_LINGUA_ID: "23"
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