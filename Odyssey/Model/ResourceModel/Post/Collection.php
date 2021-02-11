<?php
namespace Rwinder98k\Odyssey\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'rwinder98k_odyssey_post_collection';
	protected $_eventObject = 'post_collection';
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Rwinder98k\Odyssey\Model\Post', 'Rwinder98k\Odyssey\Model\ResourceModel\Post');
	}
}