<?php defined('C5_EXECUTE') or die("Access Denied.");?>

    <form method="post" class="form-horizontal" action="<?=$view->action('save')?>">
        
        <div class="well bg-info">
            <?php echo t("You'll need a ShareThis publisher key. In order to get this, sign up at");?><a href="http://sharethis.com" target="_blank">http://sharethis.com</a>, <?=t('and grab your Publisher key from you account area.');?>
        </div>
        
        <div class="form-group">
            <?php echo $form->label('pubkey', t('Publisher Key'), array('class' => 'col-md-2'))?>
            <div class="col-md-5">
                <?php echo $form->text('pubkey', $pubkey)?>
            </div>
        </div>
        
        <div class="ccm-dashboard-form-actions-wrapper">
            <div class="ccm-dashboard-form-actions">
                <button class="pull-right btn btn-success" type="submit" ><?php echo t('Save ShareThis Key');?></button>
            </div>
        </div>

    </form>
   