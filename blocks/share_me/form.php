<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php if(!$pubkey){ ?>
<div class="well">
    <?=t('You do not have the publisher key set. Navigate to')?> <a href="<?=View::url('/dashboard/system/basics/share_settings');?>"><?=t('Social Settings')?></a> <?=t('to set the publisher key.')?>
</div>
<?php } ?>
<div class="form-group">
    <label for="style"><?=t('Button Style');?> <small>(<a target="_blank" href="http://addons.market.isitvivid.com/block-examples/share-me"><?=t('examples')?></a>)</small></label>
    <?php 
    echo $form->select('style', 
    array(
        "buttons"=>t("Simple Icons"),
        "buttonshorz"=>t("Horizontal Buttons"),
        "buttonsvert"=>t("Vertical Buttons")
    ), $style); 
    ?>
</div>
<fieldset>
    <legend><?=t('Choose Networks to Show')?></legend>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('facebook',1,$facebook); ?>
            Facebook
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('twitter',1,$twitter); ?>
            Twitter
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('google',1,$google); ?>
            Google+
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('linkedin',1,$linkedin); ?>
            LinkedIn
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('pinterest',1,$pinterest); ?>
            Pinterest
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('email',1,$email); ?>
            <?=t('Email')?>
        </label>
    </div>
    <div class="checkbox">
        <label>
            <?php echo $form->checkbox('shareThis',1,$shareThis); ?>
            <?=t('Share This')?>
        </label>
    </div>
</fieldset>