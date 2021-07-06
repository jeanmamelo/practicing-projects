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

## A cascata (cascading)

A escolha do browser de qual regra aplicar, caso haja muitas regras para o mesmo elemento.

* Seu estilo é lido de cima para baixo.

São levados em consideração 3 fatores:

1. Origem do estilo
2. Especificidade
3. Importância

### Origem do estilo

inline > tag style > tag link

### Especificidade

É um cálculo matemático, onde, cada tipo de seletor e origem do estilo, possuem valores a serem considerados.

0. Universal selector, combinators e negation pseudo-class (:not())
1. Element type selector e pseudo-elements (::before, ::after)
10. Classes e attribute selectors ([type="radio"])
100. ID selector
1000. Inline

### A regra !important

* cuidado, evite o uso
* não é considerado uma boa prática
* quebra o fluxo natural da cascata

## At-rules

* está relacionado ao comportamento do CSS
* começa com o sinal de `@` seguido do identificador e valor

### Exemplos comuns

- @import       /* incluir um CSS externo */
- @media        /* regras condicionais para dispositivos */
- @font-face    /* fontes externas */
- @keyframes    /* animation */

```css
@import url("http://local.com/style.css");

@media (min-width: 500px) {
    /* rules here */
}

@font-face {
    /* rules here */
}

@keyframes nameofanimation {
    /* rules here */
}
```

## Shorthand

* junção de propriedades
* resumido
* legível

```css
{
    /* background properties */
    background-color: #000;
    background-image: url(images/bg.gif);
    background-repeat: no-repeat;
    background-position: left top;

    /* background shorthand */
    background: #000 url(images/bg.gif) no-repeat left top;

    /* font properties */
    font-style: italic;
    font-weight: bold;
    font-size: .8em;
    line-height: 1.2;
    font-family: Arial, sans-serif;

    /* font shorthand */
    font: bold italic .8em/1.2 Arial, sans-serif;
}
```

### Detalhes

* não irá considerar propriedades anteriores
* valores não especificados irão assumir o valor padrão
* geralmente, a ordem descrita não importa, mas, se houverem muitas propriedades com valores semelhantes, poderemos encontrar problemas

### Propriedades que aceitam shorthand

animation, background, border, border-bottom, border-color, border-left, border-radius, border-right, border-style, border-top, border-width, column-rule, columns, flex, flex-flow, font, grid, grid-area, grid-column, grid-row, grid-template, list-style, margin, offset, outline, overflow, padding, place-content, place-items, place-self, text-decoration, transition

**https://developer.mozilla.org/en-US/docs/Web/CSS/Shorthand_properties**

## Funções

* nome seguido de abre e fecha parentesis
* recebe argumentos

### Exemplos

```css
@import url("http://urlaqui.com/style.css");

{
    color: rgb(255, 0, 100);
    width: calc(100% - 10px);
}
```

## Vendor Prefixes

Permite que browsers adicionem `features`
a fim de colocar em uso alguma novidade que vemos no CSS

### Exemplo

```css
p {
    -webkit-background-clip: text;      /* Chrome, Safari, iOS e Android */
    -moz-background-clip: text;         /* Mozilla (Firefox) */
    -ms-background-clip: text;          /* Internet Explorer */
    -o-background-clip: text;           /* Opera */
}
```

### Consultas

[http://ireade.github.io/which-vendor-prefix/]
[http://caniuse.com]