import { useEffect, useRef } from 'react';

export default function Nav() {
    const navRef = useRef(null);

    useEffect(() => {
        function handleScroll() {
            navRef.current?.classList.toggle('nav--scrolled', window.scrollY > 0);
        }

        handleScroll();

        window.addEventListener('scroll', handleScroll);

        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    return (
        <nav ref={navRef} className="nav nav--desktop">
            <h2 className="sro">Main navigation</h2>
            <div className="nav__left">
                <a href="/recipes" className="nav__link">Recipes</a>
                <a href="/ingredients" className="nav__link">Ingredients</a>
            </div>
            <div className="nav__right">
                <a href="/groceries" className="nav__link">Groceries</a>
            </div>
        </nav>
    );
}
