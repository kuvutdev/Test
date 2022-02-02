# PHP

Crear una api a partir de los endpoints y requirimientos.
Se valorará el uso de symfony pero se puede usar el framework que quieras o ninguno.

## RESPONSES STATUS

200-level (Success) – server completed the request as expected
400-level (Client error) – client sent an invalid request
500-level (Server error) – server failed to fulfill a valid request due to an error with server

## ENDPOINTS

### ARRAY DE NUMEROS

POST /php/numbers

params:
- numbers: array<numbers> (required)
- type: string (optional) (accepted EVEN or ODD) EVEN BY DEFAULT
- order: string (optional) (accepted ASC or DESC) ASC BY DEFAULT

request sample
```bash
curl --request POST 'https://test.api.kuvut.com/php/numbers' \
--header 'Content-Type: application/json' \
--data-raw '{
    "numbers": [12,43,5,678,0,-13,-100],
    "type": "EVEN",
    "order": "ASC"
}'
```

response sample
```cmd
[
    -100,
    0,
    6,
    8,
    12
]
```

response error sample
```bash  
{
    "status": 400,
    "message": "Hay elementos que no son numericos"
}
```

### ARRAY DE STRINGS

POST /php/strings

params:
- string: array<strings> (required)
- type: string (optional) (accepted UPPERCASE, LOWERCASE, CAPITALIZE)
- order: string (optional) (accepted ASC or DESC) ASC BY DEFAULT

sample request
```bash
curl --location --request POST 'https://test.api.kuvut.com/php/strings' \
--header 'Content-Type: application/json' \
--data-raw '{
    "strings": ["a","bbb","dasdas", "adsds"],
    "type": "UPPERCASE",
    "order": "ASC"
}'
```

sample response
```bash
[
    "A",
    "ADSDS",
    "BBB",
    "DASDAS"
]
```

response error sample
```bash  
{
    "status": 400,
    "message": "Hay elementos que no son strings"
}
```


### MAQUINA DE CAMBIO

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


sample request
```bash
curl --location --request POST 'https://test.api.kuvut.com/php/machine' \
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
