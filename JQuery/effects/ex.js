$('object').hide()
$('object').hide(1000)
$('object').hide('fast')
$('object').hide('linear')
$('object').hide('slow', 'linear')
$('object').hide(myfunction)
$('object').hide(333, myfunction)
$('object').hide(200, 'linear', function() {alert('Finished')})

$('object').hide(1000).show(1000)