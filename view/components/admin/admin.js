/**
 *  Arikaim
 *  
 *  @copyright  Copyright (c) Konstantin Atanasov <info@arikaim.com>
 *  @license    http://www.arikaim.com/license
 *  http://www.arikaim.com
 * 
 */

function ShareControlPanel() {
    var self = this;

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

arikaim.page.onReady(function() {
    shareControlPanel.init();
});