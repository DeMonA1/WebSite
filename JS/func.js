function displayItems(v1, v2, v3, v4, v5)
{
    console.log(v1)
    console.log(v2)
    console.log(v3)
    console.log(v4)
    console.log(v5)
}

//displayItems('dog', 'cat', 'pony', 'hamster', 'turtle')

///////////////////////////////////////////////////////////////

let c = 'Catfish'

function displayItems()  // !!!
{
    for (j = 0; j < displayItems.arguments.length; ++j)
        console.log(displayItems.arguments[j])
}

// displayItems('Bananas', 32.3, c)

//////////////////////////////////////////////////////////////////

function fixNames()
{
    var s = ''

    for (j = 0; j < fixNames.arguments.length; ++j)
        s += fixNames.arguments[j].charAt(0).toUpperCase() + 
            fixNames.arguments[j].substring(1).toLowerCase() + ' '
    
    return s.substring(0, s.length - 1)
}

// console.log(fixNames('the', 'DALLAS', 'CowBoys'))

//////////////////////////////////////////////////////////////////

function fixNames()
{
    var s = new Array()

    for (j = 0; j < fixNames.arguments.length; ++j)
    s[j] = fixNames.arguments[j].charAt(0).toUpperCase() + 
        fixNames.arguments[j].substring(1).toLowerCase()
    
    return s
}

words = fixNames('the', 'DALLAS', 'CowBoys')
for (j = 0; j < words.length; ++j)
    console.log(words[j])