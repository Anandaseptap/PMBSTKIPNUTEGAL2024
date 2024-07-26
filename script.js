function showForm() {
    document.getElementById("registrationForm").style.display = "block";
}

function closeForm() {
    document.getElementById("registrationForm").style.display = "none";
}

document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Formulir telah disubmit. Terima kasih!");
    closeForm();
});
