window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    const loaderContainer = document.querySelector(".loader_container");

    loader.classList.add("loader-hidden");
    loaderContainer.classList.add("loader-hidden");


    loader.addEventListener("animationend", () => {
      document.body.removeChild(loaderContainer);
    });
  });

  
// Check login
// document.addEventListener("DOMContentLoaded", function () {
//     const loggedIn = sessionStorage.getItem("logged-in")
//     console.log(loggedIn)
//     const user = document.getElementById("user")
//     const login = document.getElementById("login")

//     if (loggedIn) {
//         login.classList.remove("show")
//         login.classList.add("hide")
//         user.classList.add("show")
//         user.classList.remove("hide")
//     }
//     else {
//         login.classList.add("show")
//         login.classList.remove("hide")
//         user.classList.remove("show")
//         user.classList.add("hide")
//     }
// })
