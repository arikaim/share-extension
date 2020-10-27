<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Extensions\Share\Controllers;

use Arikaim\Core\Controllers\ControlPanelApiInterface;
use Arikaim\Core\Controllers\ControlPanelApiController;
use Arikaim\Core\Controllers\Traits\Status;

/**
 * Share control panel controler
*/
class ShareControlPanel extends ControlPanelApiController implements ControlPanelApiInterface
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
     * @param Container|null $container
     * @return void
     */
    public function __construct($container = null)
    {
        parent::__construct($container);
        
        $this->setExtensionName('share');
        $this->setModelClass('Share');
    }
}
