/**
 * Created by Przemek on 2016-11-03.
 */


function Galeria(name, zdjecia) {


    var table = document.createElement('table');
    table.className = 'gallerytable';
    table.name = name;
    var counter = 0;
    var title = document.createElement('caption');
    title.textContent = "Galeria Zdjęć";
    table.appendChild(title);
    for (var i = 0; i < zdjecia.length; i++) {
        var tr = document.createElement(('tr'));
        for (var j = 0; j < 3; j++) {
            if (counter < zdjecia.length) {
                var td = document.createElement('td');
                var img = document.createElement('img');
                img.src = zdjecia[counter][0];
                td.appendChild(img);
                tr.appendChild(td);
                img.addEventListener('click', otworzOkno);
                counter++;
            }
        }
        table.appendChild(tr);
    }


    var divtresc = document.getElementById('tresc');
    divtresc.appendChild(table);
}

function otworzOkno() {

    var okno = window.open("", "okienko", "toolbar=no, menubar=no, location=no, personalbar=no, status=no, resizable=yes, scrollbars=yes, copyhistory=yes, width=500, height=500, top=0, left=0");
    okno.document.close();
    okno.document.write(wypelnijOkno(this.src));
    okno.document.close();
    okno.focus();

}

function wypelnijOkno(imagesource) {

    return '<head> <script type="text/javascript">function dopasuj() { window.resizeTo(' + screen.availWidth + ', ' + screen.availHeight + '); }</script></head>' +
        '<body  onload=dopasuj();><img src=' + imagesource + '><img/></body>'

}

Galeria("galeria",
    new Array(
        new Array('gallery/1.jpg', 'Zdjęcie1'),
        new Array('gallery/2.jpg', 'Zdjęcie2'),
        new Array('gallery/3.jpg', 'Zdjęcie3'),
        new Array('gallery/4.jpg', 'Zdjęcie4'),
        new Array('gallery/5.jpg', 'Zdjęcie5'),
        new Array('gallery/6.jpg', 'Zdjęcie6'),
        new Array('gallery/7.jpg', 'Zdjęcie7'),
        new Array('gallery/8.jpg', 'Zdjęcie8')
    ));