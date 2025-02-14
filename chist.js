// script.js
function validateForm() {
    const contact = document.getElementById('contact').value;
    if (contact.length !== 11 || !/^\d+$/.test(contact)) {
        alert('Contact number must be exactly 11 digits.');
        return false;
    }
    return true;
}
