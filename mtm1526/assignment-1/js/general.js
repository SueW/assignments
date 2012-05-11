var letter = '';

while (!letter) {
	letter = prompt ('Type your favourite letter');
}
// console.log() is for debugging; to see inside variables

console.log(letter);


if (letter){
	for (var i = 0; i < 10; i++) {

document.write(letter + '<br>');

	}
}