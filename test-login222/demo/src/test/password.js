function pushHideButton() {
  var txtPass = document.getElementById("textPassword");
  var btnEye = document.getElementById("buttonEye");
  if (txtPass.type === "text") {
    txtPass.type = "password";
    btnEye.className = "fa fa-eye";
  } else {
    txtPass.type = "text";
    btnEye.className = "fa fa-eye-slash";
  }
}
function checkpass() {
  const pass = document.getElementById("textPassword");

  if (pass.value && pass.value.length) {
    if (pass.value.length >= 8) {
      button.style.pointerEvents = "auto";
      document.getElementById('button').style.backgroundColor = '#006eff';
    }
  } else {
    button.style.pointerEvents = "none";
    document.getElementById('button').style.backgroundColor = 'rgb(179, 224, 255)';
  }
}