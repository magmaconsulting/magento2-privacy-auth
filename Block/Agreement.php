<?php
/**
 * Block for managing selected agreement data
 */
namespace Magma\PrivacyAuth\Block;

/**
 * Block for managing selected agreement data
 */
class Agreement extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magma\PrivacyAuth\Model\Agreement
     */
    protected $agreement;

    /**
     * @var \Magma\PrivacyAuth\Model\Page
     */
    protected $page;

    /**
     * Agreement constructor
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magma\PrivacyAuth\Model\Agreement                  $agreement
     * @param \Magma\PrivacyAuth\Model\Page                       $page
     * @param array                                            $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magma\PrivacyAuth\Model\Agreement $agreement,
        \Magma\PrivacyAuth\Model\Page $page,
        array $data = []
    ) {
        $this->agreement = $agreement;
        $this->page = $page;
        parent::__construct($context, $data);
    }

    /**
     * Selected agreement getter
     * @return \Magma\PrivacyAuth\Model\Agreement
     */
    public function getAgreement()
    {
        return $this->agreement->getSelected();
    }
}
