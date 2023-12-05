const steps = document.querySelectorAll(".stp");
const circleSteps = document.querySelectorAll(".step");
const formInputs = document.querySelectorAll(".step-1 form input");

let time;
let currentStep = 1;
let currentCircle = 0;

steps.forEach((step) => {
  const nextBtn = step.querySelector(".next-stp");
  const prevBtn = step.querySelector(".prev-stp");
  
  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      document.querySelector(`.step-${currentStep}`).style.display = "none";
      currentStep--;
      document.querySelector(`.step-${currentStep}`).style.display = "flex";
      circleSteps[currentCircle].classList.remove("active");
      currentCircle--;
    });
  }

  nextBtn.addEventListener("click", () => {
    if (currentStep < 5 && validateForm()) {
      document.querySelector(`.step-${currentStep}`).style.display = "none";
      currentStep++;
      currentCircle++;
      document.querySelector(`.step-${currentStep}`).style.display = "flex";
      circleSteps[currentCircle].classList.add("active");
    }
  });
});

function validateForm() {
  let valid = true;

  // Validar otros campos solo si estamos en el Paso 1
  if (currentStep === 1) {
    for (let i = 0; i < formInputs.length; i++) {
      if (!formInputs[i].value) {
        valid = false;
        formInputs[i].classList.add("err");
        findLabel(formInputs[i]).nextElementSibling.style.display = "flex";
      } else {
        formInputs[i].classList.remove("err");
        findLabel(formInputs[i]).nextElementSibling.style.display = "none";
      }
    }
  }

  // Validar el checkbox solo si estamos en el Paso 2
  if (currentStep === 2) {
    const miCheckbox = document.getElementById("miCheckbox");
    const checkboxLabel = findLabel(miCheckbox);
    if (!miCheckbox.checked) {
      valid = false;
      // Agregar un estilo para resaltar el checkbox
      checkboxLabel.style.color = "red";
      checkboxLabel.style.fontWeight = "bold";
    } else {
      // Restablecer el estilo si el checkbox está marcado
      checkboxLabel.style.color = "";
      checkboxLabel.style.fontWeight = "";
    }
  }

  return valid;
}

function findLabel(el) {
  const idVal = el.id;
  const labels = document.getElementsByTagName("label");
  for (let i = 0; i < labels.length; i++) {
    if (labels[i].htmlFor == idVal) return labels[i];
  }
}

