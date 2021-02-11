<?php 

namespace Rwinder98k\Module1\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * Render block HTML
     * 
     * @return string
     */
    protected function _toHtml()
    {
        if(false != $this->getTemplate()){
            return parent::_toHtml();
        }
        return '<li><a ' .$this->getLinkAttributes().' >'.$this->getLabel().'</a></li>';
    }
} 
?>