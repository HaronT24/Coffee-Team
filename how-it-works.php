<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works</title>
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

        .hamburger-menu i {
            margin-right: 10px;
        }

        .content {
            text-align: left;
            padding: 20px 30px;
            max-width: 800px;
            margin: 0;
        }

        .content h1 {
            font-size: 3.5rem;
            margin: 20px 0;
        }

        .content h2 {
            font-size: 2rem;
            margin: 10px 0;
        }

        .content p {
            font-size: 1rem;
            line-height: 1.5;
            margin: 20px 0;
        }

        .step-list {
            font-size: 1.1rem;
            margin: 20px 0;
        }

        .step-list li {
            margin: 15px 0;
        }

        .discover-btn {
            display: inline-flex;
            align-items: center;
            background-color: #5A0DDA;
            padding: 15px 30px;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            cursor: pointer;
            text-decoration: none;
        }

        .discover-btn i {
            margin-left: 10px;
            font-size: 1.2rem;
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
        <h1>How It Works</h1>
        <h2>Understand the process in simple steps</h2>
        <ul class="step-list">
            <li>Step 1: Sign up for an account on our platform.</li>
            <li>Step 2: Get your unique referral link.</li>
            <li>Step 3: Share your link with friends and family.</li>
            <li>Step 4: Earn rewards for every successful referral.</li>
        </ul>
        <a class="discover-btn" href="signup.html">Start Referring Now <i class="fas fa-rocket"></i></a>
    </div>

    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

</body>
</html>
