<?php defined('C5_EXECUTE') or die(_("Access Denied."));  ?>
<?php if($facebook){?>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<?php } ?>
<?php if($twitter){?>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<?php } ?>
<?php if($google){?>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<?php } ?>
<?php if($linkedin){?>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<?php } ?>
<?php if($pinterest){?>
<span class='st_pinterest_hcount' displayText='Pinterest'></span>
<?php } ?>
<?php if($email){?>
<span class='st_email_hcount' displayText='Email'></span>  
<?php } ?>
<?php if($shareThis){?>
<span class='st_sharethis_hcount' displayText='ShareThis'></span> 
<?php } ?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "<?=$pubkey?>", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>