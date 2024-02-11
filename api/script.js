const nobtn = document.querySelector(".no")
const btnContainer = document.querySelector(".btn-container")

nobtn.addEventListener("mouseover", () => {
  btnContainer.style.flexDirection = "row-reverse"
})
nobtn.addEventListener("mouseleave", () => {
  btnContainer.style.flexDirection = "row"
})

nobtn.addEventListener("touchstart", (e) => {
  e.preventDefault()
  if (btnContainer.style.flexDirection === "row-reverse") {
    btnContainer.style.flexDirection = "row"
  } else {
    btnContainer.style.flexDirection = "row-reverse"
  }
})
