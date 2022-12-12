$(document).ready(function(){
    const date = new Date();
    const hour = date.getHours();
    let message = "";
    console.log(hour);
    if(hour <= 12){
        message = "Good Morning";
    }
    if(hour > 12){
        message = "Good Afternoon";
    }
    if(hour >= 17){
        message = "Good Evening";
    }
    $('#headingText').empty().append(message + " From Lee Tongchher");
    $('.radio-btn').click(function(){
        $('.radio-inner').toggleClass("active");
        $('body').toggleClass("dark");
        $('p').toggleClass("font");
    })
})


// Bar Animation and Dark mode
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});
// Login animation
const inputCheckbox = document.forms.signin.remember;
const inputChecked = document.forms.signin.inputCheckbox;

inputCheckbox.addEventListener("click", handleChangeCheckbox);

function handleChangeCheckbox(e) {
  e.preventDefault();

  if (e.target.value == "") {
    inputCheckbox.innerHTML = '<i class="ph-check"></i>';
    inputChecked.checked = true;
  } else {
    inputCheckbox.innerHTML = "";
    inputChecked.checked = false;
  }
}
