<?php

namespace AriyaInfoTech\DiscountLimit\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * @category   AriyaInfoTech
 * @package    AriyaInfoTech_DiscountLimit
 * @author     Yuvraj Raulji <info@ariyainfotech.com>
 * @website    https://www.ariyainfotech.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Config implements ConfigInterface
{
    const XML_PATH_ENABLED = 'AriyaInfoTech_DiscountLimit/general/enabled';
    const XML_PATH_DEBUG = 'AriyaInfoTech_DiscountLimit/general/debug';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritDoc
     */
    public function getConfigFlag($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->isSetFlag(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * @inheritDoc
     */
    public function getConfigValue($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function isEnabled($storeId = null)
    {
        return $this->getConfigFlag(self::XML_PATH_ENABLED, $storeId);
    }

    public function isDebugEnabled($storeId = null)
    {
        return $this->getConfigFlag(self::XML_PATH_DEBUG, $storeId);
    }
}
