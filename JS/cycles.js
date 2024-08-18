counter = 0

while (counter < 5)
{
    console.log(' Counter: ' + counter)
    ++counter
}
////////////////////////////////////

count = 1

do
{
    console.log(count + 'multiply on 7 equal ' + count * 7)
} while (++count <= 7)

///////////////////////////////////////

for (count = 1, j = 1; count <= 7; ++count, ++j)
{
    console.log(count + 'multiply on 7 equal ' + count * 7)
}

///////////////////////////////////////
haystack = new Array()
haystack[17] = 'Needle'

for (j = 0; j < 20; ++j)
{   
    if (haystack[j] == 'Needle')
    {
        console.log('has been found in element ' + j)
        break
    }
    else console.log(j + ', ')  
}

/////////////////////////////////////////

haystack = new Array()
haystack[4] = 'Needle'
haystack[11] = 'Needle'
haystack[17] = 'Needle'

for (j = 0; j < 20; ++j)
{
    if (haystack[j] == 'Needle')
    {
        console.log('- has been found in element ' + j)
        continue
    }
    console.log(j + ', ')
}