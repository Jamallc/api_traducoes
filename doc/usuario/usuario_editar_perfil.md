## usuario_editar_perfil [/usuarios/usuario_editar_perfil.php]

## usuario_editar_perfil [PUT]

Edita o perfil do usuário.

status    | code | message
---       | ---  | ---
`fail`    | -1   | email já cadastrado por outro usuário
`success` |  0   | perfil salvo com sucesso

+ Parameters
    + USUARIO_ID: `123` (required, string) - ID.
    + USUARIO_EMAIL: `outroemail@email.com` (optional, string) - EMAIL.
    + USUARIO_NOME: `Jobs Silva` (optional, string) - NOME.
    + USUARIO_SENHA: `1234asdqwe` (optional, string) - SENHA.
    + Idioma: `pt`(required, string) - Idioma.

+ Request usuario_editar_perfil
    {
        "USUARIO_ID": "123",
        "USUARIO_EMAIL": "outroemail@email.com",
        "USUARIO_NOME": "Jobs Silva",
        "USUARIO_SENHA": "1234asdqwe",
        "Idioma": "pt",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "perfil salvo com sucesso",
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