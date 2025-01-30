<div class="top-header">
        <div class="hamburger" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        
        <div class="profile">
            <i class="fas fa-user-circle" onclick="toggleProfileMenu()"></i>
            <span>Haron Mwendwa</span>
        </div>
    </div>

    <!-- Profile Menu -->
    <div id="profile-menu" class="profile-menu">
        <div class="menu-section">
            <a href="#">Profile</a>
        </div>
        <div class="menu-section">
            <a href="#">Logout</a>
        </div>
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


     <script>
            const hamburger = document.querySelector('.hamburger');
             const sidebar = document.querySelector('.sidebar');
             const contentWrapper = document.querySelector('.my-team-wrapper');
            const contentHeader = document.querySelector('.my-team-header h1');
            const dashboardLine = document.querySelector('.my-team-line');

            hamburger.addEventListener('click', function() {
            sidebar.classList.toggle('minimized');
            contentWrapper.classList.toggle('sidebar-minimized');
            contentHeader.classList.toggle('sidebar-minimized');
            dashboardLine.classList.toggle('sidebar-minimized');
        });
    </script>