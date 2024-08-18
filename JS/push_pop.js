numbers = []

for (j = 1; j < 6; ++j) {
    if (j == 2 || j == 5) {
        console.log('Executing of intended task #' + j)
    }
    else {
        console.log('Delaying of intended task #' + j)
        numbers.push(j)
    }
}

console.log('Executing of priority tasks is completed')
console.log('Start of delaying tasks executing in the reverse order of their following')
console.log('Executing of intended task #' + numbers.pop())
console.log('Executing of intended task #' + numbers.pop())
console.log('Executing of intended task #' + numbers.pop())