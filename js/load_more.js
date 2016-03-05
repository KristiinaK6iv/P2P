$(document).ready(function () {
    size_li = $("#KKK li").size();
    x=5;
    $('#KKK li:lt('+x+')').show();
    $('#KKK h4:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+10 <= size_li) ? x+10 : size_li;
        $('#KKK li:lt('+x+')').show();
        $('#KKK h4:lt('+x+')').show();
        $('#loadMore').hide();
    });
});
