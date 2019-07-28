/*(function(){
    var wc=window.console;
    delete window.console;
    window.__defineGetter__("console", function(){
        return wc;
        });

    window.__defineSetter__("console", function(val){
        throw('error!');  // Look at js stack when throwed
        });
})();*/


jQuery( document ).ready(function() {
    var selectedDownload = -1;
    var downloadUrl = '';
    jQuery('body').on('click', '.software-download', function(e){
        e.preventDefault();
        selectedDownload = jQuery(this).attr('data-download');
        downloadUrl = jQuery(this).attr('href');
        jQuery.ajax({
            url: ajax_object.ajax_url+"?action=get_eula&downloadid="+selectedDownload
        })
        .done(function( data ) {
            if(jQuery('#eula_text').size() == 0){
                var modalBox = jQuery('<div id="eula_text"></div>');
                jQuery('body').append(modalBox);
            }
            jQuery('#eula_text').html(data);
            tb_show("Accept EULA","#TB_inline?height=450&amp;width=600&amp;inlineId=eula_text&amp;modal=true",null);
        })
        .error(function( data ) {
            var goto_url = custom_variables.login_url+'?redirect_to='+document.URL+'?showsoftware=true';
           window.location.href = goto_url;
        });
    });

    jQuery('body').on('click', '.eula-accept', function(){
        downloadUrl = downloadUrl + '&eula=accepted';
        tb_remove();
        window.location.href = downloadUrl;
        return false;
    });

    var currentURL = document.URL;
    if (currentURL.indexOf('showsoftware=true') > -1) {
        jQuery('a[href="#tab5"]').tab('show');
    }

    jQuery('#select-series').easyDropDown({
        cutOff: 10,
    });

    jQuery('#select-language').easyDropDown({
        cutOff: 10,
        onChange: function(selected){
            if(selected.value != 'none'){
                jQuery.ajax({
                    url: "http://localhost:8888/Allen&Heath_18015/"+"products"//+selected.value
                })
                .done(function( data ) {
                    jQuery('#products-downloads-list').html(data);
                });
            }
            else{
                jQuery('#products-downloads-list').html("");
            }
        }
    });
});
    