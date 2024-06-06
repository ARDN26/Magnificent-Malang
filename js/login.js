// login.js

// Function to get query parameter by name
function getQueryParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

// Function to show popup with message
function showPopup(message) {
    const popup = document.getElementById('popup');
    const popupMessage = document.getElementById('popup-message');
    popupMessage.textContent = message;
    popup.classList.add('active');
}

// Function to close popup
function closePopup() {
    const popup = document.getElementById('popup');
    popup.classList.remove('active');
}

// Check for error message in URL
const errorMessage = getQueryParameter('error');
if (errorMessage) {
    showPopup(decodeURIComponent(errorMessage));
}
