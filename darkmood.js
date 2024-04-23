var content = document.body;
var darkMode = document.getElementById('dark-change');
darkMode.addEventListener('click', function(){
    darkMode.classList.toggle('active');
    content.classList.toggle('night');
    if(content.classList.contains("night")){
        localStorage.setItem("theme","night");
    }else{
        localStorage.setItem("theme","");
    }
})
function themeUpdate(){
    if(localStorage.getItem("theme")!==null){
        if(localStorage.getItem("theme") == "night"){
            content.classList.add("night");
        darkMode.classList.add('active');
        }else{
            content.classList.remove("night");
        darkMode.classList.remove('active');
        }
    }
}

themeUpdate();