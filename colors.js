var Body = {
  SetColor: function(color){
  document.querySelector('body').style.color = color;
  },
  SetBgColor: function(color){
  document.querySelector('body').style.backgroundColor = color;
  }
};

var Links = {
  SetColor: function(color){
  var links = document.querySelectorAll('a');
  var i = 0;
  while (i<links.length){
    links[i].style.color = color;
    i = i+1;
  }
  }
}
function nightDayHandler(self){
  var target = document.querySelector('body')
  if (self.value === 'night'){
    Body.SetBgColor('black');
    Body.SetColor('white');
    self.value='day';
    Links.SetColor('powderblue');
  }
  else{
    Body.SetBgColor('white');
    Body.SetColor('black');
    self.value='night';
    Links.SetColor('blue');
  }
}
    