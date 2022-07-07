$('#search_bar').submit(event => {

    ins = {
    name: event.currentTarget[0].value = "" ? null : event.currentTarget[0].value,
    surname: event.currentTarget[1].value = "" ? null : event.currentTarget[1].value,
    city: event.currentTarget[3].value = "" ? null : event.currentTarget[3].value,
    age: event.currentTarget[4].value,
    genre: event.currentTarget[2].value,
    
    }

    $.ajax({
        type: "POST",
        url: "../Model/modelSearch.php",
        data: ins,
        success: function (response) {
             $('#ul_result')[0].innerHTML = response;
        }
        
    });
    event.preventDefault();
})

    $('#next').click(function(){
        $("#result ul").animate({marginLeft:-590},800,function(){
           $(this).css({marginLeft:2}).find("li:last").after($(this).find("li:first"));
        });
        })
        $('#previous').click(function(){
            $("#result ul").animate({marginLeft: 590},800,function(){
               $(this).css({marginLeft:2}).find("li:first").after($(this).find("li:last"));
            });
            })