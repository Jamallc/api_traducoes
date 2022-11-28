## texto_excluir [/texto/texto_excluir.php]

## texto_excluir [DELETE]

Exclui um texto.

status    | code | message
---       | ---  | ---
`success` |  0   | Texto excluído com sucesso
`fail`    |  -1  | O texto não existe

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + TEXTO_ID: `15` (optional, string) - Id da frase.
    + Idioma: `pt`(required, string) - Idioma.

+ Request texto_excluir
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "TEXTO_ID": "15",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "texto excluído com sucesso",
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