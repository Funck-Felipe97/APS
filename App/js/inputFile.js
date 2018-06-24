function showFileName(inputFile) {
    inputFile.offsetParent.getElementsByClassName('fileName')[0].innerHTML = inputFile.value.replace(/\\/g, '/').split('/').pop();
}
