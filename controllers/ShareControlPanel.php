<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) 2016-2018 Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license.html
 * 
*/
namespace Arikaim\Extensions\Share\Controllers;

use Arikaim\Core\Db\Model;
use Arikaim\Core\Controllers\ApiController;
use Arikaim\Core\Tratis\Controller\Status;

/**
 * Share control panel controler
*/
class ShareControlPanel extends ApiController
{
    use Status;

    /**
     * Init controller
     *
     * @return void
     */
    public function init()
    {
        $this->loadMessages('share::admin.messages');
    }

    /**
     * Constructor
     *
     * @return void
     */
    public function __cosntruct()
    {
        parent::__cosntruct();
        $this->setExtensionName('share');
        $this->setModelName('Share');
    }
}
