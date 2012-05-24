var list = document.getElementById('ul');

var newItem = function (ev) {
	
	list = document.createElement('li');
	
	document.getElementById('to-do').appendChild(list);
	
	list.innerHTML=document.getElementById('item').value;
	
};
	