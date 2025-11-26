import './styles/main.scss';
const header = document.getElementById( 'site-header' );
const pageNavButtons =
	document.querySelectorAll< HTMLAnchorElement >( 'a[href^="#"]' );

pageNavButtons.forEach( ( button ) => {
	const href = button.getAttribute( 'href' );
	if ( ! href || href === '#' ) {
		return;
	}

	button.addEventListener( 'click', ( event ) => {
		event.preventDefault();

		const target = document.getElementById( href.replace( '#', '' ) );

		if ( ! target ) {
			return;
		}

		const offset = header ? header.offsetHeight : 0;
		const targetPosition =
			target.getBoundingClientRect().top + window.scrollY;
		const startPosition = window.scrollY;
		const distance = targetPosition - startPosition - offset;
		window.scrollTo( {
			top: startPosition + distance,
			behavior: 'smooth',
		} );
	} );
} );
