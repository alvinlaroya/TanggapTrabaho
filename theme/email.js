// email integration
(function () {
  emailjs.init("user_Y2yVhIyt2gAB4Liw4Gt8f"); //user id
})();

function sendEmail() {
    alert(1)
  var fullname = document.getElementById("full-name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;

  var templateParams = {
    name: fullname,
    subject: subject,
    message: message,
    phone: phone,
    email: email,
  };

  const emailContent = document.getElementById("email-message-content");
  const emailMessage = document.getElementById("email-message");

  emailContent.style.display = "none";

  if(fullname == "" && email == "") {
    emailContent.style.display = "flex";
    emailContent.style.backgroundColor = "red";
    emailMessage.innerHTML = "Please fill all required fields";

    setTimeout(() => {
      document.getElementById("email-message-content").style.display = "none";
    }, 4000);
    
    return null
  }

  emailjs.send("service_p6eskr6", "template_qru2937", templateParams).then(
    // service id, template id
    function (response) {
      emailContent.style.display = "flex";
      emailContent.style.backgroundColor = "green";
      emailMessage.innerHTML = "Sent successfully!";
    },
    function (error) {
      emailContent.style.display = "flex";
      emailContent.style.backgroundColor = "red";
      emailMessage.innerHTML = "Error";
    }
  );

  document.getElementById("full-name").value = "";
  document.getElementById("email").value = "";
  document.getElementById("phone").value = null;
  document.getElementById("subject").value = "";
  document.getElementById("message").value = "";

  setTimeout(() => {
    document.getElementById("email-message-content").style.display = "none";
  }, 4000);
}
