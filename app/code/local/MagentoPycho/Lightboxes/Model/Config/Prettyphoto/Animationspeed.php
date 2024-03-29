<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Prettyphoto_Animationspeed
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'fast','label' => Mage::helper('lightboxes')->__('fast')),
            array('value'=>'slow','label' => Mage::helper('lightboxes')->__('slow')),
            array('value'=>'normal','label' => Mage::helper('lightboxes')->__('normal')),
        );
    }
}