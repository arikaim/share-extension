<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c) 2016-2018 Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license.html
 * 
*/
namespace Arikaim\Extensions\Share;

use Arikaim\Core\Packages\Extension\Extension;

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
      //  $this->addApiRoute('POST','/api/rating/admin/add','RatingControlPanel','add','session');      
       // $this->addApiRoute('DELETE','/api/rating/admin/delete/{uuid}','RatingControlPanel','delete','session');          
        // Create db tables
        
        $this->createDbTable('ShareSchema');  
        $this->createDbTable('ShareOptionsSchema');
       
        return true;
    }
    
    public function unInstall()
    {
        $this->dropDbTable('ShareOptionsSchema');       
        $this->dropDbTable('ShareSchema');          
    }
}
