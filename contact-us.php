<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2D0052, #4B0082);
            color: white;
            overflow-x: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
        }

        header nav {
            display: flex;
            align-items: center;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #5A0DDA;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .hamburger {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 20px;
        }

        .hamburger-menu {
            display: none;
            flex-direction: column;
            background-color: #4B0082;
            position: absolute;
            top: 70px;
            right: 30px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .hamburger-menu div {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .hamburger-menu a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .hamburger-menu a:hover {
            color: #5A0DDA;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        .content h1 {
            font-size: 3.5rem;
            margin: 20px 0;
        }

        .content h2 {
            font-size: 2rem;
            margin: 10px 0;
        }

        .contact-form {
            background-color: #4B0082;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-form label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: white;
            text-align: left;
            width: 100%;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #5A0DDA;
            background-color: white;
            color: #4B0082;
        }

        .contact-form button {
            background-color: #5A0DDA;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #6A0EDD;
        }

        footer {
            margin-top: 40px;
            text-align: left;
            padding: 20px 30px;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #5A0DDA;
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            #desktop-nav {
                display: none;
            }

            .hamburger-menu {
                display: none;
            }

            .hamburger-menu.open {
                display: flex;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }

            #desktop-nav {
                display: flex;
            }

            .hamburger-menu {
                display: none !important;
            }
        }

        /* Profile icon styling */
        .profile-icon {
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
            margin-left: 20px;
            position: relative;
        }

        /* Profile dropdown menu */
        .profile-menu {
            display: none;
            position: absolute;
            top: 70px;
            right: 30px;
            background-color: #4B0082;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 150px;
            margin-right: 10px;
        }

        /* Separate boxes for Login and Sign Up */
        .profile-menu .menu-section {
            background-color: white;
            color: #4B0082;
            padding: 8px 0;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .profile-menu .menu-section:last-child {
            margin-bottom: 0;
        }

        .profile-menu .menu-section:hover {
            background-color: #f1f1f1;
        }

        .profile-menu a {
            color: #4B0082;
            text-decoration: none;
            display: block;
            padding: 8px 0;
            text-align: center;
        }

        .profile-menu a:hover {
            color: #5A0DDA;
        }
    </style>
</head>
<body>
<?php include 'Includes/header.php'; ?> <!-- Include the header here -->


    <div class="content">
        <h1>Contact Us</h1>
        <h2>We'd love to hear from you!</h2>

        <div class="contact-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </div>
    </div>

    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

</body>
</html>
