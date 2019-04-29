jQuery(function ($) {
    $(document).on('click', '.test_get_single', function (e) {
        e.preventDefault();

        let portfolioId  = $(this).data("id");
        console.log(portfolioId);

        let data = {
            'action': 'singlePortfolio',
            'portfolioId': portfolioId,
        };

        $.ajax({
            type: 'POST',
            url: mastakSendMail.url,
            data: data,
            success: function (response) {
                console.log(response);
           $("#test_ajax").html(response);
            },
            error: function (x, y, z) {
                console.log(x);
                $('#test_ajax').text('ОШИБКА!');
            }
        });

    })
});