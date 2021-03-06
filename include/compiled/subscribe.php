<?php include template("header");?>
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="maillist">
	<div id="content">
        <div class="box">
            <div class="box-top"></div>
            <div class="box-content welcome">
				<div class="head">
					 <h2>Email subscribe</h2>
				</div>
                <div class="sect">
					<div class="lead"><h4>In <?php echo $city['name']; ?> Everyday's daily deal will be sent to your email box.</h4></div>
					<div class="enter-address">
						<p>subscribe,never miss any surprise.</p>
						<div class="enter-address-c">
						<form id="enter-address-form" action="/subscribe.php" method="post" class="validator">
						<div class="mail">
							<label>Email address:</label>
							<input id="enter-address-mail" name="email" class="f-input f-mail" type="text" value="<?php echo $login_user['email']; ?>" size="20" require="true" datatype="email" />
							<span class="tip">Please don't worry,we hate spam email</span>
						</div>
						<div class="city">
							<label>&nbsp;</label>
							<select name="city_id" class="f-city"><?php echo Utility::Option(Utility::OptionArray($hotcities, 'id', 'name'), $city['id']); ?></select>
							<input id="enter-address-commit" type="submit" class="formbutton" value="Subscribe" />
						</div>
						</form>
					</div>
					<div class="clear"></div>
				</div>
				<div class="intro">
					<p>Daily deal includes:</p>
					<p>restaurant,club,KTV,SPA,hair salon,gym,Yogo,arts show,cinema,etc.</p>
				</div>
			</div>
		</div>
		<div class="box-bottom"></div>
	</div>
</div>
<div id="sidebar">
	<div class="side-pic">
	   <p><img src="/static/img/subscribe-pic1.jpg" /></p> 
	   <p><img src="/static/img/subscribe-pic2.jpg" /></p> 
	   <p><img src="/static/img/subscribe-pic3.jpg" /></p> 
	</div>
</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
