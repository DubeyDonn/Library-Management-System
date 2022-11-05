function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "admin" && password == "user") {
    alert("login successfully");
    return false;
  } else {
    alert("login failed");
  }
}
function admin_validate() {
  var admin_username = document.getElementById("admin_username").value;
  var admin_password = document.getElementById("admin_password").value;
  if (admin_username == "admin" && admin_password == "admin") {
    alert("login successfully");
    return false;
  } else {
    alert("login failed");
  }
}
