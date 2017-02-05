/* Simple Animations Library */
var inverseList = document.getElementsByClassName('a-inverse');
var inputFields = document.getElementsByClassName('form-input');

$(document).ready(function() {
  // Style elements with inverted colors on hover
  if(inverseList !== null) {
    for(i = 0; i < inverseList.length; i++) {
      inverseList[i].addEventListener("mouseenter", invertColors);
      inverseList[i].addEventListener("mouseout", invertColors);
    }
  }
  // Style input-fields with inverted colors on focus
  if(inputFields !== null) {
    for(i = 0; i < inputFields.length; i++) {
        inputFields[i].addEventListener("focus", invertColors);
        inputFields[i].addEventListener("blur", invertColors);
    }
  }
});

// Invert colors of elements
function invertColors() {
  var color_bkg = window.getComputedStyle(this, null).getPropertyValue("background-color");
  var color = window.getComputedStyle(this, null).getPropertyValue("color");
console.log("test");
  this.style.color = color_bkg;
  this.style.backgroundColor = color;
  this.style.borderColor = color_bkg;
}
