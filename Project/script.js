function Validation()
{
  let first=document.forms["userform"]["fname"].value;
  let last=document.forms["userform"]["lname"].value;
  let email=document.forms["userform"]["email"].value;
  let pass=document.forms["userform"]["pass"].value;
  let phone=document.forms["userform"]["phn"].value;
  // let gender=document.forms["userform"]["gender"].value;

  if(first =="" )
  {
    document.getElementById("fError").innerHTML="First name is required";
    return false;
  }
  if( last =="")
  {
    document.getElementById("lError").innerHTML="Last Name is required";
    return false;
  }
  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "") {
      document.getElementById("mailError").innerHTML = "Email is required";
      return false;
  } else if (!emailPattern.test(email)) {
      document.getElementById("mailError").innerHTML = "Invalid email format";
      return false;
  }
  if(pass.length<6)
  {
    document.getElementById("passError").innerHTML="Password must be at least 6 character";
    return false;
  }
  if (phone.length !== 11) {
    document.getElementById("phoneError").innerHTML = "Phone number must be exactly 11 digits";
    return false;
  }
  let selectedGender = document.querySelector('input[name="gender"]:checked');

if (!selectedGender) {
    document.getElementById("genderError").innerHTML = "Please select a gender";
    return false;
} else {
    document.getElementById("genderError").innerHTML = "";
}

  
}




