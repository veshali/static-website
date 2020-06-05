<html>
<head>
<title>slideshow</title>
<script type="text/javascript" src="jquery.min.js"></script>
        <!-- include Cycle plugin -->
        <script type="text/javascript" src="jquery.cycle.all.2.74.js"></script>
        <!--  initialize the slideshow when the DOM is ready -->
        <script type="text/javascript">
            $(document).ready(function() {
               $('#s1').cycle({
		       fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle,zoom ,turnDown,curtainX ,scrollRight (click),    blindX
	           speed:500, 
               timeout:3000 
				});
               });
        </script>
</head>
<body>        
<div id="s1">
<img src="first_batch_1973_small.jpg" height="400" width="960" />
<img src="photo_gallery.jpg" height="400" width="960" />
<img src="tenders.jpg" height="400" width="960" />
<img src="training_placement.jpg" height="400" width="960" />
<img src="recruitment.jpg" height="400" width="960" />
</div>
</body>
</html>