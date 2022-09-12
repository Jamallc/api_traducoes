## acesso_recuperar_senha [/acesso/acesso_recuperar_senha.php]

## acesso_recuperar_senha [POST]

Envia para o email da pessoa uma recuperação de senha. O envio do token para o endpoint, acontece junto com a senha. Assim que a pessoa clica no link, ele abrirá um local de recuperação e o TOKEN irá como parâmetro na URL, esse token deve ser passado como parâmetro junto com a nova senha, para o endPoint.

status    | code | message
---       | ---  | ---
`success` |  0   | se o email estiver cadastrado, foi enviado um link de recuperação
`success` |  1   | senha atualizada com sucesso

+ Parameters
    + USUARIO_EMAIL: `teste@email.com` (required, string) - Email.
    + USUARIO_SENHA: `senha123` (optional, string) - Nova senha, caso ele clique no link do email.
    + TOKEN: `ASDDF1234JKDFL=` (optional, string) - Token, caso ele clique no link do email, este virá com um token.
    + Idioma: `pt`(required, string) - Idioma.

+ Request acesso_recuperar_senha
    {
        "USUARIO_EMAIL": "teste@email.com",
        "USUARIO_SENHA": "senha123",
        "TOKEN": "ASDDF1234JKDFL=",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "se o email estiver cadastrado, foi enviado um link de recuperação",
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