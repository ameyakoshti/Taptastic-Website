      <?php header('Access-Control-Allow-Origin: *'); ?>

<script type="text/javascript">
	$ipAddress = '192.168.0.8';	
	
	$(document).ready(function() {
		$('#logout').click(function(){ logout(); return false; });	
					
					
		// Pie Menu Item 1 ------------------------------------------------------------------------------------------------------------						
		$('#pieMenuItem1').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			var urlMI1 = 'http://'+$ipAddress+':8181/examples/servlets/servlet/taptasticServlet?id=4&classid='+classid+'&tagid='+tagid+'';
			
			$.ajax({
			datatype:'jsonp',
			async:false,
			type: 'GET',
			crossDomain: true,
			url:urlMI1,
			success:function(JSONData){
				var obj = jQuery.parseJSON(JSONData);
		        var json_obj = obj.record;
		        var giggs;
			   	for(var j in json_obj) {
				  if (json_obj[j].id === "9790886604")
				  	giggs = json_obj[j].count;
				}
				
			   	var htmlFall13 = '<table  border=1 width="100%"> <tr><td style="padding:8px;"><b>Student</b></td><td><b>Attendance</b></td></tr> <tr><td style="padding:3px;">Ryan Giggs</td><td>'+giggs+'</td> </tr><tr><td style="padding:3px;">Wayne Rooney</td><td>8</td></tr> <tr><td style="padding:3px;">Nemanja Vidic</td><td>7</td></tr> <tr><td style="padding:3px;">Micheal Carrick</td><td>10</td></tr> <tr><td style="padding:3px;">Robin Van Persie</td><td>6</td></tr> <tr><td style="padding:3px;">Rio Ferdinand</td><td>8</td></tr> <tr><td style="padding:3px;">Chris Smalling</td><td>12</td></tr> <tr><td style="padding:3px;">Shinji Kagawa</td><td>10</td></tr> <tr><td style="padding:3px;">David De Gea</td><td>15</td></tr> <tr><td style="padding:3px;">Tom Cleverly</td><td>15</td></tr> </table>';
			   	 	
				$("#title").html("FALL '13 STUDENT STATISTICS");
				$("#description").html(htmlFall13);
				$("#trailer").html("Total Students : 10");
			},
			error:function(){
			}
			
			});
		});
		
		// Pie Menu Item 2 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem2').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			var htmlSpring13 = '<table  border=1 width="100%"> <tr><td style="padding:8px;"><b>Student</b></td><td><b>Attendance</b></td></tr><tr> <td style="padding:3px;">Sir Alex Fergusson</td><td>15</td></tr> <tr><td style="padding:3px;">Ryan Giggs</td><td>5</td></tr> <tr><td style="padding:3px;">Wayne Rooney</td><td>8</td></tr> <tr><td style="padding:3px;">Nemanja Vidic</td><td>7</td></tr> <tr><td style="padding:3px;">Micheal Carrick</td><td>10</td></tr> <tr><td style="padding:3px;">Robin Van Persie</td><td>6</td></tr> <tr><td style="padding:3px;">Rio Ferdinand</td><td>8</td></tr> <tr><td style="padding:3px;">Chris Smalling</td><td>12</td></tr> <tr><td style="padding:3px;">Shinji Kagawa</td><td>10</td></tr> <tr><td style="padding:3px;">David De Gea</td><td>15</td></tr> <tr><td style="padding:3px;">Tom Cleverly</td><td>15</td></tr> </table>';
			
			$.ajax({
			datatype:JSON,
			async:false,
			url:'#',
			success:function(){
				var JSONData = '';
				
				$("#title").html("SPRING '13 STUDENT STATISTICS");
				$("#description").html(htmlSpring13);
				$("#trailer").html("Total Students : 11");
			}
			});
		});
		
		// Pie Menu Item 3 ------------------------------------------------------------------------------------------------------------
		$('#pieMenuItem3').click(function () {
			$("#classInfo").modal('show');
			
			var uscid = '28312983712';
			var classid = 'csci588';
			var tagid = '15c88912'
			
			var htmlMessage = '<div id="divmessage"><div style="float:left;"> <textarea id="textareamessage" class="enterCommentContactUs" placeholder="Description" required></textarea></div> <div style="float:left;margin-left:15px;"><a href="javascript:sendmsg();" class="btn-taptastic" id="messagesend" name="send">Send</a></div></div> <script> function sendmsg(){  var text = $("#textareamessage").val(); if(text===""){alert("Message Empty");}else{ alert("Message Sent");  $.ajax({ datatype:JSON, async:false, url:"http://"+$ipAddress+":8181/examples/servlets/servlet/taptasticServlet?id=5&classid=csci588&tagid=15c88912&post="+text+" ", success:function(){} });} } <\/script>';
				
			$("#title").html("BROADCAST MESSAGE");
			$("#description").html(htmlMessage);
			$("#trailer").html('<div style="clear:both;float:left;">*student will recieve the message when they tap or open app</div>');
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
			url:'#', //'http://'.$ipAddress.':8181/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
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
			url:'#', //'http://'.$ipAddress.':8181/examples/servlets/servlet/taptasticServlet?id=3&uscid='.uscid.'&classid='.classid.'&tagid='.tagid.'',
			success:function(){
				var JSONData = '';
				var html = '<table border=1 width="100%"><tr><td style="padding:8px;"><b>Team #</b></td><td><b>Team</b></td><td><b>Project</b></td></tr> <tr><td style="padding:3px;">01</td><td>Ryan Giggs,Wayne Rooney,Van Persie</td><td><a href="/Taptastic-Website/project.php">Boxed Wholesale, Android<a></td></tr><tr><td style="padding:3px;">02</td><td>Nemanja Vidic, Chris Smalling, Rio Ferdinand</td><td><a href="/Taptastic-Website/project.php">Edge: Quick Actions, Android</a></td></tr> <tr><td style="padding:3px;">03</td><td>Shinji Kagawa, Micheal Carrick</td><td><a href="/Taptastic-Website/project.php">Achvr, iOS</a></td></tr> <tr><td style="padding:3px;">04</td><td>David De Gea, Rafael</td><td><a href="/Taptastic-Website/project.php">PumpUp update, iOS</a></td></tr> <tr><td style="padding:3px;">05</td><td>Tom Cleverly, Nani, Phil Jones</td><td><a href="/Taptastic-Website/project.php">ToDoist update, iOS and Android</a></td></tr> </table>';
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
				$("#description").html("This awesome app is developed by </br></br> Akansha The Forgotten One </br></br> Karthik Srinivasan </br></br> Ameya Koshti </br></br>");
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