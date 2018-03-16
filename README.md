# Calculadora de festas

![Home](../img/Home.png?raw=true)
![Home-Error](../img/Home-Error.png?raw=true)
![Results](../img/Results.png?raw=true)

Calculadora de festas é um projeto que tem como objetivo calcular o que deve ser comprado para uma festa de acordo com a quantidade de convidados adultos e crianças.
Os inputs são:

  - Quantidade de convidados adultos
  - Quantidade de convidados crianças
  - Se haverá bebida alcoólica ou não

## As regras:

  - Para cada 10 convidados adultos deve ser adicionado 100 salgados
  - Para cada 2 convidados crianças deve ser adicionado 10 salgados
  - Para cada 4 convidados crianças deve ser adicionado 5 doces
  - Para cada 6 convidados geral deve ser adicionado 1kg de carne
  - Para cada 4 convidados geral deve ser adicionado 2 litros de refrigerante
  - Se for ter bebida
    - Para cada 3  convidados adultos deve ser adicionado 12 latas de cerveja
    - Para cada 30 convidados adultos deve ser adicionado 1 litro de whisky
    - Para cada 1 convidado crianças deve ser subtraído 2 latas de cerveja

## Requisitos técnicos
 - Utilizar PHP
 - Usar um framework é opcional
 - Não deve ter banco de dados
 
## Pontos Bônus
 - Utilização de Vue, Angular ou React

## Instalação

Esse projeto utiliza o framework Laravel, você pode achar as instruções de instalação aqui.

Para executar o projeto apenas rode o seguinte comando:

```sh
php artisan serve
```

For production environments...

```sh
$ npm install --production
$ NODE_ENV=production node app
```

### Plugins

Dillinger is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| Plugin | Descrição |
| ------ | ------ |
| [emojione](https://github.com/christofferok/laravel-emojione/?utm_source=learninglaravel.net) | plugin de emojis |


### Todos

 - Escrever testes
 - Adicionar funcionalidade de "precisão" para calculos com números decimais
 - Adicionar vue.js
