<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Piroboxextended_Themes
{
    public function toOptionArray()
    {

        return array(
            array('value'=>'style_1','label' => Mage::helper('lightboxes')->__('Style')),
            array('value'=>'style_2','label' => Mage::helper('lightboxes')->__('Style')),
        );
    }
}