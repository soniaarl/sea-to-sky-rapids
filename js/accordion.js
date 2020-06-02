const acc = document.getElementsByClassName("questions_answers");
const i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.slideToggle("active");

    /* Toggle between hiding and showing the active panel */
    const panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


/* CSS to be added once ready */


/* 
.active, .accordion:hover,
button:focus {
  background-color: #ccc;
  background: #ccc;
  border: none;
}
*/

/* 
.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
/*  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
/* }


*/