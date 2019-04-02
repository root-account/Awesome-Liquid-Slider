
{
	setTimeout(() => document.body.classList.add('render'), 60);
	const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
	const total = navdemos.length;
	const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
	const navigate = (linkEl) => {
		document.body.classList.remove('render');
		document.body.addEventListener('transitionend', () => window.location = linkEl.href);
	};
	navdemos.forEach(link => link.addEventListener('click', (ev) => {
		ev.preventDefault();
		navigate(ev.target);
	}));
	/*
	document.addEventListener('keydown', (ev) => {
		const keyCode = ev.keyCode || ev.which;
		let linkEl;
		if ( keyCode === 37 ) {
			linkEl = current > 0 ? navdemos[current-1] : navdemos[total-1];
		}
		else if ( keyCode === 39 ) {
			linkEl = current < total-1 ? navdemos[current+1] : navdemos[0];
		}
		else {
			return false;
		}
		navigate(linkEl);
	});
	*/
}

jQuery(document).ready(function(){

imagesLoaded(document.body, () => document.body.classList.remove('loading'));

  var spriteImages 	= document.querySelectorAll( '.slide-item__image' );
  var spriteImagesSrc = [];

  var spritetext 	= document.querySelectorAll( '.slide-item__image' );
  var spritetextSrc = [];

  for ( var i = 0; i < spriteImages.length; i++ ) {
    var img = spriteImages[i];
    spriteImagesSrc.push( img.getAttribute('src' ) );
  }

  for ( var i = 0; i < spritetext.length; i++ ) {
    var img_txt = spritetext[i];
    spritetextSrc.push( img.getAttribute('src' ) );
  }

  var initCanvasSlideshow = new CanvasSlideshow({
    sprites: spriteImagesSrc,
    displacementImage: '/wp-content/plugins/liquid-distortion-slider/img/dmaps/2048x2048/clouds.jpg',
    autoPlay: true,
    autoPlaySpeed: [10, 3],
    displaceScale: [200, 70]
});

});
