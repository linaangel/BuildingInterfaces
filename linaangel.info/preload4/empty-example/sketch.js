var mic;
var micOn;
var x=0;
var y;
var py = 0;
var px = 0;

function setup() {
  // uncomment this line to make the canvas the full size of the window
   createCanvas(windowWidth, windowHeight);
   // the volume is a number between 0 and 1
   mic = new p5.AudioIn();
   micOn = false;
   background(255);
   y = 100;
}

function draw() {
  // draw stuff here
  if (micOn) {
  	py = y;
    px = x;
    var micLevel = mic.getLevel();
  	y = map(micLevel, 0, 1, y, 0);
  	fill(0);
  	line(x-1, py, x, y);
    x++;
    if (x > width) {
      x = 0;
      y +=100;
    }
  }
}

function mousePressed() {
	micOn = !micOn;
	if (micOn) {
		mic.start();
	}
	else {
		mic.stop();
	}
}