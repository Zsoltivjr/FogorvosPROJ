
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
    let time = document.forms["myForm"]["time"].value;
    if(time == ""){
        alert("Pick a Time");   
        return false;
    }
    let doctor = document.forms["myForm"]["doctor"].value;
    if(doctor == ""){
        alert("Choose a Doctor");   
        return false;
    }
}

$(document).ready(function() {
    $.ajax({
      url: "data.php", // Replace with the actual URL of your server-side script
      type: "GET",
      success: function(data) {
        $("#data-container").html(data); // Update the content of the data-container div with the fetched data
      },
      error: function() {
        $("#data-container").html("Error occurred while fetching data."); // Display an error message if the AJAX request fails
      }
    });
  });