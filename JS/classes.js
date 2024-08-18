class User {
    constructor(forename, username, password) {
        this.forename = forename
        this.username = username
        this.password = password

    this.showUser = function () {
        console.log('Name: ' + this.forename)
        console.log('Username: ' + this.username)
        console.log('Password: ' + this.password)
        }
}
}
b = new User('Ory','Blind','123')
console.log(b.forename)
b.showUser()

////////////////////////////////////////////////////

class User_2 {
    constructor(forename, username, password) {
        this.forename = forename
        this.username = username
        this.password = password

    User_2.prototype.showUser = function() {
        console.log('Name: ' + this.forename)
        console.log('Username: ' + this.username)
        console.log('Password: ' + this.password)
        }
}
}
obj = new User_2()
User_2.prototype.greeting = 'Hi'
console.log(obj.greeting)

User_2.prototype.showUser = function()
{
    console.log('Name ' + this.forename +
                'User: ' + this.username + 
                'Pass: ' + this.password)
}

obj.showUser()


/////////////////////////////////////////////////////


String.prototype.hbsp = function()
{
    return this.replace(/ /g, '&nbsp;')
}
console.log('A nimble brown fox'.hbsp())


String.prototype.trim = function()
{
    return this.replace(/^\s+|\s+$/g, '')
}

console.log('  Please spare me extra spaces  '.trim())