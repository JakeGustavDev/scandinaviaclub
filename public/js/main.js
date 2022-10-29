const goto = (url) => {
    window.location.href = url;
}
const toggle_menu = (event,id,selector) => {
    if(event.target.style.backgroundColor != "var(--button--color)"){
        event.target.style.backgroundColor = "var(--button--color)";
    }else{
        event.target.style.backgroundColor = "var(--main--color)";
    }
    const div = document.getElementById(id);
    const options = document.querySelectorAll(selector);
    options.forEach((option)=>{
        if(option.id != id){
            option.style.display = "none";
        }
    })
    if(div.style.display == "none"){
        div.style.display = "flex";
    }else{
        div.style.display = "none";
    }
}