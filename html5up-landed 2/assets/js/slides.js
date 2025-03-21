let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length - 1) {
    $("a.next").hide();
    $("#save").show();
  }else{
    $("a.next").show();
    $("#save").hide();
  }
  if (n == 1) {
    $("a.prev").hide();
  }else{
    $("a.prev").show();
  }
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
  //document.getElementsByClassName('slideshow-container').scrollIntoView(true);
}

function save() {
    var details = new Array();
    var purpose = new Array();
    var stakeholders = new Array();

$("#details select option:selected").each(function() // $ => jQuery for each select it does the fonction tab.push + for each select in details
{
    details.push($(this).text());
});

$("#purpose select option:selected").each(function()
{
    purpose.push($(this).text());
});
purpose.push($("#purpose input").val());
$("#stakeholders select option:selected").each(function()
{
    stakeholders.push($(this).text());
});

    details = JSON.stringify(details);
    purpose = JSON.stringify(purpose);
    stakeholders = JSON.stringify(stakeholders); // to optimize do a matrix, multidimensional table

    // $("#entry_0").val() $call jquery - #getID
    $.post('save.php', {details:details, purpose:purpose, stakeholders:stakeholders}, function(response){ //callback of post function -- cf. pdoexception
        window.location.replace("results.php");
        console.log(response); // print error in console
        
});
}