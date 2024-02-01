function addProduct() {
    var name = document.getElementById("name").value;
    var brand = document.getElementById("brand").value;
    var price = document.getElementById("price").value;

    var formData = new FormData();
    formData.append('name', name);
    formData.append('brand', brand);
    formData.append('price', price);

    // AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../Models/AddShop.php', true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle the response from the server (if needed)
            console.log(xhr.responseText);
        }
    };

    xhr.send(formData);
}
