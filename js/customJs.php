<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script>
let lastRun = 0;
const menuCheckbox = document.getElementById("menu_checkbox");
document.getElementById("sven").style.animationName = "changeTwo";
document.getElementById("svenZwei").style.animationName = "einsTextButtonGardient";
const menu = document.getElementById("menu");
menuCheckbox.addEventListener("mouseover", () => {
    if (window.matchMedia("(min-width: 640px)").matches) {
        switchMenu();
    }
});
menu.addEventListener("mouseleave", (event) => {
    if (window.matchMedia("(min-width: 640px)").matches) {
        switchMenu();
    }
});

function switchMenu() {
    if (lastRun == null || new Date().getTime() - lastRun > 250) {
        var checkBox = document.getElementById("menu_checkbox");
        var menu = document.getElementById("menu");
        if (menu.style.visibility != "visible") {
            menu.style.visibility = "visible";
            menu.style.opacity = "1";
            menu.style.transform = "translate3d(0, 0px, 0)";
            checkBox.checked = true;
        } else {
            menu.style.visibility = "hidden";
            menu.style.opacity = "0";
            menu.style.transform = "translate3d(0, 100px, 0)";
            checkBox.checked = false;
        }
    }
    lastRun = new Date().getTime();
}

var elList = document.getElementsByClassName("fadeInAnimationJs");
function fadeInAnimation(ani) {
    for (let el of elList) {
        var old_visible = false;
        var visible = isElementInViewport(el);
        if (visible != old_visible) {
            old_visible = visible;
            //Delete the Properties from the function fadeInAnimationStart().
            el.style.opacity = "";
            var ani = el.getAttribute("data-animation");
            el.classList.add(ani);
        }
    }
}

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (rect.top + 200 <= (window.innerHeight || document.documentElement.clientHeight) && rect.left >= 0 && rect
        .bottom >= 0 && rect.right >= 0 || rect.top <= 0);
}

function fadeInAnimationStart() {
    var elList = document.getElementsByClassName("fadeInAnimationJs");
    for (let el of elList) {
        el.style.transitionDuration = "100ms";
        el.style.opacity = "0";
    }
}
fadeInAnimationStart();

function scrollIntoViewDelay(id) {
    switchMenu();
    var elList = document.getElementsByClassName("fadeInAnimationJs");
    for (let el of elList) {
        el.style.opacity = "";
        el.style.paddingTop = "";
    }
    setTimeout(() => {
        document.getElementById(id).scrollIntoView();
    }, 300);
}
if (window.addEventListener) {
    addEventListener("DOMContentLoaded", fadeInAnimation, false);
    addEventListener("load", fadeInAnimation, false);
    addEventListener("scroll", fadeInAnimation, false);
    addEventListener("resize", fadeInAnimation, false);
} else if (window.attachEvent) {
    attachEvent("onDOMContentLoaded", fadeInAnimation); // Internet Explorer 9+ :(
    attachEvent("onload", fadeInAnimation);
    attachEvent("onscroll", handfadeInAnimationler);
    attachEvent("onresize", fadeInAnimation);
}

mailButton = document.getElementById("mailButton");
mailButtonText = document.getElementById("mailButtonText");
mailButton.addEventListener("click", function() {
    console.log("Der Button wurde geklickt!");
    mailButtonText.textContent = "Copy!";
    setTimeout(function() {
        mailButtonText.textContent = "Mail";
    }, 1000);
    var text = "hindemitwork@gmail.com";
    navigator.clipboard.writeText(text);
});
var container = document.getElementById("wpforms-78");
var formsHeader = document.getElementById("formsHeader");
// Event Listener hinzufügen
container.addEventListener("DOMNodeRemoved", function(event) {
    var removedElement = event.target;
    if (removedElement.id === "wpforms-form-78") {
        formsHeader.remove();
    }
});
</script>