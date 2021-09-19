'use strict';

arikaim.component.onLoaded(function() {
    $('#facebook_share_button').on('click', function () {     
        var url = window.location.href;
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
            'facebook-share-dialog',
            'width=800,height=600'
        );      
    });
});