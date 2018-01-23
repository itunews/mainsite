<?php
/*
Template Name: 404
*/
?>

<?php get_header(); ?>

<!--IND: get the header -->

<div class="404back" style="background-color:#86C6EC;height:100vh;max-width:100vw;">
    <img class="ituanilogo" srcset="<?php echo get_template_directory_uri() . '/media/itubadge svg_animated.svg'; ?>" src="<?php echo get_template_directory_uri() . '/media/itubadge svg_animated.svg'; ?>">
<div class="container">
    <div class="row">
        <div class="col l6 push-l1">
<div class="ITU404block">
<h1>Oops! We could not find the page you are looking for</h1>
    </div>
    </div>
        </div>
    
    <?php $query = new WP_Query( 'showposts=1' ); ?> <!--ITU NEWS DOCUMENTATION (IND): start a Wordpress database inquiry (loop) with only one latest item -->
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?> <!--ITU NEWS DOCUMENTATION (IND): if there are posts in the database, get that 1 post-->
    


<a href="<?php the_permalink() ?>"> <!--ITU NEWS DOCUMENTATION (IND): get the relative URI of the current post being called and add to a href-->
    <div class="row">
    <div class="col l8 push-l1">
    <div class="ITU404blockarticle">
        <h5 style="letter-spacing:-0.00vw;">Here is the latest article you can read instead:</h3>
<h2><?php the_title(); ?></h2>
    
    </div>
        </div>
        </div>
    </a>
    
     <!--IND: close the wordpress loop that was initiated at the beginning to terminate the database inquiry of the 1 latest article -->
    <?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'Sorry ITU News could not find anything else  :(' ); ?></p>
<?php endif; ?>


</div>
    </div>
<canvas id="canvas"></canvas>

  <!--
<script src='https://cdnjs.cloudflare.com/ajax/libs/gl-matrix/2.1.0/gl-matrix.js'></script>

<script>
/*
    *** TRAVELING THROUGH SPACE ***
    
    An attempt of writing a space travel animation
    
*/

var canvas = document.getElementById('canvas');
var flr = Math.floor;

canvas.width = canvas.offsetWidth;
canvas.height = canvas.offsetHeight;

var halfw = canvas.width / 2,
    halfh = canvas.height / 2,
    step = 2,
    warpZ = 12,
    speed = 0.075;
var stampedDate = new Date();

var ctx = canvas.getContext('2d');

ctx.fillStyle = 'black';
ctx.fillRect(0,0, canvas.width, canvas.height);

function rnd(num1, num2) {
    return flr(Math.random() * num2 * 2) + num1;
}

function getColor() {
    return 'hsla(200,100%, ' + rnd(50,100) + '%, 1)';
}

var star = function() {
    var v = vec3.fromValues(rnd(0 - halfw,halfw),rnd(0 - halfh,halfh), rnd(1, warpZ));
    
    
    this.x = v[0];
    this.y = v[1];
    this.z = v[2];
    this.color = getColor();
    
    
    this.reset = function() {
        v = vec3.fromValues(rnd(0 - halfw,halfw),rnd(0 - halfh,halfh), rnd(1, warpZ));

        this.x = v[0];
        this.y = v[1];
        this.color = getColor();
        vel = this.calcVel();
    }
    
    this.calcVel = function() {
        
        return vec3.fromValues(0, 0, 0 - speed);
    };
    
    var vel = this.calcVel();
    
    this.draw = function() {
        vel = this.calcVel();
        v = vec3.add(vec3.create(), v, vel);
        var x = v[0] / v[2];
        var y = v[1] / v[2];
        var x2 = v[0] / (v[2] + speed * 0.50);
        var y2 = v[1] / (v[2] + speed * 0.50);
        
        ctx.strokeStyle = this.color;
        ctx.beginPath();
        ctx.moveTo(x, y);
        ctx.lineTo(x2, y2);
        ctx.stroke();
        
        if (x < 0 - halfw || x > halfw || y < 0 - halfh || y > halfh) {
            this.reset();
        }
    };
    
}

var starfield = function() {
    var numOfStars = 250;
    
    var stars = [];
    
    function _init() {
        for(var i = 0, len = numOfStars; i < len; i++) {
            stars.push(new star());
        }
    }    
    
    _init();
    
    this.draw = function() {
        ctx.translate(halfw, halfh);
        
        for(var i = 0, len = stars.length; i < len; i++) {
            var currentStar = stars[i];
            
            currentStar.draw();
        }
    };
    
}

var mStarField = new starfield();

function draw() {
    
    // make 5 seconds
    var millSeconds = 1000 * 10;
    
    var currentTime = new Date();
    
    speed = 0.025;
  
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.fillStyle = 'rgba(134,198,236,0.1)';
    ctx.fillRect(0,0, canvas.width, canvas.height);
    
    mStarField.draw();
    
    window.requestAnimationFrame(draw);
}

draw();

window.onresize = function() {
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    halfw = canvas.width / 2;
    halfh = canvas.height / 2;
};



</script>
-->
