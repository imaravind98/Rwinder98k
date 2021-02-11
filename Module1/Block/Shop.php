<?php

namespace Rwinder98k\Module1\Block;

class Shop extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data =[]
    ){
        $this->_storeManager = $storeManager;
        parent::__construct($context,$data);
    }
    public function getStoreId(){
        return $this->_storeManager->getStore()->getId();
    } 
    public function getWebId(){
        return $this->_storeManager->getStore()->getWebsiteId();
    }
    public function getStoreCode(){
        return $this->_storeManager->getStore()->getCode();
    }

}
?>