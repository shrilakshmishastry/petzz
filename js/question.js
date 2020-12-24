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
            window.location.replace("/petzz/forum")
        })
    })
})