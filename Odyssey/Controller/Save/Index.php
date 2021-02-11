<?php
namespace Rwinder98k\Odyssey\Controller\Save;
use Magento\TestFramework\ErrorLog\Logger;
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}
	public function execute()
	{
		$resultRedirect = $this->resultRedirectFactory->create();
		$post = $this->getRequest()->getPostValue();
		if($post){
			$model = $this->_objectManager->create('Rwinder98k\Odyssey\Model\Post');
			$model->setData($post);
			$this->_eventManager->dispatch(
                'blog_post_prepare_save',
                ['post' => $model, 'request' => $this->getRequest()]
			);
			try {
                $model->save();
                $this->messageManager->addSuccess(__('You saved this Post.'));
              
                return $resultRedirect->setPath('*/form');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the post.'));
            }
		}
		return $resultRedirect->setPath('*/form');
	}
}

		
		