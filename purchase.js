var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var ncardError = document.getElementById('ncard-error');
var ccnumError = document.getElementById('ccnum-error');
var cvvError = document.getElementById('cvv-error');
var validError = document.getElementById('valid-error');
var submitError = document.getElementById('submit-error');

function validateName() {
    var name = document.getElementById('contact-name').value;

    if(name.length == 0){
        nameError.innerHTML = 'Name is required';
        return false;
    }

    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML = 'Write full name';
        return false;
    }
    nameError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
  }

///////////////

function validateNameCard() {
    var ncard = document.getElementById('name-card').value;

    if(ncard.length == 0){
        ncardError.innerHTML = 'Name Card is required';
        return false;
    }

    if(!ncard.match(/^[A-Za-z]*\s{1}[A-Za-z]*\s{1}[A-Za-z]* $/)){
        ncardError.innerHTML = 'Write full name';
        return false;
    }
    ncardError.innerHTML = '<i class = "fas fa-check-circle"></i>';
    return true;
  }

//////////////  
  


  function validatePhone() {
      var phone = document.getElementById('contact-phone').value;

      if(phone.length == 0){
          phoneError.innerHTML = 'Phone no is required';
          return false;
      }
      if(phone.length !== 11){
          phoneError.innerHTML = 'Phone no. should be 10 digits';
          return false;
      }

      if(!phone.match(/^[0-9]{11}$/)){
          phoneError.innerHTML = 'Only digit please';
          return false;
      }

      phoneError.innerHTML = '<i class = "fas fa-check-circle"></i>';
      return true;
    }

////////////////
function validateCardNum() {
      var ccnum = document.getElementById('card-number').value;

      if(ccnum.length == 0){
          ccnumError.innerHTML = 'Credit card no. is required';
          return false;
      }
      if(ccnum.length !== 19){
          ccnumError.innerHTML = 'should be 19 digits';
          return false;
      }

      if(!ccnum.match(/^[0-9]{4}\s{1}[0-9]{4}\s{1}[0-9]{4}\s{1}[0-9]{4}$/)){
          ccnumError.innerHTML = 'Only digit please';
          return false;
      }

      ccnumError.innerHTML = '<i class = "fas fa-check-circle"></i>';
      return true;
    }
	
	///////////////
	
	///////////////
	
	function validateCVV() {
      var cvv = document.getElementById('cvv-number').value;

      if(cvv.length == 0){
          cvvError.innerHTML = 'CVV no. is required';
          return false;
      }
      if(cvv.length !== 3){
          cvvError.innerHTML = 'should be 3 digits';
          return false;
      }

      if(!cvv.match(/^[0-9]{3}$/)){
          cvvError.innerHTML = 'Only digit please';
          return false;
      }

      cvvError.innerHTML = '<i class = "fas fa-check-circle"></i>';
      return true;
    }

	///////////////
	
	//////////////
	function validateValidThru() {
      var valid = document.getElementById('valid-thru').value;

      if(valid.length == 0){
          validError.innerHTML = 'valid Thru is required';
          return false;
      }
      if(valid.length !== 5){
          validError.innerHTML = 'should be 4 digits';
          return false;
      }

      if(!valid.match(/^[0-9]{2}\/[0-9]{2}$/)){
          validError.innerHTML = 'Only digit please';
          return false;
      }

      validError.innerHTML = '<i class = "fas fa-check-circle"></i>';
      return true;
    }
	/////////////
	
	
    function validateEmail() {
        var email = document.getElementById('contact-email').value;

        if(email.length == 0){
            emailError.innerHTML = 'Email is required'
            return false;
        }

        if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML = 'Email Invalid'
            return false;
        }
        
      emailError.innerHTML = '<i class = "fas fa-check-circle"></i>';
      return true;
      }



        function validateForm() {
            if(!validateName() || !validateEmail() || !validatePhone() || !validateNameCard() || !validateCardNum() || !validateCVV() || !validateValidThru()){
                submitError.style.display = 'block';
                submitError.innerHTML = 'Please complete the information';
                setTimeout(function(){submitError.style.display = 'none';}, 3000);
                return false;
            }
            alert("Thank you for purchasing the book.(@_@) We wish you a pleasant reading")
          }
		  
		  
