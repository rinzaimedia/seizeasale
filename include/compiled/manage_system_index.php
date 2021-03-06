<?php include template("manage_header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_system('index'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>Basic info configuration</h2></div>
                <div class="sect">
                    <form method="post">
						<div class="wholetip clear"><h3>1,basic info</h3></div>
                        <div class="field">
                            <label>website name</label>
                            <input type="text" size="30" name="system[sitename]" class="f-input" value="<?php echo $INI['system']['sitename']; ?>"/>
                        </div>
                        <div class="field">
                            <label>website title</label>
                            <input type="text" size="30" name="system[sitetitle]" class="f-input" value="<?php echo $INI['system']['sitetitle']; ?>"/>
                        </div>
                        <div class="field">
                            <label>website abbreviation</label>
                            <input type="text" size="30" name="system[abbreviation]" class="f-input" value="<?php echo $INI['system']['abbreviation']; ?>"/>
                        </div>
                        <div class="field">
                            <label>coupon name</label>
                            <input type="text" size="30" name="system[couponname]" class="f-input" value="<?php echo $INI['system']['couponname']; ?>"/>
                        </div>
                        <div class="field">
                            <label>currency symbol(dollars,pounds,Yuan,etc)</label>
                            <input type="text" size="30" name="system[currency]" class="number" value="<?php echo $INI['system']['currency']; ?>"/>
						</div>
                        <div class="field">
                            <label>Invitation Coupon</label>
                            <input type="text" size="30" name="system[invitecredit]" class="number" value="<?php echo abs(intval($INI['system']['invitecredit'])); ?>"/>
							<span class="inputtip">Currnecy:Dollars </span>
						</div>
                        <div class="field">
                            <label>Email verification </label>
                            <input type="text" size="30" name="system[emailverify]" class="number" value="<?php echo abs(intval($INI['system']['emailverify'])); ?>"/>
							<span class="inputtip">1 EmailVerification ,0 不Verification </span>
						</div>
                        <div class="field">
                            <label>Right sidt daily deal ?</label>
                            <input type="text" size="30" name="system[sideteam]" class="number" value="<?php echo abs(intval($INI['system']['sideteam'])); ?>"/>
							<span class="inputtip">Number of Daily deal ,default value is 0</span>
							<span class="hint">at the rigth sied,show Others Daily deal item ?</span>
						</div>
						<div class="wholetip clear"><h3>2,Misc settings.</h3></div>
                        <div class="field">
                            <label>How to groupon</label>
                            <input type="text" size="30" name="system[conduser]" class="number" value="<?php echo abs(intval($INI['system']['conduser'])); ?>"/><span class="inputtip">1.succeed to reach to how many pay; 0.succeed to reach to how many quantity</span>
						</div>
                        <div class="field">
                            <label>coupon Download</label>
                            <input type="text" size="30" name="system[partnerdown]" class="number" value="<?php echo abs(intval($INI['system']['partnerdown'])); ?>"/><span class="inputtip">1 merchant can Download id and Password,0 merchant only can Download id</span>
						</div>
                        <div class="field">
                            <label>Open forum?</label>
                            <input type="text" size="30" name="system[forum]" class="number" value="<?php echo abs(intval($INI['system']['forum'])); ?>"/><span class="inputtip">1 Open,0 not open</span>
						</div>
                        <div class="field">
                            <label>Zip output</label>
                            <input type="text" size="30" name="system[gzip]" class="number" value="<?php echo abs(intval($INI['system']['gzip'])); ?>"/><span class="inputtip">1 zip,0 not zip</span>
							<span class="hint">zip can save bandwidth</span>
						</div>
						<div class="wholetip clear"><h3>3,helpdesk info</h3></div>
                        <div class="field">
                            <label>helpdesk oicq</label>
                            <input type="text" size="30" name="system[kefuqq]" class="f-input" value="<?php echo $INI['system']['kefuqq']; ?>"/>
						</div>
                        <div class="field">
                            <label>helpdesk MSN</label>
                            <input type="text" size="30" name="system[kefumsn]" class="f-input" value="<?php echo $INI['system']['kefumsn']; ?>"/>
						</div>
						<div class="wholetip clear"><h3>4,Others info</h3></div>
                        <div class="field">
                            <label>ICP id</label>
                            <input type="text" size="30" name="system[icp]" class="f-input" value="<?php echo $INI['system']['icp']; ?>"/>
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
