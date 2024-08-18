console.log('a: ' + (42 > 3))
console.log('b: ' + (91 < 4))
console.log('c: ' + (8 == 2))
console.log('d: ' + (4 < 17))
if (1 == true) console.log("true")
// ERROR if (1 == TRUE) console.log('TRUE')

/////////////////////////////////////////////

myname = 'Peter'
myage = 24
bool = true

day_number = 123
days_to_new_year = 366 - day_number
if (days_to_new_year < 30) console.log('New Year is soon')
else console.log('Not soon yet')

month = 'July'
if (month == 'October') console.log("It's the fall")

////////////////////////////////////////////

a = 3.14
b = '3.14'
if (a == b) console.log('1')
if (a === b) console.log('2')

/////////////////////////////////////////////

a = 7; b = 11
if (a > b) console.log('a > b')
if (a < b) console.log('a < b')
if (a <= b) console.log('a <= b')
if (a >= b) console.log('a >= b')

b = 0; a = 1
console.log(b && a)
console.log(a || b)
console.log(!b)

////////////////////////////////////////////////////

string = 'A nimble brown fox leaps over a lazy dog'
with (string)
{
    console.log('In the string are ' + length + ' characters')
    console.log('In upper case: ' + toUpperCase())
}



