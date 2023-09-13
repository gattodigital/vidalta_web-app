/* --------------------------
JS code for library functions
-------------------------- */

/* LIGHTBOX GALLERIES */
function openLightbox(imgElement) {
	var images = document.querySelectorAll('.thumbnail-gallery img');
	var imgSrc = imgElement.getAttribute('src');
	document.getElementById('lightbox-img').src = imgSrc;
	document.getElementById('lightbox').style.display = 'block';

	// Find index of clicked image
	let imgIndex = Array.from(images).indexOf(imgElement) + 1;
	currentSlide(imgIndex);
}

function closeLightbox() {
	document.getElementById('lightbox').style.display = 'none';
}

var slideIndex = 1; // Set slide index to 1 as default

function currentSlide(n) {
	slideIndex = n;
	showSlides(slideIndex);
}

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function showSlides(n) {
	var images = document.querySelectorAll('.thumbnail-gallery img');
	if (n > images.length) {
		slideIndex = 1
	}
	if (n < 1) {
		slideIndex = images.length
	}

	var lightboxImg = document.getElementById('lightbox-img');

	lightboxImg.style.opacity = 0; // Fade out the current image
	setTimeout(function () {
		lightboxImg.src = images[slideIndex - 1].getAttribute('src');
		lightboxImg.style.opacity = 1; // Fade in the new image
	}, 100); // 250ms delay gives enough time for the fade out before the new image loads
}

// Add keyboard navigation
document.addEventListener('keydown', function (e) {
	if (e.key === "Escape") {
		closeLightbox();
	} else if (e.key === "ArrowRight") {
		plusSlides(1);
	} else if (e.key === "ArrowLeft") {
		plusSlides(-1);
	}
});

// Add mobile touch swipe
document.addEventListener('touchstart', function (e) {
	startX = e.changedTouches[0].clientX;
});

document.addEventListener('touchend', function (e) {
	endX = e.changedTouches[0].clientX;
	handleSwipe();
});

function handleSwipe() {
	if (endX < startX) {
		plusSlides(1); // Swipe left
	} else if (endX > startX) {
		plusSlides(-1); // Swipe right
	}
}

/* TRUNCATE CONTENT */
function smartTruncate(selector) {
	const elements = document.querySelectorAll(selector);

	elements.forEach(element => {
			const lineHeight = parseFloat(getComputedStyle(element).lineHeight);
			element.style.setProperty('--line-height', `${lineHeight}px`);

			const specifiedMaxHeight = parseFloat(getComputedStyle(element).maxHeight);

			// Check if content exceeds the specified max-height.
			if (element.scrollHeight > specifiedMaxHeight) {
					// Create a "Read More" button
					const truncateExpand = document.createElement('span');
					truncateExpand.innerText = 'Read More';
					truncateExpand.classList.add('smart-truncate_expand');

					// Append the button inside the 'smart-truncate' element
					element.appendChild(truncateExpand);

					truncateExpand.addEventListener('click', function () {
							if (element.classList.contains('smart-truncate-expanded')) {
									element.classList.remove('smart-truncate-expanded');
									truncateExpand.innerText = 'Read More';
							} else {
									element.classList.add('smart-truncate-expanded');
									truncateExpand.innerText = 'Close';
							}
					});
			}
	});
}



