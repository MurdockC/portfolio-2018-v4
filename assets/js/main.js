
function doThis() {
    var hidden = document.getElementById('mobile-hide');
    var menu = document.getElementById('thisContent');
    if (menu.style.display === 'none') {
        menu.style.display = 'flex';
        hidden.style.display = 'none';

    } else {
        menu.style.display = 'none';
        hidden.style.display = 'block';
    }
}
