

  // max-768px sidebar menu js
  const nav = document.querySelector(".sidebar-nav-container");
if (nav) {

  const toggle1 = document.querySelector(".hamburber");
  
  if (toggle1) {
    toggle1.addEventListener("click", () => {
      if (nav.classList.contains("is-active")) {
        nav.classList.remove("is-active");
      }
      else {
        nav.classList.add("is-active");
      }
    });
    
    nav.addEventListener("blur", () => {
      nav.classList.remove("is-active");
      
    });
  }

}

// Lang 
const langbtn = document.querySelector(".lang-head");
const langbody = document.querySelector(".lang-head-2");
if (langbtn) {
  langbtn.addEventListener("click", () => {
    if (langbody.style.display == 'block') {
      langbody.style.display = 'none';
    }
    else {
      langbody.style.display = 'block';;
    }
  });
}

// settings
const btnstg = document.querySelector(".settings-btn");


  const bodystg = document.querySelector(".settings-body");
  
  if (btnstg) {
    btnstg.addEventListener("click", () => {
      if (bodystg.classList.contains("settings-hidden")) {
        bodystg.classList.remove("settings-hidden");
      }
      else {
        bodystg.classList.add("settings-hidden");
      }
    });
  }