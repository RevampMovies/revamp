var titles = document.getElementsByClassName('title');
var covers = document.getElementsByClassName('cover');
var years = document.getElementsByClassName('year');




for (var i = 0; i < titles.length; i++) {
   console.log(",,,\""+titles[i+1].innerText+"\",\""+
   window.getComputedStyle(covers[i]).backgroundImage.replace('url(','').replace(')','')+
   "\",\""+years[i].innerText+"-00-00\",,\"http://\"");
}

