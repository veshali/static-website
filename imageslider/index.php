<script type="text/javascript" src="SlideShow/jquery.min.js"></script>
        <!-- include Cycle plugin -->
        <script type="text/javascript" src="SlideShow/jquery.cycle.all.2.74.js"></script>
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
        
        
        
        <div id="s1">
<?php
$query=mysql_query("SELECT * from slidepics");
while($slidepic=mysql_fetch_array($query))
{
?>
<img src="SlidePictures/<?php echo $slidepic['ImgName']?>" height="400" width="960" />
<?php } ?>
</div>
