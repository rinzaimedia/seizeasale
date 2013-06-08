<?php include template("header");?>
<?php if(is_get()){?>
<div class="sysmsgw" id="sysmsg-error"><div class="sysmsg"><p>This Order has not finished payment,please repay</p><span class="close">Close</span></div></div>
<?php }?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="order-pay">
    <div id="content">
        <div id="deal-buy" class="box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head">
                    <h2>Total Due Today :<strong class="total-money">$ <?php echo moneyit($total_money); ?></strong> dollars</h2>
                </div>
                <div class="sect">
                    <div style="text-align:left;">
<?php if($order['service']=='credit'){?>
<form id="order-pay-credit-form" method="post" sid="<?php echo $order_id; ?>">
	<input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
	<input type="hidden" name="service" value="credit" />
	<input type="submit" class="formbutton gotopay" value="to to pay user remaining charge" />
</form>
<?php } else if($order['service']=='tenpay') { ?>
<form id="order-pay-form" method="post" sid="<?php echo $order_id; ?>" target="_blank">
	<input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
	<input type="hidden" name="reqUrl" value="<?php echo $reqUrl; ?>" />
	<input type="hidden" name="action" value="redirect" />
	<input type="submit" class="formbutton" value="goto tenpay" />
</form>
<?php } else if($order['service']=='alipay') { ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
<!-- Identify your business so that you can collect the payments. --> 
<input type="hidden" name="business" value="steve@obaku.tv"> 
<!-- Specify a Buy Now button. --> 
<input type="hidden" name="cmd" value="_xclick"> 
<!-- Specify details about the item that buyers will purchase. --> 
<input type="hidden" name="item_name" value=<?php echo $team['title']; ?>>
<input type="hidden" name="item_number" value="Seize A Deal">
 
<input type="hidden" name="amount" value="<?php echo $total_money; ?>"> 
<input type="hidden" name="currency_code" value="USD"> 
<input type="hidden" name="return"     value= "http://www.seizeadeal.com/index.php"  > 
<input type="hidden" name="notify_url" value= "http://www.seizeadeal.com/myipn.php"  > 
<!-- Display the payment button. --> 
<input type="image" name="submit" border="0" 
src="https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" 
alt="PayPal - The safer, easier way to pay online"> 
<img alt="" border="0" width="1" height="1" 
src="https://www.paypal.com/en_US/i/scr/pixel.gif" > 
</form> 
<?php } else if($order['service']=='paypal') { ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
<!-- Identify your business so that you can collect the payments. --> 
<input type="hidden" name="business" value="steve@obaku.tv"> 
<!-- Specify a Buy Now button. --> 
<input type="hidden" name="cmd" value="_xclick"> 
<!-- Specify details about the item that buyers will purchase. --> 
<input type="hidden" name="item_name" value=<?php echo $team['title']; ?>>
<input type="hidden" name="item_number" value="Seize a Sale">
 
<input type="hidden" name="amount" value="<?php echo $total_money; ?>"> 
<input type="hidden" name="currency_code" value="USD"> 
<input type="hidden" name="return"     value= "http://www.seizeasale.com/index.php"  > 
<input type="hidden" name="notify_url" value= "http://www.seizeasale.com/myipn.php"  > 
<!-- Display the payment button. --> 
<input type="image" name="submit" border="0" 
src="https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" 
alt="PayPal - The safer, easier way to pay online"> 
<img alt="" border="0" width="1" height="1" 
src="https://www.paypal.com/en_US/i/scr/pixel.gif" > 
</form> 
<?php } else if($order['service']=='alipay') { ?>


<?php }?>
						<div class="back-to-check"><a href="/order/check.php?id=<?php echo $order_id; ?>">&raquo; Return choose other ways to pay</a></div>
                    </div>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
    </div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
