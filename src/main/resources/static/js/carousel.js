//let sliderContainer = document.querySelector('.slider-container');
//let innerSlider = document.querySelector('.inner-slider');
//
//let pressed = false;
//let startX;
//let x;  
//
//sliderContainer.addEventListener('mousedown', (e)=>{
//    pressed = true;
//    startX = e.offsetX - innerSlider.offsetLeft;
//    sliderContainer.style.cursor = "grabbing";
//});
//
//sliderContainer.addEventListener("mouseenter", () => {
//    sliderContainer.style.cursor = "grab";
//     
//});
//
//sliderContainer.addEventListener("mouseup", () => {
//    sliderContainer.style.cursor = "grab";
//    pressed = false;
//})
//
//sliderContainer.addEventListener("mousemove", (e) => {
//    if (!pressed) return;
//    e.preventDefault();
//    x = e.offsetX;
//    innerSlider.style.left = `${x - startX}px`;
//    checkBoundary();
//});
//
//const checkBoundary = () => {
//    let outer = sliderContainer.getBoundingClientRect();
//    let inner = innerSlider.getBoundingClientRect();
//    if (parseInt(innerSlider.style.left)>0){
//        innerSlider.style.left = "0px";
//    }
//    if (inner.right <outer.right){
//        innerSlider.style.left = `-${inner.width - outer.width}px`;
//    }
//};
// set the dropdown menu element
 
const photoList = document.getElementById('photo-list');
const photoCountElement = document.getElementById('photo-count');
const photoCount = photoList.querySelectorAll('.splide__slide').length;

photoCountElement.textContent =  photoCount.toString();


const photoList2 = document.getElementById('photo-list2');
const photoCountElement2 = document.getElementById('photo-count2');
const photoCount2 = photoList2.querySelectorAll('.splide__slide').length;

photoCountElement2.textContent =  photoCount2.toString();

  
 // Initialize and add the map
let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: -25.344, lng: 131.031 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 4,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerView({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();