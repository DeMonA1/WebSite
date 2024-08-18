arrayname = []
arrayname.push('Element 1')
arrayname.push('Element 2')

console.log(arrayname.length)

console.log(arrayname[1])
arrayname[6] = 'Element 6'
console.log(arrayname.length)
console.log(arrayname[4])

numbers = Array('One', 'Two', 'Three')

/////////////////////////////////////////////////////

numbers = []
numbers.push('One')
numbers.push('Two')
numbers.push('Three')

for (j = 0; j < numbers.length; ++j)
    console.log('Element ' + j + ' = ' + numbers[j])

////////////////////////////////////////////////

balls = {'golf': 'balls for golf, 6',
        'tennis': 'balls for tennis, 3',
        'football': 'balls for football, 1',
        'ping-pong': 'balls for ping-pong, 12'}
for (ball in balls)
    console.log(ball + ' = ' + balls[ball])
console.log(balls['football'])


/////////////////////////////////////////////////////

checkerboard = Array(
    Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
    Array('o', ' ', 'o', ' ', 'o', ' ', 'o', ' '),
    Array(' ', 'o', ' ', 'o', ' ', 'o', ' ', 'o'),
    Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    Array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    Array('O', ' ', 'O', ' ', 'O', ' ', 'O', ' '),
    Array(' ', 'O', ' ', 'O', ' ', 'O', ' ', 'O'),
    Array('O', ' ', 'O', ' ', 'O', ' ', 'O', ' '))

/* for (j = 0; j < 8; ++j)
{
    for (k = 0; k < 8; ++k)
        console.log(checkerboard[j][k] + ' ')
} */

///////////////////////////////////////////////////

function isBiggerThan10(element, index, array)
{
    return element > 10
}

result = [2, 5, 8, 1, 4].some(isBiggerThan10) // false
result = [12, 1, 1, 1, 1].some(isBiggerThan10) // true

/////////////////////////////////////////////////////

animals = ['dog', 'cat', 'cow', 'horse']
offset = animals.indexOf('cow')
console.log(offset)

/////////////////////////////////////////////////////

fruit = ['Banana', 'grape']
veg = ['carrot', ' cabbage']
console.log(fruit.concat(veg, 'dog', 'fish'))

////////////////////////////////////////////////////

function ouput(element, index, _array)
{
    console.log('Element with index ' + index + ' contains value '+ element)
}

pets = ['cat', 'dog', 'rabbit', 'hamster']
pets.forEach(ouput)

/////////////////////////////////////////////////////////////

pets = ['cat', 'dog', 'rabbit', 'hamster']
console.log(pets.join())
console.log(pets.join(' '))
console.log(pets.join(' : '))

////////////////////////////////////////////////////////////////

sports = ['football', 'tennis', 'baseball']
console.log('Initially = ' + sports)

sports.push('Hockey')
console.log('After push = ' + sports)

removed = sports.pop()
console.log('After pop = ' + sports)
console.log('Poped element = ' + removed)

///////////////////////////////////////////////////////

sports = ['football', 'tennis', 'baseball', 'hockey']
sports.reverse()
console.log(sports)

/////////////////////////////////////////////////////////

// sort by alhabet
sports = ['football', 'tennis', 'baseball', 'hockey']
sports.sort()
console.log(sports)

// sort by alhabet in the reverse order
sports = ['football', 'tennis', 'baseball', 'hockey']
sports.sort().reverse()
console.log(sports)

// sort number by ascending order
numbers = [7, 23, 6, 74]
numbers.sort(function(a,b){return a - b})
console.log(numbers)

// sort number by descending order
numbers = [7, 23, 6, 74]
numbers.sort(function(a,b){return b - a})
console.log(numbers)

function mysort(arr)
{
    return arr.sort(function(a, b){return b - a})
}
console.log(mysort([2,3,76,89]))