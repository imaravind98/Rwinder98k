<?php
namespace Rwinder98k\Module1\Setup;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;
	public function __construct(\Rwinder98k\Module1\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
                'name' => "aravind",
                'age'=> "21",
                'content' => "Hi im aravind i like magento.",
                
            ];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
		
	}
}