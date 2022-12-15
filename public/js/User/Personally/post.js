$(document).ready(function () {
    getPost();
    function getPost() {
        let currentUrl = location.href.split('/')[2];

        $.ajax({
            type: 'GET',
            url: 'http://' + currentUrl + "/posts/createPost",
            dataType: 'html',
            success: function (response) {
                $('.posts-items').html(response);


            },
            error: function (error) {
                console.log(error);
            }
        })
    }

    // $('.post-search').submit(function (e) {
    //     e.preventDefault();

    //     let url = $(this).attr('action');
    //     let keywords = $('.keyword-search').val();
    //     let address = $('.selected-address').val();

    //     $.ajax({
    //         type: 'GET',
    //         url: url,
    //         data: {
    //             keywords: keywords,
    //             address: address
    //         },
    //         success: function (data) {
    //             console.log(data);
    //         },
    //         error: function (data) {
    //             console.log(data);
    //         }
    //     });
    // })
})
