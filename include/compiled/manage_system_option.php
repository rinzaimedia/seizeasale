<?php include template("manage_header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_system('option'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>Options</h2></div>
                <div class="sect">
                    <form method="post">
						<div class="wholetip clear"><h3>1. Navigation</h3></div>
						<div class="field">
                            <label>Forum</label>
							<select name="option[navforum]"><?php echo Utility::Option($option_yn, option_yesv('navforum')); ?></select>
                        </div>
						<div class="wholetip clear"><h3>2. Miscellaneous Settings</h3></div>
						<div class="field">
                            <label>Cart?</label>
							<select name="option[displayfailure]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('displayfailure')); ?></select><span class="inputtip">Whether to display the failed buy</span>
                        </div>
						<div class="field">
                            <label>All Q&A?</label>
							<select name="option[teamask]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('teamask')); ?></select><span class="inputtip">Whether to display all the Q & A part of the single, buy Item Q & A</span>
                        </div>
						<div class="field">
                            <label>Open SMS?</label>
							<select name="option[smssubscribe]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('smssubscribe')); ?></select><span class="inputtip">Whether to open the SMS subscribers buy information</span>
                        </div>
						<div class="wholetip clear"><h3>Registration Options</h3></div>
						<div class="field">
                            <label>E-Mail</label>
							<select name="option[emailverify]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('emailverify')); ?></select><span class="inputtip">User registration, must be the email address Verification</span>
                        </div>
						<div class="field">
                            <label>Verify Mobile</label>
							<select name="option[needmobile]" style="float:left;"><?php echo Utility::Option($option_yn, option_yesv('needmobile')); ?></select><span class="inputtip">User registration, must must enter a valid phone number</span>
                        </div>
						<div class="act">
                            <input type="submit" value="Save" name="commit" class="formbutton" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>

<div id="sidebar">
</div>

</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("manage_footer");?>
