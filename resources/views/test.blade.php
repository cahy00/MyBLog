<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test Everything I want</title>
	<style>
	html,
	body {
		height: 100%;
		width: 100%;
	}
	
	#myChart {
		height: 100%;
		width: 100%;
		min-height: 150px;
	}
	
	.zc-ref {
		display: none;
	}
	</style>
	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
</head>
<body>
	@foreach ($user as $item)
		{{$item}}
	@endforeach
	<div id="myChart"><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div>



	{{-- <script>
    var myConfig = {
      type: "gauge",
      globals: {
        fontSize: 25
      },
      plotarea: {
        marginTop: 80
      },
      plot: {
        size: '100%',
        valueBox: {
          placement: 'center',
          text: '%v', //default
          fontSize: 35,
          rules: [{
              rule: '%v >= 700',
              text: '%v<br>EXCELLENT'
            },
            {
              rule: '%v < 700 && %v > 640',
              text: '%v<br>Good'
            },
            {
              rule: '%v < 640 && %v > 580',
              text: '%v<br>Fair'
            },
            {
              rule: '%v <  580',
              text: '%v<br>Bad'
            }
          ]
        }
      },
      tooltip: {
        borderRadius: 5
      },
      scaleR: {
        aperture: 180,
        minValue: 300,
        maxValue: 850,
        step: 50,
        center: {
          visible: false
        },
        tick: {
          visible: false
        },
        item: {
          offsetR: 0,
          rules: [{
            rule: '%i == 9',
            offsetX: 15
          }]
        },
        labels: ['300'],
        ring: {
          size: 50,
          rules: [{
              rule: '%v <= 580',
              backgroundColor: '#E53935'
            },
            {
              rule: '%v > 580 && %v < 640',
              backgroundColor: '#EF5350'
            },
            {
              rule: '%v >= 640 && %v < 700',
              backgroundColor: '#FFA726'
            },
            {
              rule: '%v >= 700',
              backgroundColor: '#29B6F6'
            }
          ]
        }
      },
      refresh: {
        type: "feed",
        transport: "js",
        url: "feed()",
        interval: 1500,
        resetTimeout: 1000
      },
      series: [{
        values: [755], // starting value
        backgroundColor: 'black',
        indicator: [10, 10, 10, 10, 0.75],
        animation: {
          effect: 2,
          method: 1,
          sequence: 4,
          speed: 900
        },
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 500,
      width: '100%'
    });
	</script> --}}
</body>
</html>