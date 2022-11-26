

<?php include "home.php"; ?>

<!-- APEXCHARTS -->
<script src="js/apexChart/apexcharts.min.js"></script>
<!-- demo app -->
<script src="js/apexChart/dashboard.js"></script>
<!-- <script src="js/controller.js"></script> -->

<!-- SCRIPT CHART RADIAL -->
<script>
    var options = {
        series: [44, 55, 67, 83],
        chart: {
            height: 350,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function(w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return <?php echo $TotalProductos; ?>
                        }
                    }
                }
            }
        },
        labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
    };

    var chart = new ApexCharts(document.querySelector("#dash-campaigns-chart"), options);
    chart.render();
</script>

</body>

</html>