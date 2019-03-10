window.addEventListener('load', function(event) {
  /*var ps = document.querySelector('.ps');
  ps.style.width = '80%';*/
  setWidth('.ps','80%');
  setWidth('.html','70%');
  setWidth('.css','70%');
  setWidth('.js','30%');
  setWidth('.xd','90%');
  setWidth('.ai','60%');
  setWidth('.id','70%');
});

function setWidth(nom, width) {
  var element = document.querySelector(nom);
  if (element != null) {
    element.style.width = width;
  }
}
