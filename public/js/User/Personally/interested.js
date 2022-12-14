$(document).ready(function() {
    const saveInterested = document.querySelectorAll('.icon-interested');

    saveInterested.forEach((e) => {
        e.addEventListener("click", () => {
            e.classList.toggle("icon-interested--save");
        })
    })

    var token = $("input[name='_token']").val();

    //Lưu bài tuyển dụng quan tâm
    $('.icon-interested--unsave').click(function(e){

        let id = $(this).attr("data-id");

        let currentUrl = location.href.split('/')[2];

        $.ajax({
            url: 'http://' + currentUrl + '/post-saved',
            type: "POST",
            data: {
                id: id,
                _token: token
            },
            success: function(){
                location.reload()
            }
        })
    })

    $('.icon-interested--save').click(function(e){
        let id = $(this).attr("data-id");
        let currentUrl = location.href.split('/')[2];

        $.ajax({
            url: 'http://' + currentUrl + '/post-unsaved',
            type: "delete",
            data: {
                id: id,
                _token: token,
            },
            success: function(){
                location.reload()
            }
        })
    })
})
