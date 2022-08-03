var pageone = document.getElementById('page-1')
var pagetwo = document.getElementById('page-2')
var pagethree = document.getElementById('page-3')

function page1() {
    pageone.style.display = 'block'
    pagetwo.style.display = 'none'
    pagethree.style.display = 'none'
}

function page2() {
    pagetwo.style.display = 'block'
    pageone.style.display = 'none'
    pagethree.style.display = 'none'
}

function page3() {
    pagethree.style.display = 'block'
    pagetwo.style.display = 'none'
    pageone.style.display = 'none'
}