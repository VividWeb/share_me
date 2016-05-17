<?php
namespace Concrete\Package\ShareMe\Block\ShareMe;
use \Concrete\Core\Block\BlockController;
use Loader;
use Package;

defined('C5_EXECUTE') or die(_("Access Denied.")); 
class Controller extends BlockController
{
    protected $btTable = 'btShareMe';
    protected $btInterfaceWidth = "400";
    protected $btWrapperClass = 'ccm-ui';
    protected $btInterfaceHeight = "365";

    public function getBlockTypeDescription()
    {
        return t("Add Social Share Icons & Buttons");
    }

    public function getBlockTypeName()
    {
        return t("Share Me");
    }
    public function add(){
        $this->getPubKey();
    }
    public function edit(){
        $this->getPubKey();
    }
    public function view(){
        $this->getPubKey();
    }
    public function getPubKey(){
        $pkg = Package::getByHandle('share_me');
        $pubkey = $pkg->getConfig()->get('shareme.pubkey');
        $this->set('pubkey',$pubkey);
    }
    public function save($args)
    {
        $args['facebook'] = isset($args['facebook']) ? 1 : 0;      
        $args['twitter'] = isset($args['twitter']) ? 1 : 0;      
        $args['google'] = isset($args['google']) ? 1 : 0;      
        $args['linkedin'] = isset($args['linkedin']) ? 1 : 0;      
        $args['pinterest'] = isset($args['pinterest']) ? 1 : 0;     
        $args['email'] = isset($args['email']) ? 1 : 0;     
        $args['shareThis'] = isset($args['shareThis']) ? 1 : 0;       
        parent::save($args);        
        $blockObject = $this->getBlockObject();
        if (is_object($blockObject)) {
            $blockObject->setCustomTemplate($args['style']);
        }
    }
}