<?php
namespace LeSite\CustomBar\Block;

class Index extends \Magento\Framework\View\Element\Template
{
  protected $_customerSession;
  protected $_customerGroupCollection;
  protected $_dataHelper;

  public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \Magento\Customer\Model\SessionFactory $customerSession,
      \Magento\Customer\Model\Group $customerGroupCollection,
      \LeSite\CustomBar\Helper\Data $dataHelper,
      array $data = []
  ) {
      $this->_customerSession = $customerSession->create();
      $this->_customerGroupCollection = $customerGroupCollection;
      $this->_dataHelper = $dataHelper;
      parent::__construct($context, $data);
  }

  /**
  * @return string
  */
  public function getCustomerGroup()
  {
    $groupId = $this->_customerSession->getCustomer()->getGroupId();
    $groupData = $this->_customerGroupCollection->load($groupId);
    
    return $groupData->getCustomerGroupCode();
  }

  /**
  * @return boolean
  */
  public function isModuleEnabled()
  {
    return $this->_dataHelper->isModuleEnabled();
  }
}
