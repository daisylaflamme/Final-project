var canvas = document.getElementsByTagName('canvas')[0];
var width = 800;

function sketch(p) {
  
  var data = tweetValues;//this is the jason object with nested objects
  var coordinates = []; //I will use this array to store x and y coordinates. 
          

  function plot(coordinates, color1, color2, color3) {
    //var c1 = parseInt(p.random(255), 10);
    p.fill(color1, color2, color3, 100);  
    p.noStroke();

    var plot = p.beginShape();

    for (var i = 0; i < coordinates.length; i++) {
      p.vertex(coordinates[i].x, coordinates[i].y);
    }
    p.vertex(coordinates[coordinates.length-1].x, 0); // add a point at the bottom right corner
    p.vertex(0, 0); // add a point at the origin

    p.endShape();
  }

  function normalizeCoordinates() {
    // flip Processing's weird coordinate system with (0, 0) in the top left
    p.translate(0, p.height)
    p.scale(1, -1);
  }

  function xyColorMap (hashTag, xInterval, color1, color2, color3){
    //accesing values in from the values.json
    var ed =[]; //previously ed. ed is an array of y coordinates
    var xSpacing = 0; // = width/(ed.length-1);
    p.beginShape();
    for(var prop in data){//prop is each tweetInterval
      var state_obj = data[prop];//each state:value object

      //console.log(prop);
      for(var state_prop in state_obj){//state_prop is each  state property in the state object
        var state_value = state_obj[state_prop]//and this is the state property's values which are an arrays of 2 values(string and float)
        for(var i=0; i<state_value.length-1; i++){
          //var array_two_values = state_value[i]
          if(state_value[i][0] == hashTag){
            //console.log(state_value[i][1]); 
            ed[i] = p.map(parseInt((state_value[i][1])*10000, 10), 0, 600, 0, p.height); //suggested function to use
            //ed[i] = parseInt((state_value[i][1])*5000, 10);//y
            //console.log(ed[i]);// this is y
            //ed[i] = parseInt((state_value[i+1][i+1])*10000, 10);//this is the float numeric value of the nested state array
            xSpacing = xSpacing + xInterval;
            //console.log(xSpacing);
            for (var j = 0; j < state_prop.length; j++) {
              coordinates[j] = {'x': xSpacing , 'y': ed[i]}; // use a dictionary for easy x, y access
              //console.log(parseInt(xSpacing, 10) + "," + ed[i]);  
              plot(coordinates, color1, color2, color3);  
            }  //end for j          
          }//end if

        }//end for i
      }//end for state_prop
    }//end for prop
    p.endShape();
  }//end xyColorMap

  function scrubRect(newX){
    //p.beginShape();
    p.fill(0, 255, 0);
    p.rect(newX, 0, 10, p.height);
    //p.endShape();
  }

  function canvasBackground(canvas) {
    // (1) This function actually plots the loudness in an orphaned canvas
    // element--_i.e._ a canvas element not in the DOM--and then converts it
    // to https://en.wikipedia.org/wiki/Base64 to construct an image we use
    // as the background of a row, on the fly

    // You can read more about this technique at:
    // http://www.html5canvastutorials.com/advanced/html5-canvas-get-image-data-url/

    //var canvas = document.getElementsByTagName('canvas')[0];
    var binaryImageData = canvas.toDataURL("image/png");
    canvas.style.backgroundImage = "url(" + binaryImageData + ")";

    return binaryImageData;
  }

  function setup() {
    p.size(800, 400);
    // p.size(width); // scale our sketch to be 1280px
    normalizeCoordinates();
    //plot(coordinates);
    xyColorMap ("#healthcare", .6, 100, 80, 0);
    xyColorMap ("#fairness", .6, 10, 67, 200);
    xyColorMap ("#education", .6, 25, 0, 0);
    xyColorMap ("#energy", .6, 0, 0, 255);                
    xyColorMap ("#immigration", .6, 255, 0, 255);
    xyColorMap ("#defense", .6, 180, 0, 200);
    xyColorMap ("#jobs", .6, 255, 0, 0);    
    //initialize the scrub bar
    // scrubRect(0);
    
  }//end setup()

  function draw() {
    var pic = p.loadImage(canvasBackground(canvas));
    p.background(pic);
    //scrubRect(0);        
    scrubRect(p.mouseX);
    // p.println("m");
    //p.pmouseX == 0;

  }// end draw

p.setup = setup;
p.draw = draw;
}
    
var p = new Processing(canvas, sketch); // actually attach and run the sketch