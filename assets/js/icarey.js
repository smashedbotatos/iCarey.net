// Validating Empty Field
function check_empty() {
if (document.getElementById('track-email').value == "" || document.getElementById('track-tag').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('track-form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('TrackingWindow').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('TrackingWindow').style.display = "none";
}
