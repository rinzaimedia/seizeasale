<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="about">
	<div class="dashboard" id="dashboard">
		<ul><?php echo current_about('privacy'); ?></ul>
	</div>
	<div id="content" class="about clear">
		<div class="box clear"> 
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>Privacy</h2></div>
                <div class="sect"><?php echo $page['value']; ?></div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
