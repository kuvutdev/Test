# PHP

Crear una api a partir de los endpoints y requirimientos.
Se valorará el uso de symfony pero se puede usar el framework que quieras o ninguno.

## RESPONSES STATUS

- 200-level (Success) – server completed the request as expected
- 400-level (Client error) – client sent an invalid request
- 500-level (Server error) – server failed to fulfill a valid request due to an error with server

### MAQUINA DE CAMBIO

### ENDPOINT
POST /php/machine

params:
- machine_coins: array<coins> (required)
- client_coins: array<coins> (required)
- product_price: int (required) price in cents Ex: 1€ = 100

#### COIN TYPES 
- FIVE
- TEN
- TWENTY
- FIFTY
- ONEHUNDRED
- TWOHUNDRED

####TABLA DE CODIGOS DE ERRORES

| Code          | Status | Error                                          |
|---------------|:-------|------------------------------------------------|
| TSTERROR_0001 | 400    | Falta algun parametro obligatorio              |
| TSTERROR_0080 | 400    | Algún tipo de moneda introducido es incorrecto |
| TSTERROR_0090 | 400    | No hay cambio suficiente                       |
| TSTERROR_0100 | 400    | No has introducido suficiente dinero           |


## EXPLICACION FUNCIONAMIENTO

- En la entrada se pasaran 3 parametros: machine_coins, client_coins y product_price
- La salida debe retornar change_coins y machine_coins
- change_coins son las moneas que se devolveran de cambio
- machine_coins son las monedas que habrá en la maquina en ese momento

sample request
```bash
curl --location --request POST 'https://localhost/php/machine' \
--header 'Content-Type: application/json' \
--data-raw '{
    "machine_coins": {
        "FIVE": 2,
        "TEN": 10,
        "TWENTY": 10,
        "FIFTY": 10,
        "ONEHUNDRED": 10,
        "TWOHUNDRED": 10
    },
    "client_coins": {
        "TEN": 15,
        "TWENTY": 5,
        "FIFTY": 2,
        "ONEHUNDRED": 1
    },
    "product_price": 425
}'
```

sample response
```bash
{
    "change_coins": {
        "TWENTY": 1,
        "FIVE": 1
    },
    "machine_coins": {
        "FIVE": 1,
        "TEN": 25,
        "TWENTY": 14,
        "FIFTY": 12,
        "ONEHUNDRED": 11,
        "TWOHUNDRED": 10
    }
}
```

response error sample
```bash  
{
    "status": 400,
    "message": "No has introducido suficiente credito"
}
```
