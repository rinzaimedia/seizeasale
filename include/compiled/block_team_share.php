<div id="deal-share">
	<div class="deal-share-top">
		<div class="deal-share-links">
			<h4>Share to:</h4>
			<ul class="cf"><li>
                    <a class="im" href="javascript:void(0);" id="deal-share-im">MSN/QQ</a>
                </li><li>
                    <a class="kaixin" href="<?php echo share_facebook($team); ?>" target="_blank">Facebook</a>
                </li><li>
                    <a class="renren" href="<?php echo share_twitter($team); ?>" target="_blank">Twitter</a>
                </li><li>
                    <!-- Place this tag where you want the share button to render. -->
                    <div class="g-plus" data-action="share" data-annotation="none" data-height="15"></div>

                    <!-- Place this tag after the last share tag. -->
                    <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                    </script>&nbsp;&nbsp;
                </li><li>
                    <a class="email" href="<?php echo share_mail($team); ?>" id="deal-buy-mailto">Email</a>
                </li></ul>
		</div>
	</div>
	<div class="deal-share-fix"></div>
	<div id="deal-share-im-c">
		<div class="deal-share-im-b">
			<h3>Copy it and sent through MSN or ICQ:</h3>
			<p><input id="share-copy-text" type="text" value="<?php echo $INI['system']['wwwprefix']; ?>/team.php?id=<?php echo $team['id']; ?>&r=<?php echo $login_user_id; ?>" size="30" class="f-input" tip="复制成功,请粘贴到Your MSN或QQ上推荐给Your 好友"/> <input id="share-copy-button" type="button" value="复制" class="formbutton" /></p>
		</div>
	</div>
</div>
