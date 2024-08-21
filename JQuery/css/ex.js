$.noConflict()
// OR //
jq = $.noConflict()

$('p').css('font-family', 'monospace')
$('code').css('border', '1px solid #aaa')

color = $('#elem').css('color')

$('p').css('text-align', 'justify')
$('blockquote').css('backfround', 'lime')
$('#advert').css('border', '3px dashed red')
$('.new').css('test-decoration', 'underline')
$('blockquote, #advert, .new').css('font-weight', 'bold')




$('#clickme').click(function() {
    $('#result').html('You clicked the button')
})



$('document').ready(function() {
    // code 
})
// OR //
$(function() {
    // code
})




$(this).css('background', '#ff0')
// OR //
this.style.background = '#ff0'




