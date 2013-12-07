<script type="text/javascript">
	$ipAddress = '10.120.39.55';	
	
	$(document).ready(function() {
		$('#logout').click(function(){ logout(); return false; });	
					
					
		// Pie Menu Item 1 ------------------------------------------------------------------------------------------------------------						
		$('#pieMenuItem1').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				
				$("#title").html("got it");
				$("#description").html("got it");
				$("#trailer").html("got it");
			}
			});					
		});
		
		// Pie Menu Item 2 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem2').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				
				$("#title").html("got it");
				$("#description").html("got it");
				$("#trailer").html("got it");
			}
			});					
		});
		
		// Pie Menu Item 3 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem3').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#',
			success:function(){
				var JSONData = '';
				var htmlMessage = '<div id="message"><div style="float:left;"> <textarea id="message" name="message" class="enterCommentContactUs" placeholder="Description" required></textarea></div> <div style="float:left;margin-left:15px;"><button class="btn-taptastic" id="send" name="send" type="submit">Send</button></div></div>';
				
				$("#title").html("BROADCAST MESSAGE");
				$("#description").html(htmlMessage);
				$("#trailer").html('<div style="clear:both;float:left;">*student will recieve the message when they tap or open app</div>');
			}
			});
		});
		
		// Pie Menu Item 4 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem4').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				var htmlGraph = '<div id="chart1" style="width:100%; height:300px"></div>';
				$("#title").html("STATISTICS FOR FALL 2013");
				$("#description").html(htmlGraph);
				$("#trailer").html("");
			}
			});	
			
			
			 var s1 = [[1, 15], [2, 60], [3, 42], [4, 53], [5, 47], 
			    [6, 53], [7, 35], [8, 38], [9, 45], [10, 25]];
			 var s2 = [[1, 15], [2, 60], [3, 42], [4, 53], [5, 47], 
			    [6, 53], [7, 35], [8, 38], [9, 45], [10, 25]];
			 
		    plot1 = $.jqplot("chart1", [s2, s1], {
		        // Turns on animatino for all series in this plot.
		        animate: true,
		        // Will animate plot on calls to plot1.replot({resetAxes:true})
		        animateReplot: true,
		        cursor: {
		            show: true,
		            zoom: true,
		            looseZoom: true,
		            showTooltip: false
		        },
		        series:[
		            {
		                pointLabels: {
		                    show: false
		                },
		                renderer: $.jqplot.BarRenderer,
		                showHighlight: false,
		                
		                rendererOptions: {
		                    // Speed up the animation a little bit.
		                    // This is a number of milliseconds.  
		                    // Default for bar series is 3000.  
		                    animation: {
		                        speed: 2500
		                    },
		                    barWidth: 15,
		                    barPadding: -15,
		                    barMargin: 0,
		                    highlightMouseOver: false
		                }
		            }, 
		            {
		                rendererOptions: {
		                    // speed up the animation a little bit.
		                    // This is a number of milliseconds.
		                    // Default for a line series is 2500.
		                    animation: {
		                        speed: 2000
		                    }
		                }
		            }
		        ],
		        axesDefaults: {
		            pad: 0
		        },
		        axes: {
		            // These options will set up the x axis like a category axis.
		            xaxis: {
		            	label:'Class Number',
		                tickInterval: 1,
		                drawMajorGridlines: false,
		                drawMinorGridlines: true,
		                drawMajorTickMarks: false,
		                rendererOptions: {
		                tickInset: 0.5,
		                minorTicks: 1
		            }
		            },
		            yaxis: {
		            	min:0,
		            	max: 80,
		            	label:'Students',
		            	renderer:$.jqplot.LogAxisRenderer,
			            tickOptions:{
			                labelPosition: 'middle', 
			                angle:-30
			            },
			            tickRenderer:$.jqplot.CanvasAxisTickRenderer,
			            labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
		            }
		        },
		        highlighter: {
		            show: true, 
		            showLabel: true, 
		            tooltipAxes: 'Students',
		            sizeAdjust: 7.5 , tooltipLocation : 'ne'
		        }
			    });
					
		});
		
		// Pie Menu Item 5 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem5').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				var html = '<table border=1 width="100%"><tr><td>Team #</td><td>Team</td><td>Project</td></tr> <tr><td>01</td><td>Ryan Giggs,Wayne Rooney,Van Persie</td><td><a href="/Taptastic-Website/project.php">Boxed Wholesale, Android<a></td></tr><tr><td>02</td><td>Nemanja Vidic, Chris Smalling, Rio Ferdinand</td><td>Edge: Quick Actions, Android</td></tr> <tr><td>03</td><td>Sinji Kagawa, Micheal Carrick</td><td>Achvr, iOS</td></tr> <tr><td>04</td><td>David De Gea, Rafael</td><td>PumpUp update, iOS</td></tr> <tr><td>05</td><td>Tom Cleverly, Nani, Phil Jones</td><td><a href="/Taptastic-Website/project.php">ToDoist update, iOS and Android</a></td></tr> </table>';
				$("#title").html("FALL '13 PROJECTS");
				$("#description").html(html);
				$("#trailer").html("Total 5 Projects");
			}
			});					
		});
		
		// Pie Menu Item 6 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem6').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				
				$("#title").html("CONTACT US");
				$("#description").html("If you like, love, hate, find bugs, feel happy using this app, send us a mail on </br> akanksha@istheman.com </br></br>");
				$("#trailer").html("Thank you for your feedback!");
			}
			});					
		});
		
		// Pie Menu Item 7 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem7').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#', //'http://'.$ipAddress.':8080/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				
				$("#title").html("THE COOL DEVELOPERS");
				$("#description").html("This awesome app is developed by </br></br> Akansha Tea </br></br> Kartik CSCI588 </br></br> Don Koshti </br></br>");
				$("#trailer").html("Thank you seeing this, it really means a lot!");
			}
			});					
		});
		
	});
				
	function login(){
		<?php
			try {
				session_start();
				$_currentSessionId = session_id();
				$_expires = 0;
				setcookie( 'YOUR_SID', $_currentSessionId, $_expires );
				
				$username = $_POST['log'];
				$password = $_POST['pwd'];

				if ($username === "professor" && $password === "588") {
					$_SESSION["username"] = $username;
				}

				$success = TRUE;
			} catch(Exception $e) {
				error_log($e);
				$success = FALSE;
			}
		?>
	}
	
	function logout(){
		<?php session_destroy(); ?>
	}

	function fetchFall13() {
		
	}

</script>