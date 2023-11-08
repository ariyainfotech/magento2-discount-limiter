<?php

namespace AriyaInfoTech\DiscountLimit\Logger;

use Magento\Framework\Logger\Handler\Base;

/**
 * @category   AriyaInfoTech
 * @package    AriyaInfoTech_DiscountLimit
 * @author     Yuvraj Raulji <info@ariyainfotech.com>
 * @website    https://www.ariyainfotech.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/AriyaInfoTech_DiscountLimit.log';

    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;
}
