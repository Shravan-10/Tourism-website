function navOpen(){
     alert("Hello Shravan");
    document.getElementById("nav-bar").style.display="block";
    document.getElementById("nav_list").style.display="block";
    document.getElementById("open").style.display="none";
    document.getElementById("close").style.display="block";    
}
function navClose(){
    alert("bye Shravan");
    document.getElementById("nav-bar").style.display="flex";
    document.getElementById("nav_list").style.display="none";
    document.getElementById("open").style.display="block";
    document.getElementById("close").style.display="none";  
}
