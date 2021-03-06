# O guia estelar de JavaScript

## JavaScript Core

* linguagem de programação que roda no navegador do usuário (front-end)
    * se você clicar em algum botão da página e aparecer uma janela. Isso é javascript
    * alteração do site ou aplicativo, conforme a interação do usuário

* roda também no computador (back-end)

### O que podemos fazer?

* podemos criar aplicações web ([React](https://reactjs.org/)), mobile ([React Native](https://reactnative.dev/)), desktop ([Electron](https://www.electronjs.org/))
* empresas famosas que usam:
    * [Facebook](https://developers.facebook.com/) ([Instagram](https://developers.facebook.com/products/instagram/), [Whatsapp](https://developers.facebook.com/docs/whatsapp/))
    * [Google](https://developers.google.com/) ([Youtube](https://developers.google.com/youtube), [Gmail](https://developers.google.com/gmail), [Drive](https://developers.google.com/drive))
    * [Uber](https://developer.uber.com/)
    * [Netflix](https://github.com/netflix)
    * [Tiktok](https://developers.tiktok.com/)
    * ...

* 99.99% dos sites na web usam JavaScript
* linguagem obrigatória para quem programa o front-end web

### Evolução

* a comunidade cresce cada vez mais e a linguagem está sempre evoluindo

### O que vamos ver no curso?

- tipos de dados
- variáveis
- funções
- condicionais
- estruturas de repetição
- ...

### Como vai funcionar a dinâmica do curso?

- treino de futebol
    * conceitos e fundamentos
    * prática
    * revisão
- treino de artes marciais
    * conceitos e fundamentos
    * prática
    * revisão

## A importância da Sintaxe

* toda linguagem tem
* uma boa comunicação necessita de uma boa sintaxe
* cerca de 82% dos erros para iniciantes em programação são relacionados a sintaxe

```js
    console.log("Bem vindos ao Starter")
```

## Tipos de dados

* gramática
    * elementos da linguagem e suas combinações
    * a arte de falar e escrever corretamente

* vocabulário
    * conjunto de termos e expressões
    * agrupamento de palavras

* precisamos saber como escrever
* precisamos saber os significados
* precisamos continuar aprendendo, para crescer nosso vocabulário

### Como será a dinâmica do aprendizado?

* vamos aprender os tipos de dados mais utilizados na linguagem
    > você sabia que é possível aprender 80% de uma lingua nova, com cerca de 20% do vocabulário? (até menos)

## String

* cadeia de caracteres. Ex.: ABC

```js
    "" // aspas duplas
    console.log("Jean")

    '' // aspas simples
    console.log('Jean')

    `` // template literals ou template strings -> permite interpolação e multi linhas
    console.log(`Jean ${1+1}`)
```

## Number

* números

```js
    33 // inteiros
    console.log(33)

    12.5 // reais
    console.log(12.5)

    NaN // Not a Number
    console.log(12.5 / "asdf")

    Infinity // infinito
    console.log(Infinity)
    console.log(12/0)
```

## Boolean

* somente 2 valores

```js
    true // verdadeiro
    console.log(true)
    console.log(0==0)

    false // falso
    console.log(false)
    console.log(0==1)
```

## Undefined vs null

* undefined
    * indefinido

* null
    * nulo
    * objeto que não possui nada dentro
    * diferente de indefinido

```js
    undefined // indefinido
    console.log(undefined)

    null // nulo
    console.log(null)
```

## Object

* objeto
* propriedades / atributos
* funcionalidades / métodos

```js
{ propriedade: "valor" }

console.log({
    name: "Jean",
    idade: 25,
    andar: function() {
        console.log('andando')
    }
})
```

## Array (vetores)

* uma lista
* agrupamento de dados

```js
["Jean", 25]

console.log(["Jean", 25])

console.log([
    "Leite",
    2,
    "Ovo",
    3
])
```

## Conclusão

Conforme o ECMAScript standard temos 9 tipos de dados:

* data types
    * primitive / primitive value
    * structural
    * structural primitive

### Primitivos

* string
* number
* boolean
* undefined
* symbol
* bigInt

### Estruturais

* object
    * array
    * map
    * set
    * date
    * ...
* function

### Primitivo estrutural / structure root primitive

* null

## Variáveis

* nomes simbólicos para receber algum valor
* atalhos de código
* identificadores
* 3 palavras reservadas para criar uma variável
    * var
    * let
    * const

```js
// var
var clima1 = "quente";
clima1 = "frio";
console.log(clima1);

// let
let clima2 = "quente";
clima2 = "frio";
console.log(clima2);

// const
const clima3 = "quente";
clima3 = "frio"; // irá gerar um erro "assignment to constant variable"
console.log(clima3);
```

### Tipos dinâmicos

O JS é uma linguagem fracamente tipada e dinâmica

- variáveis não precisam ter um tipo previamente definido
- podemos mudar o conteúdo da variável

## Scope

* escopo determina a visibilidade de alguma variável no JS

### Block statement

```js
// vamos iniciar um bloco
{
    // aqui dentro é um bloco e posso colocar qualquer código
} // aqui fechamos o bloco
```

O bloco, também criará um novo escopo. Chamamos de `block-scoped`.

### var

A variável var é elevada para o escopo global, isso também é conhecido como hoisting

```js
// var é global e poderá funcionar fora de um escopo de bloco
console.log('> existe x antes do bloco? ', x)

{
    var x = 0
}

console.log('> existe x depois do bloco? ', x)
```

### let e const
```js
// let e const são locais e só funcionam no escopo onde foram criadas
console.log('> existe y antes do bloco? ', y)
console.log('> existe z antes do bloco? ', z)


{
    let y = 0
    let z = 0
}

console.log('> existe y depois do bloco? ', y)
console.log('> existe z depois do bloco? ', z)
```

## Variáveis

* JS é case-sensitive (sensível ao caso)
* JS aceita a cadeia de caracteres Unicode

- Posso:
    * iniciar com esses caracteres especiais: $ _
    * iniciar com letras
    * colocar acentos
    * letras maiúsculas e minúsculas fazem diferença (case sensitive)

- Não posso:
    * iniciar com números
    * colocar espaços vazios no nome

- Ideal:
    * criar nomes que fazem sentido
    * que explique o que a variável é ou faz
    * comelCase
    * snake_case
    * escrever em inglês