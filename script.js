
function checkData() {
    let desc = document.forms["myForm"]["description"].value;
    if(desc == ""){
        alert("Describe Your Problem");
        return false;
    }
    let date = document.forms["myForm"]["date"].value;
    if(date == ""){
        alert("Enter a Date");   
        return false;
    }
    let doctor = document.forms["myForm"]["doctor"].value;
    if(doctor == ""){
        alert("Choose a Doctor");   
        return false;
    }
  }