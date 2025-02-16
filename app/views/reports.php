<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <style>
            <?php require __DIR__ ."/./css/style.php"; ?>
        </style>

    </head>

    <body>
        <div class="app-container">
            <!-- App Right - Sidebar -->
            <?php require __DIR__ ."/./components/sidebar.php"; ?>

            <div class="app-main">
              <div class="main-header-line">
                <h1>Reports</h1>
                <div class="action-buttons">
                    
                  <button class="open-right-area" style="display: none;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </button>

                <button class="menu-button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
                </div>
              </div>

            </div>

            <div class="app-right">

              <button class="close-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </button>

              <div class="profile-box">
                <div class="profile-photo-wrapper">
                  <img src="https://images.unsplash.com/photo-1551292831-023188e78222?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE0fHxwb3J0cmFpdHxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
                </div>
                <p class="profile-text">Usuário</p>
                 <p class="profile-subtext">Administrador</p>
              </div>
              
              <div class="app-right-content">
                <div class="app-right-section">


                
              </div>
              <div class="app-right-section">
                <div class="app-right-section-header">
                  <h2>Activity</h2>
                  <span class="notification-active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                  </span>
                </div>


              </div>
              </div>
            </div>

          </div>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            <?php require __DIR__ ."/./js/script.php"; ?>
        </script>

        <script>
            document.getElementById("nav-link-reports").classList.add("active");
        </script>
    </body>
</html>