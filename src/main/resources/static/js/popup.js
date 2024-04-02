let popup = document.getElementById("authorize");
function openAuthorization(){
    
    popup.classList.add("open_login");
    
    document.body.style.overflowY = 'hidden';
    popup.classList.remove("close_login");
}
function closeAuthorization(){
    
    popup.classList.add("close_login");
    
    document.body.style.overflowY = 'visible';
    popup.classList.remove("open_login");
}
 
 

//  setTimeout(function(){
//      document.body.style.overflow =  '';
//      window.scrollTo(0,scrollPosition);
//  }, 5000)