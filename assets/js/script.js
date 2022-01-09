const collapse = document.getElementsByClassName("show");
const subCollapse = document.getElementsByClassName("sub-show");
let imgShow = document.getElementById('img-show');


for (i = 0; i < collapse.length; i++) {
    collapse[i].addEventListener("click", function() {
        this.classList.toggle("active");
        this.children[0].classList.toggle("rotate")
        let content = this.nextElementSibling;
        if (content.style.display === "flex") {
            content.style.display = "none";
        } else {
            content.style.display = "flex";
        }
    });
}


for (i = 0; i < subCollapse.length; i++) {
    subCollapse[i].addEventListener("click", function() {
        this.classList.toggle("active");
        this.children[0].classList.toggle("rotate")
        let content = this.nextElementSibling;
        if (content.style.display === "flex") {
            content.style.display = "none";
        } else {
            content.style.display = "flex";

        }
    });
}

for (i = 0; i < collapse.length; i++) {
    collapse[i].addEventListener("mouseover", function() {
        this.children[0].style.color = "var(--color1)";
        
    });
}
for (i = 0; i < collapse.length; i++) {
    collapse[i].addEventListener("mouseout", function() {
        if(!this.classList.contains("active")){
        this.children[0].style.color = "var(--color3)";
    }
    });
}


imgShow.addEventListener(('click'), () => {
    let icons = document.getElementById('icons');
    if (icons.style.opacity == "1") {
        icons.style.opacity = "0";
    } else {
        icons.style.opacity = "1";
    }
});

