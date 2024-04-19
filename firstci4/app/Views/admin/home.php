<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="far fa-chart-bar"></i>
              Bar Chart
            </h3>
            <div class="card-tools">
              <div class="btn-group">
                <div class="form-group">
                  <select class="form-control" id="year">
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;" width="763" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;" width="763" height="300"></canvas>
              <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;">
                <svg style="width: 100%; height: 100%;">
                  <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="160.83638139204544" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="298.0213068181818" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="429.8536931818182" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="559.4473100142045" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="36.23299893465909" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="684.0912198153409" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g>
                  <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.9521484375" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">30</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">50</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">75.000.000</text></g>
                </svg>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.row -->

  </div><!-- /.container-fluid -->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script type="text/javascript">
  // get monthwise data
  function load_monthwise_data(year, title) {
    var temp_title = title + ' ' + year + ' ';
    $.ajax({
      type: "POST",
      url: "<?= base_url('admin/loadMonthwiseData') ?>",
      dataType: 'json',
      contentType: "application/json",
      data: JSON.stringify({
        year: year
      }),
      success: function(data) {
        drawMonthwiseChart(data, temp_title);
      }
    })
  }

  // display chart with data


  $('#year').change(function() {
    var year = $(this).val();
    if (year != '') {
      load_monthwise_data(year, 'Month Wise Profit Data For');
    }
  })
</script>

<script type="text/javascript">
  function drawMonthwiseChart(data, temp_title) {
    /*
     * BAR CHART
     * ---------
     */
    var dataContainer = [];
      var bar_data = {
        data: [],
        bars: {
          show: true
        }
      }
    $.each(data, function(key, val) {
      bar_data.data.push([val.month, parseFloat(val.profit)])
    });
    
    console.log(bar_data)
    $.plot('#bar-chart', [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis: {
        ticks: [
          [1, 'January'],
          [2, 'February'],
          [3, 'March'],
          [4, 'April'],
          [5, 'May'],
          [6, 'June']
        ]
      }
    })
    /* END BAR CHART */

  }
</script>