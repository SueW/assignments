var letter = '';

while (!letter) {
	letter = prompt ('Type your favourite letter');
}
// console.log() is for debugging; to see inside variables

console.log(letter);

/*
if (name == ''|| name == null)
if (name != '' && name != null)
if (name)
if (!name)
*/


if (letter){
	for (var i = 0; i < 10; i++) {
//writes some text or HTML into the <body>
//need a space after Hello (inside quote) to provide a space between 
//hello and name
document.write(letter + '<p>');

	}
}