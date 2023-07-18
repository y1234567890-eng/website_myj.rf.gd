const popup = document.querySelector(".popup")
const popupBtn = document.querySelector(".popup-btn")

popupBtn.addEventListener("click", () => {
  popup.classList.remove("active")
  localStorage.setItem("popupBannerDisplayed", "true");
})

setTimeout(() => {
  if (!localStorage.getItem("popupBannerDisplayed")) {
    popup.classList.add("active");
  }
}, 2000)

document.getElementById('mob-sidebar-btn').addEventListener("click", () => {
  document.getElementById('sidebar').style.display = "inline";
})

document.getElementById('close-icon').addEventListener("click", () => {
  document.getElementById('sidebar').style.display = "none";
})

document.getElementById('sidebar').addEventListener("click", () => {
  document.getElementById('sidebar').style.display = "none";
})