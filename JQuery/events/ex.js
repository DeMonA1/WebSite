$('.myclass').click( function() { $(this).slideUp() } )
$('.myclass').dbclick( function() { $(this).hide(); } )

$('.myclass').click(doslide)
function doslide() {
    $(this).slideUp()
}




$('#test').mouseover(function() {$(this).html('Cut it out!')})
$('#test').mouseout(function() {$(this).html('Try is this time...')})

$('#test').hover(function() {$(this).html('Cut it out!')},
                function() {$(this).html('Try it this time...')})

$('#test').mouseover(function() {$(this).html('Cut it out!')})
            .mouseout(function() {$(this).html('Try it this time...')})