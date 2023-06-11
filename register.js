function checkRegister() {
    let username = document.forms["myRegister"]["username"].value;
    if (username == "") {
      alert("Fill out the Username");
      return false;
    }
    let password = document.forms["myRegister"]["password"].value;
    if (password == "") {
      alert("Fill out the Password");
      return false;
    }
    let firstname = document.forms["myRegister"]["firstname"].value;
    if (firstname == "") {
      alert("Fill out the First name");
      return false;
    }
    let lastname = document.forms["myRegister"]["lastname"].value;
    if (lastname == "") {
      alert("Fill out the Last name");
      return false;
    }
    let birthday = document.forms["myRegister"]["birthday"].value;
    if (birthday == "") {
      alert("Select your Birthday");
      return false;
    }
    let gender = document.forms["myRegister"]["gender"].value;
    if (gender == "") {
      alert("Select your Gender");
      return false;
    }
}