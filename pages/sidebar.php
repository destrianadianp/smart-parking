<aside id="sidebar">
  <!-- content -->
  <div class="h-100">
    <div class="sidebar-logo">
      <a href="#">SMART<span>PARK</span></a>
    </div>
    <ul class="sidebar-nav">
      <li class="sidebar-header">Dashboard</li>
      <li class="sidebar-item">
        <a href="dashboard.php" class="sidebar-link fw-semibold" style="color: <?php echo $currentPage === 'dashboard' ? '#5bbe2d' : '' ?>">
          <i class="fa-solid fa-list pe-2"></i>
          Dashboard
        </a>
      </li>
      <li class="sidebar-header">Menu</li>
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed" data-bs-target="#book" data-bs-toggle="collapse" aria-expanded="false" style="color: <?php echo ($currentPage === 'booknow' || $currentPage === 'history') ? '#5bbe2d' : '' ?>">
          <i class="fa-solid fa-square-plus pe-2"></i>
          Booking
        </a>
        <ul id="book" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a href="booking.php" class="sidebar-link" style="color: <?php echo $currentPage === 'booknow' ? '#5bbe2d' : '' ?>">Book Now</a>
          </li>
          <li class="sidebar-item">
            <a href="history.php" class="sidebar-link" style="color: <?php echo $currentPage === 'history' ? '#5bbe2d' : '' ?>">History</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed" data-bs-target="#user" data-bs-toggle="collapse" aria-expanded="false" style="color: <?php echo ($currentPage === 'profil' || $currentPage === 'notif') ? '#5bbe2d' : '' ?>">
          <i class="fa-solid fa-user pe-2"></i>
          User
        </a>
        <ul id="user" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a href="profil.php" class="sidebar-link" style="color: <?php echo $currentPage === 'profil' ? '#5bbe2d' : '' ?>">Profil</a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">Notification</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed" data-bs-target="#setting" data-bs-toggle="collapse" aria-expanded="false">
          <i class="fa-solid fa-gear pe-2"></i>
          Setting and Support
        </a>
        <ul id="setting" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">Settings and privacy</a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">Help center</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a href="../php/logout.php" class="sidebar-link">
          <i class="fa-solid fa-right-from-bracket pe-2"></i>
          Logout
        </a>
      </li>
    </ul>
  </div>
</aside>