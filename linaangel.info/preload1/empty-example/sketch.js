var ferambie;

function preload() {
  ferambie = loadSound('ferambie.mp3');
}
function setup() {
  // uncomment this line to make the canvas the full size of the window
   createCanvas(windowWidth, windowHeight);
   // the volume is a number between 0 and 1
   ferambie.setVolume(0.5);
}

function draw() {
  // draw stuff here
  // ellipse(width/2, height/2, 50, 50);
}

function mousePressed() {
  ferambie.play();
}