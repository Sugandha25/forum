var quotes=[
'Hard work is the key to success','journey of a thousand miles begins with a single step','whatever happens happens for the good','Empty vessels make the most noise','Actions speaks louder than words','Be your own kind of beautiful'
]
function newquote(){
  var randomnumber = Math.floor(Math.random() * (quotes.length));
  document.getElementById('quotedisplay').innerHTML=quotes[randomnumber];
}