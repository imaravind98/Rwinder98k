<?php 
namespace Rwinder98k\Module1\Block\Widget;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Posts extends Template implements BlockInterface {
	protected $_template = "Widget/posts.phtml";
}