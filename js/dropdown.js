/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropDownProducts() {
    document.getElementById("products").classList.toggle("show");
 }

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn') || event.target.matches('.scroll')) {

    var dropdowns = document.getElementsByClassName("product-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
