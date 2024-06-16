document.addEventListener('DOMContentLoaded', function() {
    const forgotLink = document.getElementById('forgot-link');
    const message = document.getElementById('message');

    forgotLink.addEventListener('click', function(event) {
        event.preventDefault();
        // Show message when "Forgot Password?" link is clicked
        message.style.display = 'block';
        message.textContent = 'Password reset instructions sent to your email.';
        // You can also add code here to send password reset instructions via email
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const forgotLink = document.getElementById('forgot-link');

    forgotLink.addEventListener('click', function(event) {
        event.preventDefault();
        // Redirect to the password reset page
        window.location.href = 'password_reset.php';
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const sendCodeBtn = document.getElementById('send-code-btn');
    const resetForm = document.getElementById('reset-form');

    resetForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Redirect to the code entry page upon form submission
        window.location.href = 'code_entry.php';
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const codeEntryForm = document.getElementById('code-entry-form');

    codeEntryForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Redirect to the change password page upon form submission
        window.location.href = 'change_password.php';
    });
});

// sidebar js

const sidebar = document.querySelector(".sidebar");
const toggleBtn = document.createElement("button");

toggleBtn.textContent = "Toggle Sidebar";
toggleBtn.classList.add("toggle-btn");

sidebar.insertBefore(toggleBtn, sidebar.firstChild);

toggleBtn.addEventListener("click", () => {
  sidebar.classList.toggle("active");
});


document.addEventListener('DOMContentLoaded', function() {
    const codeInputs = document.querySelectorAll('.code-input');

    // Add event listener to the container div to handle key presses
    document.querySelector('.code-group').addEventListener('input', function(event) {
        const target = event.target;
        const maxLength = parseInt(target.getAttribute('maxlength'));
        const currentLength = target.value.length;
        // If the input is not empty and the max length has been reached, focus on the next input
        if (currentLength === maxLength && target.nextElementSibling) {
            target.nextElementSibling.focus();
        }
    });
});
