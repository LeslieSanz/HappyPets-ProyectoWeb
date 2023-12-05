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

  // Validar campos solo si estamos en el Paso 1
  if (currentStep === 1) {
    for (let i = 0; i < formInputs.length; i++) {
      const input = formInputs[i];
      const label = findLabel(input);
      const errorMessage = label.nextElementSibling;

      if (!input.value) {
        valid = false;
        input.classList.add("err");
        errorMessage.style.display = "flex";
      } else {
        input.classList.remove("err");
        errorMessage.style.display = "none";

        // Validar el DNI
        if (input.id === "dni") {
          const dniRegex = /^\d{8}$/; // DNI debe tener exactamente 8 dígitos numéricos
          if (!dniRegex.test(input.value)) {
            valid = false;
            input.classList.add("err");
            errorMessage.textContent = " inválido (debe tener 8 dígitos)";
            errorMessage.style.display = "flex";
          }
        }

        // Validar el celular
        if (input.id === "celular") {
          const celularRegex = /^\d{9}$/; // Celular debe tener exactamente 9 dígitos numéricos
          if (!celularRegex.test(input.value)) {
            valid = false;
            input.classList.add("err");
            errorMessage.textContent = " inválido (debe tener 9 dígitos)";
            errorMessage.style.display = "flex";
          }
        }

        // Validar el correo
        if (input.id === "correo") {
          const correoRegex = /.+@.+/; // Correo debe contener al menos un arroba
          if (!correoRegex.test(input.value)) {
            valid = false;
            input.classList.add("err");
            errorMessage.textContent = "Correo inválido";
            errorMessage.style.display = "flex";
          }
        }
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

