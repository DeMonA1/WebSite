/////////////////////////////////////////////////
a = 2
if (a > 100)
{
    b=2
    console.log('a > 100')
}
else if(a < 100)
{
    console.log('a < 100')
}
else
{
    console.log('a = 100')
}
b = 2
if (!b) console.log('_')
////////////////////////////////////////////////////////
page = 'Home'

if (page == 'Home') console.log('You have chosen Home')
else if (page == 'About') console.log('You have chosen About')
else if (page == 'News') console.log('You have chosen News')
else if (page == 'Login') console.log('You have chosen Login')
else if (page == 'Links') console.log('You have chosen Links')

switch (page)
{
    case 'Home':
        console.log('You have chosen Home')
        break
    case 'About':
        console.log('You have chosen About')
        break
    case 'News':
        console.log('You have chosen News')
        break
    case 'Login':
        console.log('You have chosen Login')
        break
    case 'Links':
        console.log('You have chosen Links')
        break
}

heroName = 'Bri'

switch (heroName)
{
    case 'Superman':
    case 'Batman':
    case 'Super-woman':
        console.log('Justice league')
        break
    default:
        console.log('DEfault')
        break
}

//////////////////////////////////////////////

console.log({a}, a <= 5 ? 'a <= 5': 'a > 5')