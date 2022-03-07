<?php 
// Here is where the info-notice block configuration is retrieved

namespace Mastering\SampleModule\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;

class InfoNotice extends Template
{
    public function __construct(ScopeConfigInterface $scopeConfig, Template\Context $context,array $data = [])
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }


    public function getConfigurationData(){
        $pathOfConfig1 = "infonotice/general/enable";
        $pathOfConfig2 = "infonotice/general/display_text";

        // get the enabled state and text to display configuration values
        $enableConfigVal = $this->scopeConfig->getValue($pathOfConfig1, 
        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $displayTextConfigVal = $this->scopeConfig->getValue($pathOfConfig2, 
        \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        // return the text if the notice is enabled and the text isn't nothing
        if($enableConfigVal == 0){
            return false;
        }else if($displayTextConfigVal == ""){
            return false;
        }else{
            return $displayTextConfigVal;
        }
    }
}