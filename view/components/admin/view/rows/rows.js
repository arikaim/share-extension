'use strict';

arikaim.component.onLoaded(function() {   
    safeCall('shareButtonsView',function(obj) {
        obj.initRows();
    },true);   
});    