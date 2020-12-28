$(document).ready(function () {
    $('.listQuestion').on('click',function () {

        window.location = 'forum/answer-question/'+JSON.parse($(this).attr('data-question')).id;
    })
    $('form').submit(function (event){
        event.preventDefault();
        if($(this).attr('email')){
            let btn = $('.modal-title ').attr('data-bs-question');
            let text = $('textarea').val();
            console.log(text);
            console.log(btn);
            $.post('/petzz/forum/answer',{
                question: btn,
                answer : text
            }).done(function (data,status){
                let alertBox =  $("<div></div>").text("Your response recorded successfully!!");
                alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
                alertBox.attr("role","alert");
                let button = $("<button></button>");
                button.addClass("btn-close  text-center text-success");
                button.attr({
                    "type":'button',
                    "data-bs-dismiss":"alert",
                    "aria-label":'Close',
                });
                alertBox.append(button);
                $('nav').after(alertBox);
                $('.ansBtnClose').click();
            });
        }else{
            $('.ansBtnClose').click();
            let alertBox =  $("<div></div>").text("Please login!!");
            alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
            alertBox.attr("role","alert");
            let aTag = $('<a class="ms-md-5" href="/petzz/login">Click here to login.</a>');
            alertBox.append(aTag);
            let button = $("<button></button>");
            button.addClass("btn-close  text-center ");
            button.attr({
                "type":'button',
                "data-bs-dismiss":"alert",
                "aria-label":'Close',
            });
            alertBox.append(button);
            $('nav').after(alertBox);
        }
    })
})