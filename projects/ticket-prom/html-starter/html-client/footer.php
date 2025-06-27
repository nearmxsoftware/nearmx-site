

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    © TICKET PROM - Eventos 2024
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="#" target="_blank" class="footer-link me-4" >Soporte</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/chartjs/chartjs.js"></script>
    <script src="../../assets/vendor/libs/quill/katex.js" /></script>
    <script src="../../assets/vendor/libs/quill/quill.js" /></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>
    
    <script>
      const pendingTasks = document.getElementById('pending-tasks');
      const completedTasks = document.getElementById('completed-tasks');

      Sortable.create(pendingTasks, {
        animation: 150,
        group: 'taskList'
      });
      Sortable.create(completedTasks, {
        animation: 150,
        group: 'taskList'
      });

    </script>

    <script>
      const snowEditor = new Quill('#snow-editor', {
        bounds: '#snow-editor',
        modules: {
          formula: true,
          toolbar: '#snow-toolbar'
        },
        theme: 'snow'
      });
    </script>

    <script>
      // Color Variables
      const cyanColor = '#28dac6',
        orangeLightColor = '#FDAC34';
      let cardColor, headingColor, labelColor, borderColor, legendColor;

      if (isDarkStyle) {
        cardColor = config.colors_dark.cardColor;
        headingColor = config.colors_dark.headingColor;
        labelColor = config.colors_dark.textMuted;
        legendColor = config.colors_dark.bodyColor;
        borderColor = config.colors_dark.borderColor;
      } else {
        cardColor = config.colors.cardColor;
        headingColor = config.colors.headingColor;
        labelColor = config.colors.textMuted;
        legendColor = config.colors.bodyColor;
        borderColor = config.colors.borderColor;
      }
      const doughnutChart = document.getElementById('doughnutChart');
      if (doughnutChart) {
        const doughnutChartVar = new Chart(doughnutChart, {
          type: 'doughnut',
          data: {
            labels: ['Tablet', 'Mobile', 'Desktop'],
            datasets: [
              {
                data: [20, 80],
                backgroundColor: [orangeLightColor, config.colors.primary],
                borderWidth: 0,
                pointStyle: 'rectRounded'
              }
            ]
          },
          options: {
            responsive: true,
            animation: {
              duration: 500
            },
            cutout: '68%',
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                callbacks: {
                  label: function (context) {
                    const label = context.labels || '',
                      value = context.parsed;
                    const output = ' ' + label + ' : ' + value + ' %';
                    return output;
                  }
                },
                // Updated default tooltip UI
                rtl: isRtl,
                backgroundColor: cardColor,
                titleColor: headingColor,
                bodyColor: legendColor,
                borderWidth: 1,
                borderColor: borderColor
              }
            }
          }
        });
      }
    </script>

  </body>
</html>
