<?php
 
namespace Concrete\Package\ShareMe\Controller\SinglePage\Dashboard\System\Basics;
 
use \Concrete\Core\Page\Controller\DashboardPageController;
use Loader;
use Package;
use \Concrete\Core\Config\ConfigStore;
 
class ShareSettings extends DashboardPageController
{
    public function view() 
    {
        $pkg = Package::getByHandle('share_me');
        $pubkey = $pkg->getConfig()->get('shareme.pubkey');
        $this->set('pubkey',$pubkey);
    }
    public function success()
    {
        $this->set("success","Publisher Key Saved");
        $this->view();
    }   
    public function save() 
    {
        $pkg = Package::getByHandle('share_me');
        $pkg->getConfig()->save('shareme.pubkey', $this->post('pubkey'));  
        $this->success(); 
    }
 
}
?>
 