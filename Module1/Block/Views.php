<?php 
namespace Rwinder98k\Module1\Block;
class Views extends \Magento\Framework\View\Element\Template
{  
    protected $_pagefactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Rwinder98k\Module1\Model\PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }
    public function getPostCollection(){
        $post=$this->_postFactory->create();
        return $post->getCollection();
    }
}
?>