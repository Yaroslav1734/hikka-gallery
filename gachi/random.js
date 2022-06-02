let fs = require('fs');
var jsonFile = File('gachi.json');
function randpng()
{
    var pngs = [
        '1.jpg',
        '2.jpg',
        '3.jpg',
        '4.jpg',
        '5.jpg',
        '6.jpg',
        '7.jpg'
    ];
    return pngs[Math.floor(Math.random() * pngs.length)];
}
jsonFile.writeln("{link: "hikka-gallery.tk/gachi/"" + randpng());
jsonFile.close();
