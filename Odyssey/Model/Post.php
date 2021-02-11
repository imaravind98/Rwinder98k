<?php
namespace Rwinder98k\Odyssey\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'Odyssey_new';
	protected $_cacheTag = 'Odyssey_new';
	protected $_eventPrefix = 'Odyssey_new';
	protected function _construct()
	{
		$this->_init('Rwinder98k\Odyssey\Model\ResourceModel\Post');
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