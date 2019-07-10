function add() {
    window.location ="views/books/add.php";
}
function cancel1() {
    window.location="../../index.php";
}
function check() {
    if(document.getElementById('name').value==""){
        document.getElementById('error').innerHTML="Ko để name Trống";
        return false;
    }
}