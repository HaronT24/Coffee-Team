<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
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

        .faq-item {
            margin: 20px 0;
            border-bottom: 1px solid #5A0DDA;
            padding-bottom: 10px;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-item h3 {
            font-size: 1.5rem;
            cursor: pointer;
            margin: 10px 0;
        }

        .faq-item p {
            font-size: 1rem;
            line-height: 1.5;
            display: none;
            margin: 0;
        }

        .faq-item.open p {
            display: block;
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
        <h1>FAQs</h1>
        <h2>Frequently Asked Questions</h2>

        <!-- Updated FAQ Order -->
        <div class="faq-item" id="faq1">
            <h3 onclick="toggleFAQ('faq1')">What is this platform about?</h3>
            <p>This platform allows you to refer friends and earn rewards based on successful referrals. It's an easy and fun way to earn rewards by simply sharing your referral link with others.</p>
        </div>

        <div class="faq-item" id="faq2">
            <h3 onclick="toggleFAQ('faq2')">What is the referral program?</h3>
            <p>The referral program allows you to invite friends and family to join our platform. For each successful referral, you can earn rewards such as bonuses or discounts.</p>
        </div>

        <div class="faq-item" id="faq3">
            <h3 onclick="toggleFAQ('faq3')">How do I sign up?</h3>
            <p>To sign up, simply visit our <a href="signup.html">Sign Up</a> page, fill out the required details, and create your account. You'll then receive your unique referral link.</p>
        </div>

        <div class="faq-item" id="faq4">
            <h3 onclick="toggleFAQ('faq4')">How do I earn rewards?</h3>
            <p>Every time someone signs up using your referral link, you earn rewards. The more people you refer, the more you can earn.</p>
        </div>

        <div class="faq-item" id="faq5">
            <h3 onclick="toggleFAQ('faq5')">How do I start referring?</h3>
            <p>Simply sign up for an account, and you’ll receive a unique referral link that you can share with your friends, family, and colleagues.</p>
        </div>

        <div class="faq-item" id="faq6">
            <h3 onclick="toggleFAQ('faq6')">What happens when someone I referred signs up?</h3>
            <p>Once your referral signs up and completes a specified action, you’ll earn a reward. These rewards can vary depending on the program terms.</p>
        </div>

        <div class="faq-item" id="faq8">
            <h3 onclick="toggleFAQ('faq8')">Can I share my referral link anywhere?</h3>
            <p>Yes! You can share your referral link on social media, via email, or through any other platform you prefer.</p>
        </div>

        <div class="faq-item" id="faq7">
            <h3 onclick="toggleFAQ('faq7')">How do I track my referrals?</h3>
            <p>You can easily track your referrals and rewards through your dashboard under the "My Team" section.</p>
        </div>
 
    </div>

    <footer>
        <?php include 'Includes/footer.php'; ?>
    </footer>

    <script>
       
        function toggleFAQ(faqId) {
            const faqItem = document.getElementById(faqId);
            faqItem.classList.toggle('open');
        }

    </script>
</body>
</html>
