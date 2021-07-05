# O guia estelar de CSS

## Introdução

### O que significa CSS?

* Cascading Style Sheet;
* Código para criar estilos no HTML;
* HTML é a estrutura, e o CSS é a beleza;
* Não é uma linguagem de programação;
* É uma linguagem style sheet.

## Comentários

* Não irá afetar o seu código
* Ajuda a lembrar blocos de códigos
* Deixa dicas para leitura
* Ajuda outros a entenderem
* Nunca esqueça de fechar um comentário aberto

Comentários começam com `/*` e terminam com `*/`.

```css

/* Básico */
/* -------------------------------- */
body {
    font: 1em/150% Helvetica, Arial, sans-serif;
    padding: 1em;
    margin: 0 auto;
    max-width: 33em;
}

@media (min-width: 70em) {
    /* Let's special case the global font size. On large screen or window, we increase the font size for better readability */
    body {
        font-size: 130%;
    }
}

h1 {
    font-size: 1.5em;
}

/* Elementos específicos */
/* -------------------------------- */
div p, #id:first-line {
    background-color: red;
    border-radius: 3px;
}

div p {
    margin: 0;
    padding: 1em;
}

div p + p {
    padding-top: 0;
}
```

* Você poderá usar para desabilitar partes do seu código

```css

/*
.special {
    color: red;
}
*/

p {
    color: blue;
}
```

## Anatomia

```css
h1 {
    color: whitesmoke;
    font-size: 60px;
    background: gray;
}
```

* Selector
* Declaration
* Properties
* Property Value

### Selectors

Conecta um elemento HTML com o CSS

#### Tipos

* Global selector `*`
* Element/Type selector `h1, h2, p, div`
* ID Selector `#box, #container`
* Class Selector `.red, .m-4`
* Attribute selector, Pseudo-class, Pseudo-element, e outros

## Caixas

* Você irá perceber que (quase) tudo são caixas do CSS
* Posicionamentos, tamanhos, espaçamentos, bordas, cores
* Caixa pode ficar ao lado uma da outra, ou acima
* Elementos HTML são caixas

## Adicionando CSS

### inline

* atributo `style`

### <style>

* tag html que irá conter o css

### <link>

* arquivo css externo

### @import

* arquivo css externo