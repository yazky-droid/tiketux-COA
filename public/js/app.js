const hamburger = document.querySelector("#hamburgerMenu");
const menu = document.querySelector("#menu");
const hLink = document.querySelectorAll("#hLink");
const moon = document.querySelectorAll("#moon");
const body = document.querySelector("body");
let darkMode;

if(localStorage.getItem("darkMode") === "true"){
    body.classList.add("dark");
}

hamburger.addEventListener("click", () => {
    menu.classList.toggle("hidden");

});

hLink.forEach(link => {
    link.addEventListener("click", ()=>{
        menu.classList.toggle("hidden");

    });
});

moon.forEach(toggleMoon => {
    toggleMoon.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (document.body.classList.contains("dark")) {
        toggleMoon.src="http://localhost:8000/img/sun.png";
        localStorage.setItem("darkMode", true);
        darkMode = localStorage.getItem("darkMode");

}else{
    toggleMoon.src="http://localhost:8000/img/moon.png";
    localStorage.clear();
    localStorage.setItem("darkMode", false);
    darkMode = localStorage.getItem("darkMode");
}
});
});


