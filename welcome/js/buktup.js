var bukain = document.getElementById('gpass'),
buktup = document.getElementById('buktup');

buktup.onclick = function () {

//tutup password
if(bukain.className == 'active') {
bukain.setAttribute('type', 'text');
buktup.className = 'zmdi zmdi-eye';
bukain.className = '';

//buka password
} else {
bukain.setAttribute('type', 'password');
buktup.className = 'zmdi zmdi-eye-off';
bukain.className = 'active';
}

}
