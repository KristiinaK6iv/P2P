$(document).ready(function () {
    size_li = $("#KKK li").size();
    x=10;
    $('#KKK li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+10 <= size_li) ? x+10 : size_li;
        $('#KKK li:lt('+x+')').show();
        $('#loadMore').hide();
    });
});
