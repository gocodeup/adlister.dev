<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://static.filestackapi.com/v3/filestack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  var client = filestack.init('A5gY0fZEnTzWuvzsVI5Ttz');
 
 $('#filestackButton').click(function(){
    client.pick({
      accept: 'image/*',
      maxFiles: 5,
      imageMax: [1024, 1024]
    }).then(function(result){
      console.log(JSON.stringify(result.filesUploaded[0].url));
      var $imageUrl = JSON.stringify(result.filesUploaded[0].url);
      console.log($imageUrl);
    $('#img').val($imageUrl);  
  });
})


  var canvas = document.querySelector("canvas");
  var gravity = 0.1;
  var friction = 0.2;
  var flag = true;
  var kill = false;
  var c = canvas.getContext("2d");
  var beaker = document.getElementById("beaker");
  var kill = false;
  var colors = [
  '#779c48',
  '#90c151',
  '#8bef98',
  '#bde589'
  ];
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  window.addEventListener("resize", function() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
          
    });

  function randomIntFromRange(min,max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }

  function randomColor(colors) {
    return colors[Math.floor(Math.random() * colors.length)];
  }

  function Beaker(){
    c.drawImage(beaker, 40, 30, 210, 200);
    c.beginPath()
    c.globalAlpha=.5;
    c.fillRect(100, 110, 100, 69);
    c.fillStyle='#779c48';
    c.stroke();
    c.beginPath();
    c.fillStyle='#779c48';
    c.moveTo(100,179)
    c.bezierCurveTo(100,210,200,210,200,179);
    c.fill();
    c.beginPath();
    c.fillStyle='#779c48';
    c.moveTo(100,110);
    c.bezierCurveTo(100,85,200,85,200,110);
    c.fill();
    c.globalAlpha=1;


  }
  
  function Ball(x, y, dx, dy, radius, color, out, counter, flag) {
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.color = color;
    this.out = out;
    this.counter = counter;
    this.flag = flag;

    this.update = function() {

      if (this.out){
        if (this.y + this.radius + this.dy > canvas.height && this.flag < 3) {
          this.dy = -this.dy;
          this.dy = this.dy * friction;
          this.dx = this.dx * friction;
          this.flag += 1;
        } else if (this.y + this.radius + this.dy > canvas.height && this.flag == 3){
        this.radius += 5;
        kill = true;
          
        }else {
          this.dy += gravity;
        }

        if (this.x + this.radius >= canvas.width || this.x - this.radius <= 0) {
          this.dx = -this.dx * friction;
        }



      } else {


        if (this.y + this.radius > 190) {
          this.dy = -this.dy;
          this.y +=this.dy;
         
        }
        if (this.x + this.radius > 200 || this.x - this.radius < 100) {
          this.dx = -this.dx;
          this.y += this.dy;
        
        }

        if (this.y + this.radius < 100 && this.counter == 4) {
          this.out = true;
          this.dy = -5;

        } else if (this.y + radius < 100) {
          this.counter += 1;
          this.dy = -this.dy;
   

        }

      }
      
      this.x += this.dx;
      this.y += this.dy;
      
      this.draw();
    };



    this.draw = function() {
      c.beginPath();
      c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);  
      c.fillStyle = this.color;
      c.fill();
      c.shadowBlur=80;
      c.strokeStyle = "#779c48";
      c.shadowColor="#779c48";
      c.stroke();
      c.closePath();
      c.fillStyle='#779c48';
     
    }
  }

  var ballArray = [];
  function init() {
    var radius = randomIntFromRange(8, 15);
    var x = randomIntFromRange(120, 150);
    var y = randomIntFromRange(100 , 150 );
    var dx = randomIntFromRange(-2, 2);
    var dy = randomIntFromRange(-2, 2);
    var counter = 0;
    var flag = 0;
    var out = false;
    while(dx <= 0 && dx >= 0){
      dx = randomIntFromRange(-2, 2);
    }
    while(dy <= 0 && dy >= 0){ 
     dy = randomIntFromRange(-2, 2);
    }
      ballArray.push(new Ball(x, y, dx, dy, radius, randomColor(colors), out, counter, flag, kill)); 

  }

  function animate() {

      requestAnimationFrame(animate);
      c.clearRect(0, 0, innerWidth , innerHeight);

    for (var i = 0; i < ballArray.length; i++) {
      ballArray[i].update();
      if (kill) {
        ballArray.splice(i, 1);
        kill = false;
      }
    }
  if (ballArray.length < 15){
    for(var i = 0; i < 2; i++){
    init();  
    }
  }
    Beaker();
  }
      
  animate();
});

</script>