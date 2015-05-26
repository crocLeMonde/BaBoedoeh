Kouskous
========

Kitpages's light template for http://couscous.io

Based on [Template Light](https://github.com/CouscousPHP/Template-Light)

Screenshot
----------

![](/screenshot.png)

Usage
-----

```yaml
template:
    url: https://github.com/kitpages/kouskous
```

Configuration
-------------

Here are all the variables you can set in your `couscous.yml`:

```yml
# Base URL of the published website
baseUrl: http://username.github.io/project

# Title of the project
title: My project

# The left menu bar
menu:
    items:
        home:
            text: Kouskous
            menu:
                kitpages:
                    text: by Kitpages
                    absoluteUrl: http://www.kitpages.fr/
        menu1:
            text: Menu 1
            menu:
                item1:
                    text: <i class="glyphicon glyphicon-chevron-right"></i> Item 1
                    absoluteUrl: http://www.kitpages.fr/
                item2:
                    text: <i class="glyphicon glyphicon-link"></i> Item 2
                    absoluteUrl: http://www.kitpages.fr/
                item3:
                    text: Item 3
                    absoluteUrl: http://www.kitpages.fr/
```


Features
--------

* Minimal [twbs3](http://getbootstrap.com/) theme.
* Syntax Highlighting with [prism](http://prismjs.com/).
* Custom alert box with ✔, ✖ & ~
* Draw flowcharts with [flowcharts.js](http://adrai.github.io/flowchart.js).
* Draw sequence diagrams with [js-sequence-diagrams](http://bramp.github.io/js-sequence-diagrams/).
* Update page title from first `h1`.
* Auto-active menu items.

Demo
----

### Syntax highlighting

```php
abstract class Bidule
{
    public function truc(Machin $chose)
    {
        array_unique($chose);
    }
}
```

### Custom alert box

✔ Success box

✖ Error box

~ Warning box

### Flowcharts

```flowchart
st=>start: Start:>http://www.google.com[blank]
e=>end:>http://www.google.com
op1=>operation: My Operation
sub1=>subroutine: My Subroutine
cond=>condition: Yes
or No?:>http://www.google.com
io=>inputoutput: catch something...

st->op1->cond
cond(yes)->io->e
cond(no)->sub1(right)->op1
```

### Sequence diagrams

```sequence
Andrew->China: Says Hello
Note right of China: China thinks\nabout it
China-->Andrew: How are you?
Andrew->>China: I am good thanks!
```

License
-------

MIT
