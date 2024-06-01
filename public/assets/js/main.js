// Home Review Swiper Start
var swiper = new Swiper(".slider-content", {
	slidesPerView: 3,
	spaceBetween: 25,
	loop: true,
	centerSlide: "true",
	fade: "true",
	grabCursor: "true",
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
		dynamicBullets: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		520: {
			slidesPerView: 2,
		},
		950: {
			slidesPerView: 3,
		},
	},
});

// Home Review Swiper End

// Modal Start
function continueWithGoogle() {
	window.location.href = "/auth/google";
}

// Modal End

// Toggle Password Visibility Start
function togglePasswordVisibility(inputId) {
	const input = document.getElementById(inputId);
	const toggleButton = input.nextElementSibling;
	const toggleIcon = toggleButton.querySelector("i");

	if (input.type === "password") {
		input.type = "text";
		toggleIcon.classList.remove("bi-eye-fill");
		toggleIcon.classList.add("bi-eye-slash-fill");
	} else {
		input.type = "password";
		toggleIcon.classList.remove("bi-eye-slash-fill");
		toggleIcon.classList.add("bi-eye-fill");
	}
}

// Toggle Password Visibility End

// Password Strength Meter Start
function checkPasswordStrength(inputId, meterId, textId) {
	const password = document.getElementById(inputId).value;
	const meter = document.getElementById(meterId);
	const text = document.getElementById(textId);

	let strength = 0;
	if (password.length >= 6) {
		strength += 25;
	}
	if (/[A-Z]/.test(password)) {
		strength += 25;
	}
	if (/[a-z]/.test(password)) {
		strength += 25;
	}
	if (/[0-9]/.test(password)) {
		strength += 25;
	}

	meter.style.width = strength + "%";
	meter.setAttribute("aria-valuenow", strength);

	if (strength < 50) {
		meter.classList.remove("bg-success", "bg-warning");
		meter.classList.add("bg-danger");
		text.textContent = "Weak Password";
	} else if (strength < 75) {
		meter.classList.remove("bg-success", "bg-danger");
		meter.classList.add("bg-warning");
		text.textContent = "Medium Password";
	} else {
		meter.classList.remove("bg-warning", "bg-danger");
		meter.classList.add("bg-success");
		text.textContent = "Strong Password";
	}
}

// Password Strength Meter End

// Password Match Check Start
document.addEventListener("DOMContentLoaded", function () {
	const newPasswordInput = document.getElementById("floatingNewPassword");
	const confirmPasswordInput = document.getElementById(
		"floatingConfirmPassword"
	);

	function checkPasswordMatch() {
		const newPassword = newPasswordInput.value;
		const confirmPassword = confirmPasswordInput.value;

		if (!newPassword || !confirmPassword) {
			newPasswordInput.classList.remove(
				"border-danger",
				"border-success"
			);
			confirmPasswordInput.classList.remove(
				"border-danger",
				"border-success"
			);
			return;
		}

		if (newPassword === confirmPassword) {
			newPasswordInput.classList.remove("border-danger");
			newPasswordInput.classList.add("border-success");
			confirmPasswordInput.classList.remove("border-danger");
			confirmPasswordInput.classList.add("border-success");
		} else {
			newPasswordInput.classList.remove("border-success");
			newPasswordInput.classList.add("border-danger");
			confirmPasswordInput.classList.remove("border-success");
			confirmPasswordInput.classList.add("border-danger");
		}
	}

	newPasswordInput.addEventListener("input", checkPasswordMatch);
	confirmPasswordInput.addEventListener("input", checkPasswordMatch);
});

// Password Match Check End

// Field Check Start
document.addEventListener("DOMContentLoaded", function () {
	const loginModal = document.getElementById("loginModal");
	const registerModal = document.getElementById("registerModal");
	const loginSubmitButton = loginModal.querySelector(
		'#loginModal button[type="submit"]'
	);
	const registerSubmitButton = registerModal.querySelector(
		'#registerModal button[type="submit"]'
	);

	function checkFieldCompletion(modal, submitButton) {
		const inputs = modal.querySelectorAll("input");
		let allFilled = true;
		inputs.forEach((input) => {
			if (input.value.trim() === "") {
				allFilled = false;
			}
		});
		submitButton.disabled = !allFilled;
	}

	loginModal.addEventListener("input", function () {
		checkFieldCompletion(loginModal, loginSubmitButton);
	});

	registerModal.addEventListener("input", function () {
		checkFieldCompletion(registerModal, registerSubmitButton);
	});

	loginSubmitButton.addEventListener("click", function () {
		checkFieldCompletion(loginModal, loginSubmitButton);
	});

	registerSubmitButton.addEventListener("click", function () {
		checkFieldCompletion(registerModal, registerSubmitButton);
	});

	loginSubmitButton.disabled = true;
	registerSubmitButton.disabled = true;
});

// Field Check End
