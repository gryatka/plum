$(document).ready(function () {

    // $('#name_asc').click(function () {
    //     var $a = $('.catalog_element');
    //     $a.addClass('sorted');
    // });

    //Живой поиск
    $('.who').on("change keyup input click", function() {
        if(this.value.length >= 1){
            $('#search_button').prop("disabled", false);
            $('.search_result').css("display", "block");
            $.ajax({
                type: 'post',
                url: "search.php", //Путь к обработчику
                data: {'search':this.value},
                response: 'text',
                success: function(data){
                    $(".search_result").html(data).fadeIn(); //Выводим полученые данные в списке
               }
            })
        } else if (this.value.length == 0) {
            $('.search_result').css("display", "none");
            $('#search_button').prop("disabled", true);
        }
    })
        
    $(".search_result").hover(function() {
        $(".who").blur(); //Убираем фокус с input
    })
        
    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    // $(".search_result").on("click", "li", function(){
    //     s_user = $(this).text();
    //     $(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
    //     $(".search_result").fadeOut();
    // })

    //При выборе самовывоза, заблочить доставку
    $('#pickup').click(function () {
        $('.block_it').toggleClass('stop');
        $('#block_it').toggleClass('stop').prop("readonly", true);
    });

});