
## Documentação da API

### Baseurl

- https://testefullstack-503b88afa9cf.herokuapp.com/

#### Retorna os estados do Brasil

```http
  GET /states
```

#### Exemplo de retorno
```
    [
	{
		"id": 11,
		"sigla": "RO",
		"nome": "Rondônia",
		"regiao": {
			"id": 1,
			"sigla": "N",
			"nome": "Norte"
		}
	},
	{
		"id": 12,
		"sigla": "AC",
		"nome": "Acre",
		"regiao": {
			"id": 1,
			"sigla": "N",
			"nome": "Norte"
		}
	},
	{
		"id": 13,
		"sigla": "AM",
		"nome": "Amazonas",
		"regiao": {
			"id": 1,
			"sigla": "N",
			"nome": "Norte"
		}
	},
    ]
```


#### Retorna as cidades de um estado

```http
  GET /cities/${estado}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `estado`      | `int` | **Obrigatório**. id do estado retornado na rota anterior |

#### Exemplo de retorno
```
	[
	    {
		"id": 1100015,
		"nome": "Alta Floresta D'Oeste",
		"microrregiao": {
			"id": 11006,
			"nome": "Cacoal",
			"mesorregiao": {
				"id": 1102,
				"nome": "Leste Rondoniense",
				"UF": {
					"id": 11,
					"sigla": "RO",
					"nome": "Rondônia",
					"regiao": {
						"id": 1,
						"sigla": "N",
						"nome": "Norte"
					}
				}
			}
		},
		"regiao-imediata": {
			"id": 110005,
			"nome": "Cacoal",
			"regiao-intermediaria": {
				"id": 1102,
				"nome": "Ji-Paraná",
				"UF": {
					"id": 11,
					"sigla": "RO",
					"nome": "Rondônia",
					"regiao": {
						"id": 1,
						"sigla": "N",
						"nome": "Norte"
					}
				}
			}
		}
	},
	{
		"id": 1100023,
		"nome": "Ariquemes",
		"microrregiao": {
			"id": 11003,
			"nome": "Ariquemes",
			"mesorregiao": {
				"id": 1102,
				"nome": "Leste Rondoniense",
				"UF": {
					"id": 11,
					"sigla": "RO",
					"nome": "Rondônia",
					"regiao": {
						"id": 1,
						"sigla": "N",
						"nome": "Norte"
					}
				}
			}
		},
    ]
```

#### Retorna o clima de uma cidade especifica

```http
  GET /weather?city=${cidade}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `cidade`      | `string` | **Obrigatório**. nome da cidade onde se busca o clima |

#### Exemplo de retorno
```
	[
	    {
        "coord": {
            "lon": -48.5496,
            "lat": -27.5973
            },
        "weather": [
            {
                "id": 801,
                "main": "Clouds",
                "description": "algumas nuvens",
                "icon": "02d"
            }
        ],
        "base": "stations",
        "main": {
            "temp": 29.33,
            "feels_like": 36.33,
            "temp_min": 28.62,
            "temp_max": 33.29,
            "pressure": 1007,
            "humidity": 89
            },
        "visibility": 10000,
        "wind": {
            "speed": 5.14,
            "deg": 110
            },
        "clouds": {
            "all": 20
            },
        "dt": 1705681861,
        "sys": {
            "type": 1,
            "id": 8360,
            "country": "BR",
            "sunrise": 1705653335,
            "sunset": 1705702412
            },
        "timezone": -10800,
        "id": 3463237,
        "name": "Florianópolis",
        "cod": 200
        }
    ]
```

#### Retorna o clima do local da requisição

```http
  GET /ip/weather
```
#### Observação:
    Api verifica se o sistema esta em produção ou em desenvolvimento. 
    Em desenvolvimento utiliza API externa para pegar o IP do servidor pois tanto o front quanto o back estão em localhost.
    Em produção Pega IP recebido da requisição do front.


#### Exemplo de retorno
```
	[
	    {
        "coord": {
            "lon": -48.5496,
            "lat": -27.5973
            },
        "weather": [
            {
                "id": 801,
                "main": "Clouds",
                "description": "algumas nuvens",
                "icon": "02d"
            }
        ],
        "base": "stations",
        "main": {
            "temp": 29.33,
            "feels_like": 36.33,
            "temp_min": 28.62,
            "temp_max": 33.29,
            "pressure": 1007,
            "humidity": 89
            },
        "visibility": 10000,
        "wind": {
            "speed": 5.14,
            "deg": 110
            },
        "clouds": {
            "all": 20
            },
        "dt": 1705681861,
        "sys": {
            "type": 1,
            "id": 8360,
            "country": "BR",
            "sunrise": 1705653335,
            "sunset": 1705702412
            },
        "timezone": -10800,
        "id": 3463237,
        "name": "Florianópolis",
        "cod": 200
        }
    ]
```

