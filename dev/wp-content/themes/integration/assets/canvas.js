$(function() {


  "use strict";

    var canvas = document.querySelector('canvas'),
        ctx = canvas.getContext('2d'),
        color = '#FFFFFF';
    ctx.fillStyle = color;
    ctx.lineWidth = 0.5;
    ctx.strokeStyle = color;
    var oImage = new Image();
    oImage.addEventListener("load",function(){
      ctx.drawImage(this,290,220);//self represente oApp et this dans la fonction represente l'image
    } ); //on ajoute un écouteur d'évenement pour voir quand l'image sera charger
    oImage.src ="../img/rocket.svg";
    var dots = {
        nb: 300,
        distance: 50,
        d_radius:1,
        array: []
    };

    function Dot() {
        var self=this;
        self.x = Math.random() * canvas.width;
        self.y = Math.random() * canvas.height;
        self.vx = -.5 + Math.random();
        self.vy = -.5 + Math.random();
        self.radius = Math.random();
    }
    Dot.prototype = {
        create: function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
            ctx.fill();
        },
        animate: function() {
            for (var i = 0; i < dots.nb; i++) {
                var dot = dots.array[i];
                if (dot.y < 0 || dot.y > canvas.height) {
                    dot.vx = dot.vx;
                    dot.vy = -dot.vy;
                } else if (dot.x < 0 || dot.x > canvas.width) {
                    dot.vx = -dot.vx;
                    dot.vy = dot.vy;
                }
                dot.x += dot.vx;
                dot.y += dot.vy;
            }
        },
        line: function() {
            for (var i = 0; i < dots.nb; i++) {
                for (var j = 0; j < dots.nb; j++) {
                    var i_dot = dots.array[i];
                    var j_dot = dots.array[j];
                }
            }
        }
    };

    function createDots() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (var i = 0; i < dots.nb; i++) {
            dots.array.push(new Dot());
            var dot = dots.array[i];
            dot.create();
        }
        dot.line();
        dot.animate();
    }
    setInterval(createDots, 1000 / 30);
});
