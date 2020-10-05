<?php
namespace Customer\Test\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    protected function _construct()
    {
        $this->_init(
            'Customer\Test\Model\Test',
            'Customer\Test\Model\ResourceModel\Test'
        );
    }
}