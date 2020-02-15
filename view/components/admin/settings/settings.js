'use strict';

$(document).ready(function() {
    $('#share_dropdown').dropdown({
        onChange: function(value) {
            arikaim.ui.show('#options_content');
            arikaim.page.loadContent({
                id: 'options_content',
                component: 'system:admin.orm.options.form',
                params: { 
                    extension: 'share',
                    model: 'ShareOptions',
                    id: value 
                }
            },function(result) {
                ormOptions.initEditForm();
            }); 
        }
    });   
});