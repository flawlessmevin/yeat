/*ACCORDEON*/
var acc = document.getElementsByClassName('accordion')
var i

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener('click', function () {
		this.classList.toggle('active')
		var panel = this.nextElementSibling
		if (panel.style.maxHeight) {
			panel.style.maxHeight = null
		} else {
			panel.style.maxHeight = panel.scrollHeight + 'px'
		}
	})
}

/*ACCORDEON END*/

/*SLIDER */
var idx = 0
var slides = document.getElementsByClassName('slide')

function show(n) {
	slides[idx].style.display = 'none'
	idx = (n + slides.length) % slides.length
	slides[idx].style.display = 'block'
}

function nextSlide() {
	show(idx + 1)
}

function prevSlide() {
	show(idx - 1)
}

function startAutoSlide() {
	setInterval(nextSlide, 3000) // Автоматическое переключение каждые 3 секунды
}

document.getElementById('prev').addEventListener('click', prevSlide)
document.getElementById('next').addEventListener('click', nextSlide)

show(idx)
startAutoSlide()
/*SLIDER END*/

/*FORMULAR with alert*/
function validateForm() {
	var email = document.getElementById('email').value
	var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

	if (!emailRegex.test(email)) {
		alert('Please enter a valid email address.')
		return false
	}

	return true
}
