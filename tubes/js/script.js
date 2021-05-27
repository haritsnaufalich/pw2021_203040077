var searchData   = document.getElementById('searchData');
var itemsKeyword = document.getElementById('itemsKeyword');
var container    = document.getElementById('container')

itemsKeyword.addEventListener('keyup', function() {
    // Buat Object Ajax
    var xhr = new XMLHttpRequest();
    // Cek Kesiapan Ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    };
    // Eksekusi Ajax
    xhr.open('GET', 'ajax/search.php?keyword=' + itemsKeyword.value, true);
    xhr.send();
});