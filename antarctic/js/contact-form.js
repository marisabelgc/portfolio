(function($) {
    $('form.ajax').on('submit', function(){
        var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

        that.find('[name]').each(function(index, value){
            var that = $(this),
            name = that.attr('name'),
            value = that.val();

            data[name] = value; 
        }); 

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response){
                if( response === 'success'){
                    $('form.ajax input').addClass('none animated fadeOut');
                    $('form.ajax h3').addClass('none animated fadeOut');
                    $('form.ajax textarea').addClass('none animated fadeOut');
                    $('#contactSend').removeClass('none');
                    $('#contactSend').addClass('animated fadeIn');
                    
                }else{
                    $('#contactError').html(response);                                       
                    $('form.ajax').addClass('shake animated');
                }
            }
        });

        return false;
    });

    $('form.ajax').change(function(){
        $('form.ajax').removeClass('shake');
    });

})(jQuery);