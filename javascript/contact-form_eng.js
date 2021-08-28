function validate(){
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 2){
    text = "Please enter correct name!";
    error_message.innerHTML = text;
    return false;
  }
  if(surname.length < 4){
      text = "Please enter correct surname!";
      error_message.textContent = text;
      return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please enter correct email!";
      error_message.innerHTML = text;
      return false;
  }
  if(isNaN(phone) && phone.length != 9){
    text = "Please enter correct phone number!";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 4){
      text = "Please enter more than 5 characters!";
      error_message.innerHTML = text;
      return false;
  }
  if(message.length < 19){
    text = "Please enter more than 20 characters!";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form submitted successfully!");
  return true;
}