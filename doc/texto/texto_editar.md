## texto_editar [/texto/texto_editar.php]

## texto_editar [PUT]

Edita um texto.

status    | code | message
---       | ---  | ---
`fail`    | -1   | já existe uma frase com esse id
`success` |  0   | texto salvo com sucesso

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + TEXTO_FRASE: `Uma outra frase` (optional, string) - Frase da tradução.
    + TEXTO_SIGLA: `PT` (optional, string) - Sigla da língua.
    + TEXTO_ID_FRASE: `nova_frase` (required, string) - Id da frase.
    + TEXTO_ID: `15` (required, string) - Id da frase.
    + Idioma: `pt`(required, string) - Idioma.

+ Request texto_editar
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "TEXTO_FRASE": "Uma outra frase",
        "TEXTO_SIGLA": "PT",
        "TEXTO_ID_FRASE": "nova_frase",
        "TEXTO_ID": "15",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "texto salvo com sucesso",
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