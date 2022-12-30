/**
 *  Arikaim
 *  @copyright  Copyright (c)  <info@arikaim.com>
 *  @license    http://www.arikaim.com/license
 *  http://www.arikaim.com
 */
'use strict';

function ShareControlPanel() {
  
    this.setStatus = function(uuid, status, onSuccess, onError) { 
        var data = { 
            status: status,
            uuid: uuid 
        };
        
        return arikaim.put('/api/share/admin/status',data,onSuccess,onError);           
    };

    this.init = function() {    
        arikaim.ui.tab();
    };
}

var shareControlPanel = new ShareControlPanel();

arikaim.component.onLoaded(function() {
    shareControlPanel.init();
});