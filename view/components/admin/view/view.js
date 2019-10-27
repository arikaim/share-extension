/**
 *  Arikaim
 *  
 *  @copyright  Copyright (c) Konstantin Atanasov <info@arikaim.com>
 *  @license    http://www.arikaim.com/license.html
 *  http://www.arikaim.com
 * 
 *  Extension: Share
 *  Component: share::admin.view
*/

function ShareButtonsView() {
    var self = this;

    this.init = function() {
        paginator.init('share_rows');    
    };

    this.initRows = function() {    

        $('.status-dropdown').dropdown({
            onChange: function(value) {
                var uuid = $(this).attr('uuid');
                shareControlPanel.setStatus(uuid,value);               
            }
        });

        arikaim.ui.button('.settings-button',function(element) {
            var uuid = $(element).attr('uuid');
            arikaim.ui.setActiveTab('#share_settings');

            arikaim.page.loadContent({
                id: 'tab_content',
                component: 'share::admin.settings',
                params: { uuid: uuid }
            }); 
        });
    }
}

var shareButtonsView = new ShareButtonsView();

arikaim.page.onReady(function() {
    shareButtonsView.init();   
});