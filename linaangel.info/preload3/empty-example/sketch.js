var mic;
var micOn;
var x=0;

function setup() {
  // uncomment this line to make the canvas the full size of the window
   createCanvas(windowWidth, windowHeight);
   // the volume is a number between 0 and 1
   mic = new p5.AudioIn();
   micOn = false;
   background(255);
}

function draw() {
  // draw stuff here
  if (micOn) {
  	var micLevel = mic.getLevel();
  	var y = map(micLevel, 0, 1, height/2, 0);
  	fill(0);
  	ellipse(x, y, 1, 1);
    x++;
    if (x > width) {
      x = 0;
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