$(function () {

    $('.logout').on('click',function (e) {
        e.preventDefault();

        console.log();
        $.ajax({
            url:$(this).attr('href'),
            type:'POST',
            data:{},
            success:function () {
                window.location.reload();
            }
        })
    })

})