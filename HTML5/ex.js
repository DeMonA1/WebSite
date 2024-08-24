if (typeof localStorage == 'indefined') {
    // Local storage is not available, you need to infirm user about it
    // and finish the work.
}
localStorage.setItem('loc', 'USA')
localStorage.setItem('lan', 'English')

loc = localStorage.getItem('loc')
lan = localStorage.getItem('lan')

localStorage.removeItem('loc')
localStorage.removeItem('lan')

localStorage.clear()