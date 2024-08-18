function validateForename(field) {
    return (field == '') ? "A name has not been entered.\n" : ""
}

function validateSurname(field) {
    return (field == '') ? "A surname has not been entered.\n" : ""
}

function validateUsername(field) {
    if (field == '') return "An username has not been entered.\n"
    else if (field.length < 5)
        return "5 characters should be in the username.\n"
    else if (/[^a-zA-Z0-9_-]/.test(field))
        return "a-z, A-Z, 0-9, - and _ allow only in the username.\n"
    return ''
}

function validatePassword(field)
{
    if (field == '') return "A password has not been entered.\n"
    else if (field.length < 6)
        return "The password must have at least 6 characters.\n"
    else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) || !/[0-9]/.test(field))
        return "The password required 1 characters from each set a-z, A-Z, and 0-9.\n"
    return ''
}

function validateEmail(field) {
    if (field == '') return "An email has not been entered.\n"
    else if (!((field.indexOf('.') > 0) && (field.indexOf('@') > 0)) ||
    /[^a-zA-Z0-9.@_-]/.test(field))
        return "Email has an incorrect format.\n"
    return ''
}

function validateAge(field) {
    if (field == '' || isNaN(field)) return "An age has not been entered.\n"
    else if (field < 18 || field > 110)
        return "Age should be between 18 and 110.\n"
    return ''
}

function validate(form) {
    fail = validateForename(form.forename.value)
    fail += validateSurname(form.surname.value)
    fail += validateUsername(form.username.value)
    fail += validatePassword(form.password.value)
    fail += validateAge(form.age.value)
    fail += validateEmail(form.email.value)

    if (fail == '') return true
    else { alert(fail); return false}
}
function check(word) {
    console.log(word.replace(/the/gi, 'my'))
}
check('The cow jumps over the moon')