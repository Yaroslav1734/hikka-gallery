let jsonFile = require('jsonfile');
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
jsonFile.writeFile('gachi.json', 'hikka-gallery.tk/gachi/' + randpng())
