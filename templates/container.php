<style>

/* <!-- aDDED --> */
* {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    box-sizing: border-box
}

*:before,
*:after {
    box-sizing: border-box
}

html,
body {
    min-height: 100%
}

body {
    background-color: #266aa8;
}

h1 {
    display: table;
    margin: 5% auto 0;
    text-transform: uppercase;
    font-family: 'Times Roman', sans-serif;
    font-size: 3em;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px white, 0 1px black
}

.container {
    margin: 4% auto;
    width: 210px;
    height: 140px;
    position: relative;
    perspective: 1000px
}

#carousel {
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 20s infinite linear
}

#carousel:hover {
    animation-play-state: paused
}

#carousel figure {
    display: block;
    position: absolute;
    width: 90%;
    height: 50%px;
    left: 10px;
    top: 10px;
    background: black;
    overflow: hidden;
    border: solid 3px black
}

#carousel figure:nth-child(1) {
    transform: rotateY(0deg) translateZ(288px)
}

#carousel figure:nth-child(2) {
    transform: rotateY(40deg) translateZ(288px)
}

#carousel figure:nth-child(3) {
    transform: rotateY(80deg) translateZ(288px)
}

#carousel figure:nth-child(4) {
    transform: rotateY(120deg) translateZ(288px)
}

#carousel figure:nth-child(5) {
    transform: rotateY(160deg) translateZ(288px)
}

#carousel figure:nth-child(6) {
    transform: rotateY(200deg) translateZ(288px)
}

#carousel figure:nth-child(7) {
    transform: rotateY(240deg) translateZ(288px)
}

#carousel figure:nth-child(8) {
    transform: rotateY(280deg) translateZ(288px)
}

#carousel figure:nth-child(9) {
    transform: rotateY(320deg) translateZ(288px)
}

#carousel figure img {
    height: 200px
}

img:hover {
    -webkit-filter: grayscale(0);
    transform: scale(1.2, 1.2)
}

@keyframes rotation {
    from {
        transform: rotateY(0deg)
    }

    to {
        transform: rotateY(360deg)
    }
}
</style>



<h1>Featured Products</h1><br>
<div class="container">
    <div id="carousel">
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
        <figure><a href="#"><img src="img/products/pink.jpg"></a></figure>
    </div>
</div>
<!-- products images chose
					<div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
  <div class="row py-3 shadow-5">
    <div class="col-12 mb-1">
      <div class="lightbox">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
          alt="Gallery image 1"
          class="ecommerce-gallery-main-img active w-100"
        />
      </div>
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
        alt="Gallery image 1"
        class="active w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
        alt="Gallery image 2"
        class="w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
        alt="Gallery image 3"
        class="w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
        alt="Gallery image 4"
        class="w-100"
      />
    </div>
  </div>
</div>


 -->