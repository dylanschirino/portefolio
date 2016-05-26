( function() {

  "use strict";

  var oApp,
      _isCanvasSupported;

  _isCanvasSupported = function ( $canvasElt ){
      return !!$canvasElt.getContext;
  };

  oApp = {

    "canvas":null,
    "context":null,
    "width":null,
    "height":null

  };

  oApp.setup = function(){

    this.canvas = document.querySelector( "#canvas" ); // this renvoye vers oApp et ses propriété

    if ( !_isCanvasSupported( this.canvas ) ){

        return console.error( "Canvas is not supported" ); // a partir d'ici le code sera executé pas les navigateur Canvas

    }
    this.context = this.canvas.getContext( "2d" );
    this.width = this.canvas.width;
    this.height = this.canvas.height;
    this.draw();
  };

  oApp.drawBackground = function (){
    var oContext = this.context;
    oContext.fillStyle = "#303A40";
    oContext.fillRect( 0,0,this.width,this.height);
  };

  oApp.drawImage = function(){
    var self = this,
        oContext = this.context,
        oImage = new Image();
        oImage.addEventListener("load",function(){
          oContext.drawImage(this,290,220);//self represente oApp et this dans la fonction represente l'image
        } ); //on ajoute un écouteur d'évenement pour voir quand l'image sera charger
        oImage.src ="../img/rocket.svg";
  };
  oApp.drawCircle=function(x,y){
    var self=this,
    oContext=this.context;
    var x = Math.floor(Math.random() * this.canvas.width);
    var y = Math.floor(Math.random() * this.canvas.height);
    oContext.beginPath();
    oContext.arc(x,y,1, 0, 2 * Math.PI);
    oContext.fillStyle = "#c30";
    oContext.fill();
  };
  // On commence le drawing ici tout element du dessus doit se retrouver dans cette fonction
    oApp.draw = function (){
    // Background
    this.drawBackground();
    //one img
    this.drawImage();
    for(var i=0; i<300;i++){
      this.drawCircle();
    }
  }

  oApp.setup();
} )();
