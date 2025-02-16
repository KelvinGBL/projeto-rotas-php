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
            <!-- App Left - Sidebar -->
            <?php require __DIR__ ."/./components/sidebar.php"; ?>

            <!-- App Main -->
            <div class="app-main">
                <div class="main-header-line">
                    <h1>Dashboard</h1>
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

            <!-- App Right -->
            <div class="app-right">

              <button class="close-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              </button>

              <div class="profile-box">
                <div class="profile-photo-wrapper">
                  <img src="https://images.unsplash.com/photo-1551292831-023188e78222?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE0fHxwb3J0cmFpdHxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
                </div>
                <p class="profile-text">Julia Pellegrini</p>
                 <p class="profile-subtext">Recruiting Manager</p>
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
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Dados dos gráficos
                const labels = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"];
                const dataValues = [12, 19, 10, 5, 14];

                // Gráfico de Barras Horizontal com números na frente
                const barCtx = document.getElementById("barChart").getContext("2d");
                new Chart(barCtx, {
                    type: "bar",
                    data: {
                        labels: labels,
                        datasets: [{
                            label: "Vendas",
                            data: dataValues,
                            backgroundColor: "rgba(54, 162, 235, 0.6)",
                            borderColor: "rgba(54, 162, 235, 1)",
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y', // Faz o gráfico ficar horizontal
                        responsive: true,
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'right',
                                color: 'gray',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: (value) => value // Mostra o valor da barra
                            }
                        },
                        scales: {
                            x: {
                                beginAtZero: true
                            }
                        }
                    },
                    plugins: [ChartDataLabels] // Ativando o plugin para mostrar os valores
                });

                // Gráfico de Donut
                const donutCtx = document.getElementById("donutChart").getContext("2d");
                new Chart(donutCtx, {
                    type: "doughnut",
                    data: {
                        labels: labels,
                        datasets: [{
                            label: "Distribuição de vendas",
                            data: dataValues,
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.6)",
                                "rgba(54, 162, 235, 0.6)",
                                "rgba(255, 206, 86, 0.6)",
                                "rgba(75, 192, 192, 0.6)",
                                "rgba(153, 102, 255, 0.6)"
                            ],
                            borderColor: [
                                "rgba(255, 99, 132, 1)",
                                "rgba(54, 162, 235, 1)",
                                "rgba(255, 206, 86, 1)",
                                "rgba(75, 192, 192, 1)",
                                "rgba(153, 102, 255, 1)"
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            });
        </script>

        <script>
            <?php require __DIR__ ."/./js/script.php"; ?>
        </script>


        <script>
            document.getElementById("nav-link-dashboard").classList.add("active");
        </script>
    </body>
</html>