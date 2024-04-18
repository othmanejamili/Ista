document.getElementById('filier').addEventListener('change', function() {
    var selectedFilier = this.value;
    var tableRows = document.querySelectorAll('#cvTable tbody tr');

    tableRows.forEach(function(row) {
        if (row.getAttribute('data-filier') === selectedFilier || selectedFilier === 'All') {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});