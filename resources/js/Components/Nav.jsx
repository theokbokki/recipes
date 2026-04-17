import { useEffect, useRef } from "react";
import { Link } from "@inertiajs/react";

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
                <Link href="/recipes" className="nav__link">Recipes</Link>
                <Link href="/ingredients" className="nav__link">Ingredients</Link>
            </div>
            <div className="nav__right">
                <Link href="/groceries" className="nav__link">Groceries</Link>
            </div>
        </nav>
    );
}
