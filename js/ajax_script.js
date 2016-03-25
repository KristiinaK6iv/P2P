function load_data_ajax(type, base_url){
    $.ajax({
        'url' : base_url + '/Categories/get_new_category',
        'type' : 'POST',
        'data' : {'type' : type},
        'success' : function(data){
            $.address.value(type);
            var container = $('#byCategory');
            if(data){
                container.html(data);
            }

        }
    });
}

