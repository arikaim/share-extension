/**
 *  Arikaim
 *  
 *  @copyright  Copyright (c) Konstantin Atanasov <info@arikaim.com>
 *  @license    http://www.arikaim.com/license.html
 *  http://www.arikaim.com
 * 
 *  Extension: Share
 *  Component: share:admin
 */

function ShareControlPanel() {
    var self = this;

    this.setStatus = function(uuid, status, onSuccess, onError) { 
        var data = { status: status, uuid: uuid };
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