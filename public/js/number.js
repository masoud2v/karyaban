var map =
    [
        "&\#1632;","&\#1633;","&\#1634;","&\#1635;","&\#1636;",
        "&\#1637;","&\#1638;","&\#1639;","&\#1640;","&\#1641;"
    ];

function getArabicNumbers(str)
{
    var newStr = "";


    str = String(str);

    for(i=0; i<str.length; i++)
    {
        if (str.charAt(i) == "/") {
            newStr += "/";
        }else{
            newStr += map[parseInt(str.charAt(i))];
        }
    }

    return newStr;
}

$(document).ready(function(){
    $(".job-date").each(function(){
        $(this).html(getArabicNumbers($(this).html()));
    });
});