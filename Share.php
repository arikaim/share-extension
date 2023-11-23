<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Extensions\Share;

use Arikaim\Core\Extension\Extension;

/**
 * Share buttons extension
*/
class Share extends Extension
{
    /**
     * Install extension routes, events, jobs ..
     *
     * @return void
    */
    public function install()
    {
        // Control Panel
        $this->addApiRoute('PUT','/api/admin/share/status','ShareControlPanel','setStatus','session');                     
        // Db tables
      //  $this->createDbTable('ShareOptionTypeSchema');
      ///  $this->createDbTable('ShareOptionsListSchema');
        $this->createDbTable('ShareButtonsSchema');  
      //  $this->createDbTable('ShareOptionsSchema');
    }
    
    /**
     * UnInstall
     *
     * @return void
     */
    public function unInstall()
    {         
    }
}
