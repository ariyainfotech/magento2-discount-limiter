<?php

namespace AriyaInfoTech\DiscountLimit\Block\Adminhtml\System\Config\Form\Fieldset;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use AriyaInfoTech\DiscountLimit\Model\Config\ModuleMetadata;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;

/**
 * @category   AriyaInfoTech
 * @package    AriyaInfoTech_DiscountLimit
 * @author     Yuvraj Raulji <info@ariyainfotech.com>
 * @website    https://www.ariyainfotech.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Support extends Template implements RendererInterface
{
    /**
     * @var string
     */
    protected $_template = 'AriyaInfoTech_DiscountLimit::system/config/form/fieldset/support.phtml';

    /**
     * @var ModuleMetadata
     */
    protected $moduleMetadata;

    public function __construct(
        Context $context,
        ModuleMetadata $moduleMetadata,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleMetadata = $moduleMetadata;
    }

    /**
     * @param AbstractElement $element
     * @return mixed
     */
    public function render(AbstractElement $element)
    {
        return $this->toHtml();
    }

    public function getMageVersion()
    {
        $mageVersion = $this->moduleMetadata->getMageVersion();
        $mageEdition = $this->moduleMetadata->getMageEdition();
        switch ($mageEdition) {
            case 'Community':
                $mageEdition = 'CE';
                break;
            case 'Enterprise':
                $mageEdition = 'EE';
                break;
        }

        return $mageEdition . ' ' . $mageVersion;
    }

    public function getModuleVersion()
    {
        return $this->moduleMetadata->getVersion();
    }

    public function getExtensionName()
    {
        return $this->moduleMetadata->getName();
    }

    public function getPlatform()
    {
        return $this->moduleMetadata->getPlatformShort();
    }
}
