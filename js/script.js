const getEmail = document.getElementById('patient-email');
const requestMed = document.getElementById('med-id');
const copyrightText = document.getElementById('copyright');


document.body.addEventListener("DOMContentLoaded", function() {
  const disp = document.querySelectorAll(".container-2 .img");


  for (let dis of disp) {
    dis.addEventListener('mouseenter', (event) => {
      const span = event.currentTarget.querySelector("span");
      if (span) {
        span.style.display = "block";
      }
    });

    dis.addEventListener('mouseleave', (event) => {
      const span = event.currentTarget.querySelector("span");
      if (span) {
        span.style.display = "none";
      }
    });
  }
});


function isValidEmail(email) {
  const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return regex.test(email);
}

function emailCheck() {
  requestMed.addEventListener('click',(event)=>{
    
    if (isValidEmail(getEmail.value)) {
      console.log("Pass");
      getEmail.classList.remove('red');
    } else {
      getEmail.classList.add('red');
      event.preventDefault();
      console.log("Fail");
    }
  })
  
}
