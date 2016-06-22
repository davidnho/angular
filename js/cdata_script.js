$(function ($) {
    var allAccordions = $('.accordion div.data');
    var allAccordionItems = $('.accordion .accordion-item');
    $('.accordion > .accordion-item').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).next().slideUp("fast");
        } else {
            allAccordions.slideUp("fast");
            allAccordionItems.removeClass('open');
            $(this).addClass('open');
            $(this).next().slideDown("fast");
            return false;
        }
    });

    $("#password-2").keyup(function () {
        if ($(this).val() != $("#password-1").val()) {
            document.getElementById("password_error").innerHTML = "Passwords do not match. Please re-enter";
            document.getElementById("password_error").style.color = "red";
            document.getElementById("btn_addUser").disabled = true;
        } else {
            document.getElementById("password_error").innerHTML = "Passwords confirmed";
            document.getElementById("password_error").style.color = "white";
            document.getElementById("btn_addUser").disabled = false;
        }
    });

    $("#password-2").change(function () {
        if ($(this).val() != $("#password-1").val()) {
            document.getElementById("password_error").innerHTML = "Passwords do not match. Please re-enter";
            document.getElementById("password_error").style.color = "red";
            document.getElementById("btn_addUser").disabled = true;
        } else {
            document.getElementById("password_error").innerHTML = "Passwords confirmed";
            document.getElementById("password_error").style.color = "white";
            document.getElementById("btn_addUser").disabled = false;
        }
    });

    $('.pointer').click(function () {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).next().slideUp("fast");
            $(this).children("span").text("+");
        } else {
            $(this).addClass('open');
            $(this).children("span").text("-");
            $(this).next().slideDown("fast");
            allAccordions.slideUp("fast");
            allAccordionItems.removeClass('open');
            return false;
        }
    });

});


function setPageStyle(pageName)
{
    
    $("#" + pageName).addClass("active");
    $(document).prop('title', $("#" + pageName).text());
    loadDatePicker();
    document.getElementById("checkbox1").checked = true;
  
}

function initializePage(pageName)
{
    
    $("#" + pageName).addClass("active");
    $(document).prop('title', $("#" + pageName).text());
    loadDatePicker();
    document.getElementById("checkbox1").checked = true;
  
}

function getRootUrl() {
    return window.location.origin ? window.location.origin + '/' : window.location.protocol + '/' + window.location.host + '/';
}

function goBack() {
    window.history.back();
}

function goBackTo(x) {
    window.history.go(x);
}

function loadDatePicker()
{
    $('#datepicker').datepicker({
        inline: true,
        showOtherMonths: true,
        dateFormat: "d/m/yy",
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    });
}

function btnEnable(btn)
{
    document.getElementById(btn).disabled = false;
}

function btnDisable(btn)
{
    document.getElementById(btn).disabled = true;
}


   
