import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

const container = document.getElementById( 'dashboard' );
const renderer = new THREE.WebGLRenderer({ antialias: true });
 
renderer.outputColorSpace = THREE.SRGBColorSpace;

 
// renderer.setClearColor(0x00000);
 
renderer.setClearColor(0x808080);
 renderer.setSize(window.innerWidth * 0.6  , window.innerHeight * 0.83    );
 renderer.setPixelRatio(window.devicePixelRatio);
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;

 

 

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
camera.position.set(32, 32, 32);

const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.enablePan = false;
controls.minDistance = 5;
controls.maxDistance = 100;
controls.minPolarAngle = 0.5;
controls.maxPolarAngle = 1.5;
controls.autoRotate = false;
controls.target = new THREE.Vector3(0, 1, 0);
controls.update();

const groundGeometry = new THREE.PlaneGeometry(20, 20, 32, 32);
groundGeometry.rotateX(-Math.PI / 2);
const groundMaterial = new THREE.MeshStandardMaterial({
  color: 0x555555,
  side: THREE.DoubleSide
});
const groundMesh = new THREE.Mesh(groundGeometry, groundMaterial);
groundMesh.castShadow = false;
groundMesh.receiveShadow = true;
scene.add(groundMesh);

const spotLight = new THREE.SpotLight(0xffffff,  12, 90, 90, 1);
spotLight.position.set(22, 21, 15);
spotLight.castShadow = true;
spotLight.shadow.bias = -0.0001;
 
scene.add(spotLight);
// const helper = new THREE.SpotLightHelper(spotLight);
// 				scene.add(helper);

const loader = new GLTFLoader().setPath('autumn_house/');
loader.load('scene.gltf', (gltf) => {
  const mesh = gltf.scene;
  mesh.traverse((child) => {
    if (child.isMesh) {
      child.castShadow = true;
      child.receiveShadow = true;
    }
  });

  mesh.position.set(0, 1.01, 2);
 
  scene.add(mesh);

//   document.getElementById('progress-container').style.display = 'none';
// }, ( xhr ) => {
//   document.getElementById('progress').innerHTML = `LOADING ${Math.max(xhr.loaded / xhr.total, 1) * 100}/100`;
//   console.log('Loading progress:', xhr.loaded / xhr.total);
},);

window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth* 0.6 , window.innerHeight* 0.83);
});

function animate() {
  requestAnimationFrame(animate);
  controls.update();
  renderer.render(scene, camera);
}
container.appendChild( renderer.domElement );
animate();


