<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        <h2>State Wise Companies List Graphical Representation</h2>
    </p>
<div class="">
    <button id="plain" class="btn btn-primary btn-sm">Plain</button>
    <button id="inverted" class="btn-info btn-sm">Inverted</button>
    <button id="polar" class=" btn-success btn-sm">Polar</button>
</div>
<br>
   <?php /*
    <table class="table">
        <thead>
            <tr>
                <th>State</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $key=>$row)
            <tr>
                <td>{{ $row->state }}</td>
                <td>{{ $row->total }}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
*/ ?>
</figure>

<style type="text/css">
    .highcharts-figure .btn-sm{
        max-width: 200px;
    }
    #container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}



</style>
<?php /* https://www.highcharts.com/demo/chart-update */ ?>
<script>
    var states = "<?= $states ?>";
    var records = "<?= $records ?>";
    var total_companies = <?= $total_companies ?>;
    var categories_arr = states.split(',');
    var data_arr = records.split(',');
        var VAL_ARR = [];
    $.each(data_arr, function( index, value ) {
        VAL_ARR[index] = parseInt(value);
    });

    
 /*   console.log(categories_arr);
    console.log(VAL_ARR);*/
    const chart = Highcharts.chart('container', {
    title: {
        text: 'Company Registration State Wise Graph upto 31st March 2021'
    },
    subtitle: {
        text: 'Chart option: Plain | Total Companies: ' + total_companies
    },
    xAxis: {
     /*   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']*/
        categories: categories_arr
    },
    series: [{
        type: 'column',
        name: 'Unemployed',
        colorByPoint: true,
       /* data: [5412, 4977, 4730, 4437, 3947, 3707, 4143, 3609,
            3311, 3072, 2899, 2887],*/
      //   data: [5412, 4977, 4730, 4437, 3947, 2234],
            data: VAL_ARR,
        showInLegend: false
    }]
});

document.getElementById('plain').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Chart option: Plain |  Total Companies: ' + total_companies
        }
    });
});

document.getElementById('inverted').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Chart option: Inverted | Total Companies: ' + total_companies
        }
    });
});

document.getElementById('polar').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Chart option: Polar | Total Companies: ' + total_companies
        }
    });
});

</script>