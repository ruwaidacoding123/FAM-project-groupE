
// <--------------------start login page script-------------------->

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
// document.addEventListener('DOMContentLoaded', function() {
//     const forgotLink = document.getElementById('submit');

//     forgotLink.addEventListener('click', function(event) {
//         event.preventDefault();
//         // Redirect to the password reset page
//         window.location.href = 'dashboard.php';
//     });
// });
// <----------------end: index/login script---------------->

// document.addEventListener('DOMContentLoaded', function() {
//     const codeInputs = document.querySelectorAll('.code-input');
//     // Add event listener to each input field to handle key presses
//     codeInputs.forEach(function(input) {
//         input.addEventListener('input', function(event) {
//             const value = event.target.value;
//             if (!(/^\d+$/.test(value))) { // Check if the value is not an integer
//                 event.target.value = ''; // Clear the input value
//                 alert('Please enter only integer numbers.'); // Alert the user
//             }
//         });
//     });

//     const resetForm = document.getElementById('code-entry-form');
//     resetForm.addEventListener('submit', function(event) {
//         event.preventDefault();
//         // Redirect to the code entry page upon form submission
//         window.location.href = 'code_entry.php';
//     });
// });
// <--------------------start password_resset script-------------------->
document.addEventListener('DOMContentLoaded', function() {
    const sendCodeBtn = document.getElementById('send-code-btn');
    const resetForm = document.getElementById('reset-form');
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
    resetForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Redirect to the code entry page upon form submission
        window.location.href = 'code_entry.php';
    });

});

// <--------------------end password_resset script-------------------->


// <--------------------start code_entry script-------------------->

document.addEventListener('DOMContentLoaded', function() {
    const codeEntryForm = document.getElementById('code-entry-form');

    codeEntryForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Redirect to the change password page upon form submission
        window.location.href = 'change_password.php';
    });
});
// <--------------------end code_entry script-------------------->




