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
     * @return boolean
    */
    public function install()
    {
        // Control Panel
        $this->addApiRoute('PUT','/api/share/admin/status','ShareControlPanel','setStatus','session');             
        // Db tables
        $this->createDbTable('ShareSchema');  
        $this->createDbTable('ShareOptionsSchema');
       
        return true;
    }
    
    /**
     * UnInstall
     *
     * @return boolean
     */
    public function unInstall()
    {
        $this->dropDbTable('ShareOptionsSchema');       
        $this->dropDbTable('ShareSchema');    
        
        return true;      
    }
}
