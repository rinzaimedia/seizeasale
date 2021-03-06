<?php include template("manage_header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_market('sms'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>SMS push</h2></div>
                <div class="sect">
                    <form method="post" class="validator">
                        <div class="field">
                            <label>Mobile number</label>
							<div style="float:left;"><textarea cols="45" rows="5" name="phones" class="f-textarea" datatype="require" require="true"><?php echo htmlspecialchars($_POST['phones']); ?></textarea></div>
							<span class="hint">use blank or , to seperate mutiple Mobile numbers,each time you can send 300 times to different mobile number</span>
                        </div>

                        <div class="field">
                            <label>SMS content</label>
							<div style="float:left;"><textarea id="sms-content-id" cols="45" rows="5" name="content" class="f-textarea" datatype="require" require="true" onkeyup='return X.misc.smscount();'><?php echo htmlspecialchars($_POST['content']); ?></textarea></div>
							<span class="hint">in 70 characters &nbsp;<span id="span-sms-length-id" style="color:red;font-weight:bold;font-size:14px;">0</span>&nbsp;&nbsp;<span id="span-sms-split-id" style="color:red;font-weight:bold;font-size:14px;">0</span>&nbsp; SMS</span>
                        </div>

                        <div class="act">
                            <input type="submit" value="Send" name="commit" class="formbutton"/>
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
