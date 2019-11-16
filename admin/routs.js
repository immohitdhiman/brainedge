pageValue = document.getElementById('pageValue').value;
pageURL = pageValue + ".php";
$("#main-container").load(pageURL)


function addSubmenu() { 
    courseId = $('this .addSubmenu').attr('id');
    alert(courseId);
 }