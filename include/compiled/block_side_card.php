<div class="sbox">
	<div class="sbox-top"></div>
	<div class="sbox-content">
		<div class="cardcode">
			<h2>Do you have coupon?</h2>
			<p>At most it can be:<span class="current"><?php echo $currency; ?></span><?php echo $team['card']; ?></p>
			<p>Using coupon  no change </p>
			<a href="javascript:void(0);" id="cardcode-link">click input coupon number</a>
			<p id="cardcode-link-t" class="act">
				<input id="cardcode-card-id" class="f-input" type="text" name="cardcode" maxLength="16" style="text-transform:uppercase;" />
				<input id="cardcode-order-id" type="hidden" name="order_id" value="<?php echo $order['id']; ?>"/>
				<input id="cardcode-verify-id" type="button" class="formbutton" value="OK" />
			</p>
		</div>
	</div>
	<div class="sbox-bottom"></div>
</div>
