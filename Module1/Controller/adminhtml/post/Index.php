<?php
namespace Rwinder98k\Module1\Controller\Adminhtml\Post;
class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}
	protected function someControllerMethod(){
		return $this->_authorization->isAllowed('Rwinder98k_Module1::post');
	}
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Posts')));
		return $resultPage;
	}
}

