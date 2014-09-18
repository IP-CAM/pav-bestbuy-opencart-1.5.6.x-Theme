<?php require( DIR_TEMPLATE.$this->config->get('config_template')."/template/common/config.tpl" ); ?>
<?php echo $header; ?>
<?php if( $SPAN[0] ): ?>
	<div class="span<?php echo $SPAN[0];?>">
	<?php echo $column_left; ?>
	</div>
<?php endif; ?>

		<div class="span<?php echo $SPAN[1];?>">
<div id="content"><?php echo $content_top; ?>
    <h2><?php echo $heading_payment; ?></h2>
        <div style="float: left" id="amazon-wallet-widget"></div>
        <div style="clear: both;"></div>
        <div class="buttons" style="margin-top: 15px">
            <a href="<?php echo $back ?>" class="button left"><span><?php echo $text_back ?></span></a>
            <a class="button right" id="continue-button"><span><?php echo $text_continue ?></span></a>
        </div>
        <input type="hidden" name="payment_method" value="" />
    <?php echo $content_bottom; ?>
</div>
<script type="text/javascript"><!--
    $(document).ready(function(){
        
        $('#continue-button').click(function(){
            $('div.warning').remove();
            
            if ($("input[name='payment_method']").val() == '1') {
                location = '<?php echo $continue ?>';
            } else {
                $('#amazon-wallet-widget').before('<div class="warning"><?php echo $error_payment_method ?></div>');
            }
        });
        
        new CBA.Widgets.WalletWidget({
            merchantId: '<?php echo $merchant_id ?>',
            displayMode: 'edit',
            onPaymentSelect: function(widget){
                $("input[name='payment_method']").val('1');
            }
            
        }).render('amazon-wallet-widget');
        
    });
//--></script>

	<?php if( $SPAN[2] ): ?>
	<div class="span<?php echo $SPAN[2];?>">	
		<?php echo $column_right; ?>
	</div>
	<?php endif; ?>
<?php echo $footer; ?>