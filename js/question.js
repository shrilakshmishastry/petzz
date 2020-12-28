$(document).ready(function (){
    $("form").submit(function (event) {
        event.preventDefault();
        let title = $('#title').val();
        let description = $('#description').val();
        console.log(title,description);
        $.post('/petzz/forum/question',{
            title : title,
            description : description
        }).done(function (data,status){
            let alertBox =  $("<div></div>").text("Your question placed successfully!!");
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
            window.location.replace("/petzz/forum");
        })
    })
})