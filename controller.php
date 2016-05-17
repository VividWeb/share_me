<?php      

namespace Concrete\Package\ShareMe;
use Package;
use BlockType;
use SinglePage;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

	protected $pkgHandle = 'share_me';
	protected $appVersionRequired = '5.7.1';
	protected $pkgVersion = '0.9.1';
	
	
	
	public function getPackageDescription()
	{
		return t("Add Social Share Icons");
	}

	public function getPackageName()
	{
		return t("Share Me");
	}
	
	public function install()
	{
		$pkg = parent::install();
        $p1 = SinglePage::add('/dashboard/system/basics/share_settings/',$pkg);
        BlockType::installBlockTypeFromPackage('share_me', $pkg); 
        
	}
}
?>