<?php
namespace Rwinder98k\Module1\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
	protected $_postFactory;
	public function __construct(\rwinder98k\Module1\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
            'name' => "aravind",
            'age'=> "21",
			'content' => "Hi im aravind i like magento.",
			
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}