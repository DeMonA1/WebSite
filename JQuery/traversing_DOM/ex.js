<ul>
    <li>element 1</li>
    <li>element 2</li>
    <li>element 3</li>
</ul>

my_parent = $('#elem').parent()

my_parent= $('li').parent()         // 1 !! <ul></ul>
alert($('li').parent().length())    // 1 !!
$('li').parent().css('font-weight', 'bold')


$('#elem').parents('div').css('background', 'yellow')
$('#elem').parentsUntil('div').css('background', 'yellow')



my_children = $('#elem').children()
my_children = $('#elem').children('li')

li_descendants = $('#elem').find('li')
all_descendants = $('#elem').find('*')




/* <ul>
    <li>element 1</li>
    <li id='two>element 2</li>
    <li>element 3</li>
</ul> */

$('#two').siblings().css('font-weight', 'bold')
$('#two').siblings('.new').css('font-weight', 'bold')





/*<ul>
    <li>item 1</li>
    <li>item 2</li>
    <li id='new'>item 3</li>
    <li>item 4</li>
    <li>item 5</li>
</ul> */
$('#new').next().css('font-weight', 'bold') // item 4
$('#new').nextAll().css('font-weight', 'bold') // 4 and 5
$('#new').nextAll('.info').css('font-weight', 'bold')

/*<ul>
    <li>item 1</li>
    <li id='new'>item 2</li>
    <li>item 3</li>
    <li id='old'>item 4</li>
    <li>item 5</li>
</ul> */
$('#new').nextUntil('#old').css('font-weight', 'bold')
$('#new').nextUntil('#old', '.info').css('font-weight', 'bold')




$('ul>li').first().css('text-decoration', 'underline')
$('ul>li').last().css('font-style', 'italic')
$('ul>li').eq(1).css('font-weight', 'bold') //[1]
$('ul>li').filter(':even').css('background', 'cyan') //1, 3, 5...
$('ul>li').not('#new').css('color', 'blue')
$('ul>li').has('ol').css('text-decoration', 'line-through')