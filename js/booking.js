const dateInput = document.getElementById('appointment-date');
const timeInput = document.getElementById('appointment-time');
const bookingForm = document.getElementById('bookingForm');
const bookError = document.getElementById('date-time-error');


function timeChecker(){
  timeInput.addEventListener('change', ()=> {
    const timeParts = this.value.split(':');
    const hour = parseInt(timeParts[0], 10);
    const minute = parseInt(timeParts[1], 10);
    if (hour < 9 || hour > 17 || (hour === 17 && minute > 0)) {
      bookError.innerText = '<p style="color:red">Appointments can only be booked between 09:00 and 17:00.</p>';
      this.value = ""; 
    }
  });
}

function bookingFormFun(){
  
  dateInput.addEventListener('change', ()=> {
    const selectedDate = new Date(this.value);
    if (selectedDate.getDay() === 0) {
      bookError.innerText = '<p style="color:red">Appointments cannot be booked on Sundays. Please select another day.</p>';
      this.value = ""; 
    }
  });

  
  bookingForm.addEventListener('submit', (e)=> {
    const selectedDate = new Date(dateInput.value);
    const timeParts = timeInput.value.split(':');
    const hour = parseInt(timeParts[0], 10);
    const minute = parseInt(timeParts[1], 10);
    
    if (selectedDate.getDay() === 0) {
      bookError.innerText = '<p style="color:red">Appointments cannot be booked on Sundays. Please select another day.</p>';
      e.preventDefault();
    }
    
    if (hour < 9 || hour > 17 || (hour === 17 && minute > 0)) {
      bookError.innerText = '<p style="color:red">Appointments can only be booked between 09:00 and 17:00.</p>';
      e.preventDefault();
    }
  });
}
