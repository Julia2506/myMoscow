// Слайдер
let slider = $('.header');
let sliderItems = slider.find('.header-slider-item');

let currentIndex = 0;

slider.find('.header-filter-main-content-arrow-back').click(function(){
    if(currentIndex <= 0) {
        sliderItems.eq(currentIndex).hide();
        currentIndex = sliderItems.length-1;
        sliderItems.eq(currentIndex).css('display', 'flex');
    } else {
        sliderItems.eq(currentIndex).hide();
        sliderItems.eq(currentIndex - 1).css('display', 'flex');
        currentIndex = currentIndex - 1;
    }
});

slider.find('.header-filter-main-content-arrow-next').click(function(){
    if(currentIndex >= sliderItems.length-1) {
        sliderItems.eq(currentIndex).hide();
        currentIndex = 0;
        sliderItems.eq(currentIndex).css('display', 'flex');        
    } else {
        sliderItems.eq(currentIndex).hide();
        sliderItems.eq(currentIndex + 1).css('display', 'flex');
        currentIndex = currentIndex + 1;
    }
});

// setInterval(function(){
//     slider.find('.header-filter-main-content-arrow-next').click();
// },3000);

// Меню для адаптивной версии
let header = $('.header-filter');
header.find('.header-filter-burger').click(function(){
    header.toggleClass('open');
});

header.find('.header-filter-top-nav').click(function(){
    header.removeClass('open');
});

//Валидация формы
let fallingReportPlace = $('.falling-report');

$('form').submit(function(e){
    // e.preventDefault();

    let userName = $(this).find("[name='username']").val();
    let userEmail = $(this).find("[name='useremail']").val();
    let userTel = $(this).find("[name='usertel']").val();

    if (userName == '' || userEmail == '' || userTel =='') {
        let fallingReport = '*не все обязательные для ввода поля заполнены';

        if (userName == '') {
            $(this).find("[name='username']").addClass('error');
            fallingReport = fallingReport + ' (введите имя)';
        } else {
            $(this).find("[name='username']").removeClass('error');
        }

        if (userEmail == '') {
            $(this).find("[name='useremail']").addClass('error');
            fallingReport = fallingReport + ' (введите адрес электронной почты)';
        } else {
            $(this).find("[name='useremail']").removeClass('error');
        }
        
        if(userTel == '') {
            $(this).find("[name='usertel']").addClass('error');
            fallingReport = fallingReport + ' (введите номер телефона)';
        } else {
            $(this).find("[name='usertel']").removeClass('error');
        }

        fallingReportPlace.html(fallingReport);
        fallingReportPlace.slideDown(500);

    } else {
        $('form').submit();
        fallingReportPlace.slideUp();
        $(this).find("[name='username']").removeClass('error');
        $(this).find("[name='useremail']").removeClass('error');
        $(this).find("[name='usertel']").removeClass('error');
    }
});

$("[name='username'], [name='useremail'], [name='usertel']").keyup(function(e){

    let fallingReport = '*не все обязательные для ввода поля заполнены';

    if (e.keyCode != 9 && e.keyCode != 16 && e.keyCode != 17 && e.keyCode != 27 ) {

        let userNameLen = $('form').find("[name='username']").val().length;
        let userEmailLen = $('form').find("[name='useremail']").val().length;
        let userTelLen = $('form').find("[name='usertel']").val().length;
            
        if (userNameLen < 2  || userNameLen > 24) {
            fallingReport = fallingReport + ' (введите имя)';
        }
    
        if (userEmailLen < 2 || userEmailLen > 24) {
            fallingReport = fallingReport + ' (введите адрес электронной почты)';
        }
       
        if (userTelLen < 2 || userTelLen > 24) {
            fallingReport = fallingReport + ' (введите номер телефона)';
        }
         
        fallingReportPlace.html(fallingReport);  

        if (($(this).val().length >= 2 && $(this).val().length <= 24)) {
            $(this).removeClass('error');
            if ($('form').find('input.error').length == 0) {
                fallingReportPlace.slideUp();
            }
          
        } else { 
            $(this).addClass('error');
            fallingReportPlace.slideDown();
        }  
    }
});