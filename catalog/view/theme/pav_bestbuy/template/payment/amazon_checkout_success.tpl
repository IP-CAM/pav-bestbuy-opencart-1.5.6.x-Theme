<?php require( DIR_TEMPLATE.$this->config->get('config_template')."/template/common/config.tpl" ); ?>
<?php echo $header; ?>
<?php if( $SPAN[0] ): ?>
	<div class="span<?php echo $SPAN[0];?>">
	<?php echo $column_left; ?>
	</div>
<?php endif; ?>

		<div class="span<?php echo $SPAN[1];?>">
<div id="content"><?php echo $content_top; ?>
    <h2><?php echo $heading_title; ?></h2>
    <p><?php echo $text_payment_success ?></p>
    <div id="AmazonOrderDetail"></div>
    <?php echo $content_bottom; ?>
</div>
<script type="text/javascript"><!--
    new CBA.Widgets.OrderDetailsWidget ({
        merchantId: "<?php echo $merchant_id ?>",
        orderID: "<?php echo $amazon_order_id ?>"
    }).render ("AmazonOrderDetail");
//--></script>

	<?php if( $SPAN[2] ): ?>
	<div class="span<?php echo $SPAN[2];?>">	
		<?php echo $column_right; ?>
	</div>
	<?php endif; ?>
<?php echo $footer; ?>