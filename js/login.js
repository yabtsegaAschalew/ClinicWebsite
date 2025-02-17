let x = document.forms["login-form"]["email"].value;
let password = document.forms["login-form"]["pwd"].value;

function validateForm() {

  let atpos = x.indexOf("@");
  let dotpos = x.lastIndexOf(".");
  if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
    alert("Not a valid e-mail address!");
    return false;
  }
  
  if (password.length < 6) {
    alert("Password must be at least 6 characters long!");
    return false;
  }

  alert("Login successful!");
  return true; 
}