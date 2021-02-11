<?php
namespace Rwinder98k\Module1\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'rwinder98k_module_new';
	protected $_cacheTag = 'rwinder98k_module_new';
	protected $_eventPrefix = 'rwinder98k_module_new';
	protected function _construct()
	{
		$this->_init('Rwinder98k\Module1\Model\ResourceModel\Post');
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}