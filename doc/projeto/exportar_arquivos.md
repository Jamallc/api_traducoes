## exportar_arquivo [/projeto/exportar_arquivo.php]

## exportar_arquivo [POST]

Exporta todas as frases cadastradas no projeto.

status    | code | message
---       | ---  | ---
`success` |  0   | arquivos exportados com sucesso

+ Parameters 
    + TOKEN: `ASDDF1234JKDFL=` (required, string) - Token.
    + PROJETO_ID: `20` (required, string) - Id do projeto.

+ Request exportar_arquivo
    {
        "TOKEN": "ASDDF1234JKDFL=",
        "PROJETO_ID": "20",
    }

+ Response 200
    {
        "status": "success",
        "code": 0,
        "message": "arquivos exportados com sucesso",
    }
    arquivo 1: texts.js =>
        texts = [
            {
                pt: {
                    assinar_pacote: "Assinar pacote",
                },
                en: {
                    assinar_pacote: "Sign package",
                },
                es: {
                    assinar_pacote: "Firmar paquete",
                }
            },
        
            {
                pt: {
                    assinatura_nao_encontrada: "Assinatura não encontrada",
                },
                en: {
                    assinatura_nao_encontrada: "Signature not found",
                },
                es: {
                    assinatura_nao_encontrada: "Firma no encontrada",
                }
            }
        ]
    
    arquivo 2: txt.interface.ts => 
        export interface TextsProps {
            assinar_pacote: string;
            assinatura_nao_encontrada: string;
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