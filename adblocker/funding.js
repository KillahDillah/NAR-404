// var $el = document.getElementById( 'NAR' )
//   , str = ""
//   , imgHTML = $el.innerHTML
//   , i, i2;
// for( i=0,i2=10; i<i2; i++ ){
//     str += imgHTML;
// }
// $el.innerHTML = str;


function appendPhotosToParagraph(paragraph_id, how_many_times):
    var paragraph = document.getElementById(NAR);
    for (var i = 0; i < 25; i++) {
        paragraph.innerHTML += "<img src=./nan_flat_naf_masthead.png";
    }