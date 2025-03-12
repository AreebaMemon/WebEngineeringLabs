let submit = document.getElementById("submit");
let nameError = document.getElementById("nameError");
let cnicError = document.getElementById("cnicError");
submit.addEventListener("click", (event) => {
  event.preventDefault();
  let valid = true;
  nameError.innerHTML = "";
  cnicError.innerHTML = "";
  const name = document.getElementById("name").value;
  const cnic = document.getElementById("cnic").value;

  if (name === "") {
    nameError.innerHTML = "*Name is required";
    document.getElementById("name").focus();
    valid = false;
  }

  if (cnic === "") {
    cnicError.innerHTML = "*CNIC is required";
    valid = false;
  } else if (!/^\d{5}-\d{7}-\d{1}$/.test(cnic)) {
    cnicError.innerHTML = "Invalid CNIC format (XXXXX-XXXXXXX-X)";
    valid = false;
  }

  if (valid) {
    alert("Form submitted successfully!");
    document.getElementById("myForm").reset();}
  });
