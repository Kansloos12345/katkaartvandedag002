function logout(event) {
    if (!confirm("Are you SURE you want to log out?")) {
        event.preventDefault();
    }
}

function showEditForm() {
    var accountForm = document.querySelector('.account');
    var changeInfoForm = document.querySelector('.changeinfo');
    var editButton = document.querySelector('.editbutton');

    if (changeInfoForm.style.display === 'block') {
        changeInfoForm.style.display = 'none';
        editButton.style.backgroundColor = '#71d46f';
        editButton.innerHTML = '<strong>Edit Account</strong>'; // Reset button text
    } else {
        changeInfoForm.style.display = 'block';
        changeInfoForm.classList.add('fade-in'); // Add fade-in class
        editButton.style.backgroundColor = '#F08080';
        editButton.innerHTML = '<strong>Stop Editing</strong>'; // Set button text when form is shown
    }
}

function stopEditForm() {
    event.preventDefault();
    var accountForm = document.querySelector('.account');
    var changeInfoForm = document.querySelector('.changeinfo');
    var editButton = document.querySelector('.editbutton');

    changeInfoForm.style.display = 'none';
    changeInfoForm.classList.remove('fade-in'); // Remove fade-in class
    editButton.style.backgroundColor = '#71d46f';
    editButton.innerHTML = '<strong>Edit Account</strong>'; // Reset button text
}
