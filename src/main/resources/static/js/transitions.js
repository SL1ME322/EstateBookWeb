function showNewEstate() {

    var newEstate = document.getElementById("new_estate");
    newEstate.classList.toggle("visibleSt");
    newEstate.classList.toggle("hiddenSt");
    if (!newEstate.classList.contains("hiddenSt")) {
        newEstate.focus();
        // После фокусировки элемента прокрутите окно, чтобы элемент был видимым
        //newEstate.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'   })
         window.scrollTo({ behavior: 'smooth', top: 100 }
 
        );
       
    }
}

function showAim() {

    var aim = document.getElementById("aim");
    aim.classList.toggle("visibleSt");
    aim.classList.toggle("hiddenSt");
    if (!aim.classList.contains("hiddenSt")) {
        aim.focus();
        // После фокусировки элемента прокрутите окно, чтобы элемент был видимым
        //newEstate.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'   })
         window.scrollTo({ behavior: 'smooth', top: 270 }
 
        );
       
    }
}
function showPossiblePurpose() {

    var purpose = document.getElementById("purpose");
    purpose.classList.toggle("visibleSt");
    purpose.classList.toggle("hiddenSt");
    if (!purpose.classList.contains("hiddenSt")) {
        purpose.focus();
        // После фокусировки элемента прокрутите окно, чтобы элемент был видимым
        //newEstate.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'   })
         window.scrollTo({ behavior: 'smooth', top: 380 }
 
        );
       
    }
}

function showMap() {

    var mapDiv = document.getElementById("mapDiv");
    mapDiv.classList.toggle("visibleSt");
    mapDiv.classList.toggle("hiddenSt");
    if (!mapDiv.classList.contains("hiddenSt")) {
        mapDiv.focus();
        // После фокусировки элемента прокрутите окно, чтобы элемент был видимым
        //newEstate.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'   })
         window.scrollTo({ behavior: 'smooth', top: 650 }
 
        );
       
    }
}

function showObjInfo() {
    if(menuOpen == true){
        var aboutObj = document.getElementById("aboutObj");
        aboutObj.classList.add("visibleSt");
        aboutObj.classList.remove("hiddenSt");
        if (!aboutObj.classList.contains("hiddenSt")) {
            aboutObj.focus();
            // После фокусировки элемента прокрутите окно, чтобы элемент был видимым
            //newEstate.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'   })
             window.scrollTo({ behavior: 'smooth', top: 700 }
     
            );
           
        }
    }
    
}