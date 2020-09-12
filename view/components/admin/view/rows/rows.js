'use strict';

$(document).ready(function() {     
    safeCall('shareButtonsView',function(obj) {
        obj.initRows();
    },true);   
});    