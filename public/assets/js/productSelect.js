document.getElementById('productSelect').addEventListener('change', function() {
    var selectedValue = this.value;
    if (selectedValue) {
        window.location.href = selectedValue; 
    }
});

document.getElementById('productSelectAdapite').addEventListener('change', function() {
    var selectedValue = this.value;
    if (selectedValue) {
        window.location.href = selectedValue; 
    }
});

