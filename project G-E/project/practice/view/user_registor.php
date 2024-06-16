<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #1f2a38;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: white;
  }

  .registration-container {
    background-color: #798ab97c;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    backdrop-filter: blur(5px);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="password"],
  select {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    border: 1px solid #8d8383;
    border-radius: 3px;
    box-sizing: border-box;
  }

  button[type="submit"] {
    background-color: #233658;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 12px 20px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
  }

  button[type="submit"]:hover {
    background-color: #343435;
  }
</style>
</head>
<body>
  <div class="registration-container">
    <h2>User Registration</h2>
    <form id="registrationForm">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="title">Title:</label>
      <select id="title" name="title" required>
        <option value="">Select Title</option>
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Miss">Miss</option>
        <option value="Ms.">Ms.</option>
      </select>

      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required></form></br>

      <button type="submit"">Register</button>
    </form>
  </div>

  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Get form data
      const formData = new FormData(this);
      const fullName = formData.get('fullName');
      const email = formData.get('email');
      const phone = formData.get('phone');
      const password = formData.get('password');
      const title = formData.get('title');
      const image = formData.get('image'); 
      // Example: Send data to a server using fetch
      fetch('/register-user', {
        method: 'POST',
        body: JSON.stringify({
          fullName: fullName,
          email: email,
          phone: phone,
          password: password,
          title: title,
          image: image
        }),
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(response => {
        if (response.ok) {
          alert('User registered successfully!');
          // You can redirect to another page or do something else upon successful registration
        } else {
          alert('Error registering user. Please try again.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Error registering user. Please try again.');
      });
    });
  </script>
</body>
</html>
