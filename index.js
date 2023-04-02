let jsContent = document.querySelector('.js-content');
let jsImgCoffeeCup = document.querySelector('.js-img-coffee-cup');
// Анимация parallax
document.onmousemove = (e)=> {
	let x = e.clientX / window.innerWidth;
	let y = e.clientY / window.innerHeight;

    jsImgCoffeeCup.style.transform = "translate(-" + x * 50 + "px, -" + y * 50 + "px)";
	jsContent.style.transform = "translate(-" + x * 50 + "px, -" + y * 50 + "px)";
};

function handleClick() {
	let inputText = document.getElementById("input-field").value;
	alert("Вы ввели: " + inputText);
}