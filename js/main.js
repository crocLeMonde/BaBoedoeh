document.addEventListener('DOMContentLoaded', function(){

    // Update document title
    if (document.getElementsByTagName('h1').length > 0)
    {
        document.title = document.getElementsByTagName('h1')[0].innerHTML + ' | ' + document.title;
    }

    // Activate current menu
    var currentUri = document.location.pathname;

    Array.prototype.forEach.call(document.querySelectorAll("#sidebar li"), function (el, i) {
        var linkHref = el.querySelectorAll('a')[0].getAttribute('href');
        if (linkHref == currentUri) {
            el.className += ' active';
        }
    });

    // Magic tagging of <p>s
    Array.prototype.forEach.call(document.querySelectorAll("p"), function(el, i) {
        if (el.innerHTML == '') {
            return;
        }

        var marker = el.innerHTML.slice(0, 1);

        if (marker === '✔') {
            el.className += 'alert alert-success';
        } else if (marker === '✖') {
            el.className += 'alert alert-danger';
        } else if (marker === '~') {
            el.className += 'alert alert-warning';
        }
    });

    // Draw flowcharts
    Array.prototype.forEach.call(document.querySelectorAll("code.language-flowchart"), function(el, i) {
        var graph = flowchart.parse(el.childNodes[0].nodeValue),
            target = document.createElement('div');

        el.parentNode.replaceChild(target, el)
        graph.drawSVG(target);
    });

    // Draw sequences
    Array.prototype.forEach.call(document.querySelectorAll("code.language-sequence"), function(el, i) {
        var graph = Diagram.parse(el.childNodes[0].nodeValue),
            target = document.createElement('div');

        el.parentNode.replaceChild(target, el)
        graph.drawSVG(target, {theme: 'simple'});
    });

});
