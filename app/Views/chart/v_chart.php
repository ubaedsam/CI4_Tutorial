<?php
foreach($chart as $key => $value){
    $tahun[]= $value['tahun'];
    $jumlah[]= $value['jumlah'];
}
?>
<canvas id="myChart" height="100"></canvas>

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar', // line, // chart, // bar, // pie
        data: {
            labels: <?= json_encode($tahun) ?>,
            datasets: [{
                label: 'Grafik Chart Penjualan',
                data: <?= json_encode($jumlah) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.80)',
                    'rgba(54, 162, 235, 0.80)',
                    'rgba(255, 206, 86, 0.80)',
                    'rgba(75, 192, 192, 0.80)',
                    'rgba(153, 102, 255, 0.80)',
                    'rgba(255, 150, 64, 0.80)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 150, 64, 1)'
                ],
                fill:false,
                // borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>