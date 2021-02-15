(function()
{
  var canvas = document.createElement('canvas'),
  ctx = canvas.getContext('2d'),
  w = canvas.width = innerWidth,
  h = canvas.height = innerHeight,
  particles = [],
  properties = {bgColor : 'rgba(17,17,19,1)',
                particleColor : 'rgba(255,40,40,1)',
                particleRadius : 2,
                particleCount : 1,
                particleMaxVelocity : 0.5
                };

  document.querySelector('body').appendChild(canvas);

  window.onresize = function()
  {
    w = canvas.width = innerWidth,
    h = canvas.height = innerHeight;
  }

  class Particle
  {
    constructor()
    {
      this.x = Math.random()*w;
      this.y = Math.random()*h;
      this.velocityX = Math.random()*(properties.particleMaxVelocity*2) - properties.particleMaxVelocity;
      this.velocityY = Math.random()*(properties.particleMaxVelocity*2) - properties.particleMaxVelocity;
    }
    position()
    {
      console.log(this.x);
      this.x += this.velosityX;
      this.y += this.velosityY;
    }
    reDraw()
    {
      ctx.beginPath();
      ctx.arc(this.x, this.y, properties.particleRadius, 0, Math.PI*2);
      ctx.closePath();
      ctx.fillStyle = properties.particleColor;
      ctx.fill();
    }
  }

  function reDrawBackground()
  {
    ctx.fillStyle = properties.bgColor;
    ctx.fillRect(0,0,w,h);
  }

  function reDrawParticles()
  {
    for(var i in particles)
    {
      particles[i].position();
      particles[i].reDraw();
    }
  }

  function loop()
  {
    reDrawBackground();
    reDrawParticles();
    requestAnimationFrame(loop);
  }

  function init()
  {
    for(var i = 0; i < properties.particleCount; i++)
      {
        particles.push(new Particle);
      }
    loop();
  }

  init();
}());
