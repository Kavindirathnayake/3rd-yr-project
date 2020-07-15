<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<style type"text/css">

#outer{
	width:940px;
	margin:auto;
	min-height:600px;
	border:1px solid #000;	
	position:relative;
	z-index:2;
}
#ad-container{
	width:940px;
	margin:auto;
	position:fixed;
	top:20px;
	left:0;
	right:0;	
}
.ad-left{
	float:left;
	width:160px;
	height:600px;
	background:red;
	margin-left:-170px;
}
.ad-right{
	float:right;
	width:160px;
	height:600px;
	background:red;
	margin-right:-170px;
}
.container {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.container .btn {
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:  #ffff66;
  color: black;
  font-size: 18px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn:hover {
  background-color: pink;
}
</style>
</head>

<body>
<div id="outer">
<body>
<div class="container">
  <img  src="images/is.jpg" alt="Snow"
  style="width:100%">
    <a href="{{ url('admin') }}"  class="btn" > Student Details</a>   
   
</div> 
<h1><b><span style="color:#FF0000;text-align:center;">USER REGISTRATION</h1></span</b>
<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users =  <?php echo json_encode($users) ?>;
    var registry =  <?php echo json_encode($registry) ?>;
    Highcharts.chart('container', {
        title: {
            text: 'New User registration Growth'
        },
         
        chart: {
            type: 'column'
        },
         xAxis: {
            categories: [ 'Jun', 'Jul','Aug','Sep','Oct','Nov','Dec','Jan','Feb','Mar','Apr','May']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
         
        
        series: [{
            name: 'user registration as a student',
            data: registry 
        }, {
            name: 'users',
            data: users
        }]
         
});
</script>	 
</div>
<div id="ad-container">
		<div class="ad-left"> </div>
		<div class="ad-right"> </div>
</div>
</body>
</html>