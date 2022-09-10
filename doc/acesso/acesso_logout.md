## acesso_logout [/acesso/acesso_logout.php]

## acesso_logout [POST]

Perde o acesso ao aplicativo interno e seu Token.

status    | code | message
---       | ---  | ---
`success` |  0   | logout concluído

+ Parameters
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.

+ Request acesso_login
    {
        "TOKEN": "ASDDF1234JKDFL="
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "logout concluído",
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