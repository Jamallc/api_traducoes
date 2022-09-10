## texto_adicionar [/texto/texto_adicionar.php]

## texto_adicionar [POST]

Cadastra um novo texto.

status    | code | message
---       | ---  | ---
`fail`    | -1   | já existe um cadastro com esse id
`success` |  0   | texto adicionado com sucesso

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + TEXTO_FRASE: `Uma nova frase` (required, string) - Frase da tradução.
    + TEXTO_SIGLA: `PT` (required, string) - Sigla da língua.
    + TEXTO_ID_FRASE: `nova_frase` (required, string) - Id da frase.
    + LINGUA_ID: `20` (required, string) - Id da língua.
    + Idioma: `pt`(required, string) - Idioma.

+ Request texto_adicionar
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "TEXTO_FRASE": "Uma nova frase",
        "TEXTO_SIGLA": "PT",
        "TEXTO_ID_FRASE": "nova_frase",
        "LINGUA_ID": "20",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "texto adicionado com sucesso",
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