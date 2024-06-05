function goBack() {
    window.location.href = '/transfer';
}

document.getElementById('downloadButton').addEventListener('click', function() {
    alert('Download button clicked!');
});

document.getElementById('shareButton').addEventListener('click', function() {
    alert('Share button clicked!');
});

document.getElementById('doneButton').addEventListener('click', function() {
    alert('Done button clicked!');
});
