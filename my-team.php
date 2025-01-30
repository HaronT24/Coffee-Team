<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Team</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="includes/styles.css">

</head>
<body>
<?php include 'Includes/sidebar1.php'; ?> <!-- Include the header here -->

<?php include 'Includes/header1.php'; ?> <!-- Include the header here -->

      <!-- Profile Menu -->
    <div id="profile-menu" class="profile-menu">
        <div class="menu-section">
            <a href="#">Profile</a>
        </div>
        <div class="menu-section">
            <a href="#">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>My Team</h1>
        <p>Your team's overview and management tools will appear here.</p>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            const topHeader = document.querySelector('.top-header');
            
            sidebar.classList.toggle('hidden');
            content.classList.toggle('shifted');
            topHeader.classList.toggle('shifted');
        }

        function toggleProfileMenu() {
            const profileMenu = document.getElementById('profile-menu');
            profileMenu.style.display = profileMenu.style.display === 'block' ? 'none' : 'block';
        }

        window.addEventListener('click', function(event) {
            const profileIcon = document.querySelector('.profile i');
            const profileMenu = document.getElementById('profile-menu');

            if (!profileIcon.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.style.display = 'none';
            }
        });

        function toggleDropdown(element) {
            const dropdown = element.nextElementSibling;
            const isActive = element.classList.contains('active');

            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
                menu.previousElementSibling.classList.remove('active');
            });

            if (!isActive) {
                dropdown.style.display = 'flex';
                element.classList.add('active');
            }
        }
    </script>

<footer>
        <?php include 'Includes/footer1.php'; ?>
    </footer>

</body>
</html>
