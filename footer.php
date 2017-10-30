<!-- FOOTER -->
	<footer class="footer bg_dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">&copy; <?php echo date("Y") ?> <?php echo get_bloginfo( 'name') ?></div>
			</div>
		</div>
	</footer>
	<div class="top" title="To Top">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt="top icon" class="top-icon">
	</div>


	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php $options = get_option('sample_theme_options'); echo $options['selectinput']; ?>.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>
	<script type="text/javascript">
		let myChart = document.getElementById('myChart').getContext('2d');
		var w_width = $(window).width();
		if (w_width < 480) {
			Chart.defaults.global.defaultFontSize = 8;
		} else {
			Chart.defaults.global.defaultFontSize = 18;
		}
	    //Global Options
	    Chart.defaults.global.defaultFontColor = '#777';

	    let massPopChart = new Chart(myChart, {
	      type: 'bar',// bar, horizontalBar, pie, line, doughnut, radar, polarArea
	      data:{
	        labels:['1800', '1850', '1900', '1950', '2000', '2017'],
	        datasets:[{
	    		label:'Number of inhabitants (thousands)',
	          data:[
	            60.5,
	            515.5,
	            1850.65,
	            1960.42,
	            1537.3,
	            1644.8
	          ],
	          backgroundColor:[
	            'rgba(85,86,80, 0.5)',
	            'rgba(85,86,80, 0.6)',
	            'rgba(85,86,80, 0.9)',
	            'rgba(85,86,80, 1)',
	            'rgba(85,86,80, 0.7)',
	            'rgba(85,86,80, 0.8)',
	          ],
	          borderWidth:1,
	          borderColor:'#777',
	          hoverBorderWidth:3,
	          hoverBordercolor:'#ff0000'
	        }]
	      },
	      options: {
	        title:{
	          display:true,
	          text:'The population of Brooklyn between 1800 and 2017',
	          fontSize:25
	        },
	        events: []
	      }
	    });

    $('.chart_btn').click(function () {
    	$('.chartjs-hidden-iframe').remove();
    	var atr = $(this).attr('id');
    	console.log(atr);
		let myChart = document.getElementById('myChart').getContext('2d');
		var w_width = $(window).width();

		if (w_width < 480) {
			Chart.defaults.global.defaultFontSize = 8;
		} else {
			Chart.defaults.global.defaultFontSize = 18;
		}
	    //Global Options
	    Chart.defaults.global.defaultFontColor = '#777';

	    let massPopChart = new Chart(myChart, {
	      type: atr,// bar, horizontalBar, pie, line, doughnut, radar, polarArea
	      data:{
	        labels:['1800', '1850', '1900', '1950', '2000', '2017'],
	        datasets:[{
	    		label:'Number of inhabitants (thousands)',
	          data:[
	            60.5,
	            515.5,
	            1850.65,
	            1960.42,
	            1537.3,
	            1644.8
	          ],
	          backgroundColor:[
	            'rgba(85,86,80, 0.5)',
	            'rgba(85,86,80, 0.6)',
	            'rgba(85,86,80, 0.9)',
	            'rgba(85,86,80, 1)',
	            'rgba(85,86,80, 0.7)',
	            'rgba(85,86,80, 0.8)',
	          ],
	          borderWidth:1,
	          borderColor:'#777',
	          hoverBorderWidth:3,
	          hoverBordercolor:'#ff0000'
	        }]
	      },
	      options: {
	        title:{
	          display:true,
	          text:'The population of Brooklyn between 1800 and 2017',
	          fontSize:25
	        },
	        events: [],

	      }
	    });

    });
  </script>
</body>
</html>
