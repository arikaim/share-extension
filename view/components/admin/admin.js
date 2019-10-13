/**
 *  Arikaim
 *  @version    1.0  
 *  @copyright  Copyright (c) Konstantin Atanasov <info@arikaim.com>
 *  @license    http://www.arikaim.com/license.html
 *  http://www.arikaim.com
 * 
 *  Extension: Share
 *  Component: share:admin
 */

function ShareControlPanel() {
    var self = this;

    this.delete = function(uuid,onSuccess,onError) {
        return arikaim.delete('/api/share/admin/delete/' + uuid, onSuccess, onError);          
    };

    this.setStatus = function(data,onSuccess,onError) {
        return arikaim.post('/api/share/admin/status',data, onSuccess, onError);          
    };

    this.loadAddTag = function() {
      //  arikaim.ui.setActiveTab('#add_tag','.tags-tab-item')   
        arikaim.page.loadContent({
            id: 'tags_content',
            component: 'tags::admin.add',
            params: { language: language }
        });          
    };

    this.init = function() {    
        arikaim.ui.tab('.share-tab-item');
    };
}

var shareControlPanel = new ShareControlPanel();

arikaim.page.onReady(function() {
    shareControlPanel.init();
});