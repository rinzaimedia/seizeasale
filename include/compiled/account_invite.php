<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="referrals">
    <div id="content" class="refers">
        <div class="box clear">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>Invite get bonus</h2></div>
                <div class="sect islogin">
					<?php if($money){?>
					<p class="notice-total">You have successfully invited <strong><?php echo $count; ?></strong> ,totally get <strong><span class="money"><?php echo $currency; ?></span><?php echo $count*$INI['system']['invitecredit']; ?></strong> Coupon,<a href="/account/refer.php">check successful list</a>.</p>
					<?php }?>
					<p class="intro">when your friends get Your invitation,then buy on<?php echo $INI['system']['sitename']; ?>,system will give you money in 24 hours <?php echo $INI['system']['invitecredit']; ?> to Your <?php echo $INI['system']['sitename']; ?>account,when you Daily deal you can use it to pay,invite more,gain more.</p>
					<div class="share-links">
						<ul class="share-list cf">
							<li class="site">
								<a class="logo" href="javascript:void 0" id="referrals-share-others-link"><img src="/static/css/i/logo_msn.png" /></a>
								<p class="im">this is your invitatation link,use email, MSN Or oicq or skeyp send to your friend: <input id="share-copy-text" type="text" value="<?php echo $INI['system']['wwwprefix']; ?>/r.php?r=<?php echo $login_user_id; ?>" size="35" class="f-input" onfocus="this.select()" /></p>
							</li>
						</ul>
						<div class="refer-box">
							<div class="refer-box-top"></div>
							<div class="refer-box-content">
								<table class="deal-info">
									<td class="pic"><a href="/team.php?id=<?php echo $team['id']; ?>" target="_blank"><img src="<?php echo team_image($team['image']); ?>" width="150" height="90" /></a></td>
									<td class="deal-title"><?php echo $team['title']; ?></td>
								</table>
								<ul class="share-list">
									<li><a class="logo" href="<?php echo share_kaixin($team); ?>" target="_blank" title="开心网好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon"><img src="/static/css/i/logo_kaixin.gif" /></a><p class="link"><a href="<?php echo share_kaixin($team); ?>" target="_blank" title="开心网好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon">分享到开心网</a></p></li>
									<li><a class="logo" href="<?php echo share_renren($team); ?>" target="_blank" title="人人网好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon"><img src="/static/css/i/logo_renren.png" /></a><p class="link"><a href="<?php echo share_renren($team); ?>" target="_blank" title="人人网好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon">分享到人人网</a></p></li>
									<li><a class="logo" href="<?php echo share_sina($team); ?>" target="_blank" title="关注者点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon"><img src="/static/css/i/logo_sina.png" /></a><p class="link"><a href="<?php echo share_sina($team); ?>" target="_blank" title="关注者点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon">分享到新浪微博</a></p></li>
									<li><a class="logo" href="<?php echo share_douban($team); ?>" target="_blank" title="豆瓣网友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon"><img src="/static/css/i/logo_douban.gif" /></a><p class="link"><a href="<?php echo share_douban($team); ?>" target="_blank" title="豆瓣网友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon">分享到豆瓣</a></p></li>
									<li><a class="logo" href="<?php echo share_mail($team); ?>" target="_blank" title="好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon"><img src="/static/css/i/logo_email.gif" /></a><p class="link"><a href="<?php echo share_mail($team); ?>" target="_blank" title="好友点击链接并购买,您可获 <?php echo $INI['system']['invitecredit']; ?> Dollars Coupon">通过Email发给好友</a></p></li>
								</ul>
								<div class="clear"></div>
							</div>
							<div class="refer-box-bottom"></div>
						</div>
					</div>
				</div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
    <div id="sidebar">
		<?php include template("block_side_invitetip");?>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->
 
<?php include template("footer");?>
