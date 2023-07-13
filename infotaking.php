<!DOCTYPE html>
<html>
<head>
  <title>User Information Form</title>
  <style>
    /* CSS styling for the form */
    /* ... (existing CSS styles) ... */
    /* CSS styling for the form */
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
    }

    h1 {
      color: #ff4d4d;
      text-align: center;
      margin-top: 50px;
      animation: bounceIn 1s ease;
      font-size: 36px;
    }

    .form-container {
      width: 400px;
      margin: 0 auto;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
      animation: fadeIn 1s ease;
    }

    label {
      display: block;
      font-weight: bold;
      color: white;
      transition: color 0.3s ease;
    }

    input[type="text"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #ffffff;
      transition: background-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    textarea:focus {
      background-color: #e6e6e6;
    }

    #submit-btn {
      padding: 10px 20px;
      background-color: #ff4d4d;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #submit-btn:hover {
      background-color: #ff3333;
    }

    /* Animation keyframes */
    @keyframes bounceIn {
      0% {
        transform: scale(0.5);
        opacity: 0;
      }
      70% {
        transform: scale(1.2);
        opacity: 1;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <h1>User Information Form</h1>
  <div class="form-container">
    <form id="user-form" action="connected.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="about">About Yourself:</label>
        <textarea id="about" name="about" required></textarea>
      </div>
      <div class="form-group">
        <label for="portfolio">Portfolio Number:</label>
        <input type="text" id="portfolio" name="portfolio" required>
      </div>
      <div class="form-group">
        <label for="image">Images:</label>
        <input type="file" id="image" name="image" accept="image/*" multiple required>
      </div>
      <div class="form-group">
        <label for="resume">Resume (PDF):</label>
        <input type="file" id="resume" name="resume" accept="application/pdf" required>
      </div>
      <div class="form-group">
        <input type="submit" id="submit-btn" value="Submit">
      </div>
    </form>
  </div>

  <script>
    // JavaScript code to handle form submission
    /* ... (existing JavaScript code) ... */
    const form = document.getElementById('user-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Get form values
      const name = document.getElementById('name').value;
      const about = document.getElementById('about').value;
      const portfolio = document.getElementById('portfolio').value;
      const images = document.getElementById('image').files;
      const resume = document.getElementById('resume').files[0];

      // Display user information in an alert
      let userInfo = `Name: ${name}\nAbout Yourself: ${about}\nPortfolio Number: ${portfolio}`;

      for (let i = 0; i < images.length; i++) {
        const image = images[i];
        userInfo += `\nImage ${i + 1}: ${image.name}`;
      }

      if (resume) {
        userInfo += `\nResume: ${resume.name}`;
      }

      alert(userInfo);

      // TODO: Handle the image and resume files as needed (e.g., upload to a server)

      // Reset form fields
      form.reset();
    });
  </script>
</body>
</html>
