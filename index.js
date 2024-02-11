const nobtn = document.querySelector(".no")
const btnContainer = document.querySelector(".btn-container")

nobtn.addEventListener("mouseover", () => {
  btnContainer.style.flexDirection = "row-reverse"
})
nobtn.addEventListener("mouseleave", () => {
  btnContainer.style.flexDirection = "row"
})
