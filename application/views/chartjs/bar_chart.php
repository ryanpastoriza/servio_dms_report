<?php

/**
 * @Author: IanJayBronola
 * @Date:   2019-02-07 16:36:20
 * @Last Modified by:   IanJayBronola
 * @Last Modified time: 2019-02-22 16:56:23
 */

	


	$prepped = prep_data($dataset, $xAxis, $labelField, $sumField, $chartType, $chartId);




?>
<canvas id="<?= $chartId ?>"></canvas>

<script>
var ctx = document.getElementById("<?= $chartId ?>").getContext('2d');
var myChart = new Chart(ctx, {
    type: "<?= $chartType ?>",
    data: {
        labels: <?= json_encode($prepped['xAxis']) ?>,
        datasets : <?= json_encode($prepped['data']) ?>
    },
    bezierCurve : false,
    options: {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
         elements: {
            line: {
                tension: 0, // disables bezier curves
            }
        },
    }
});
</script>
