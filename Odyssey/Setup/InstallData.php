<?php
namespace Rwinder98k\Odyssey\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
	protected $_postFactory;
	public function __construct(\Rwinder98k\Odyssey\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
            'name' => "aravind",
            'age'=> "21",
			'message' => "Hi im aravind i like magento.",
			
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}