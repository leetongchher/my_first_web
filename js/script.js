$(document).ready(function(){
    const date = new Date();
    const hour = date.getHours();
    let message = "";
    console.log(hour);
    if(hour <= 12){
        message = "Good Morning";
    }
    if(hour > 12){
        message = "Good Afternoon";
    }
    if(hour >= 17){
        message = "Good Evening";
    }
    $('#headingText').empty().append(message + " From Lee Tongchher");
    $('.radio-btn').click(function(){
        $('.radio-inner').toggleClass("active");
        $('body').toggleClass("dark");
        $('p').toggleClass("font");
    })
})