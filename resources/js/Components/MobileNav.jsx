import { useEffect, useRef } from 'react';
import { Link } from "@inertiajs/react";

export default function MobileNav() {
    const navRef = useRef(null);

    useEffect(() => {
        navRef.current?.classList.remove('nav--open');
    }, []);

    function toggleNav() {
        navRef.current?.classList.toggle('nav--open');
    }

    return (
        <nav ref={navRef} className="nav nav--mobile nav--open">
            <h2 className="sro">Main navigation</h2>
            <header className="nav__header">
                <Link href="/profile" className="nav__avatar">
                    <span className="sro">Profile</span>
                    <img src="" alt="" className="nav__img"/>
                </Link>
                <button className="nav__burger" type="button" onClick={toggleNav}>
                    <span className="sro">Toggle nav</span>
                    <span className="nav__icon nav__icon--closed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
                    </span>
                    <span className="nav__icon nav__icon--open">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </span>
                </button>
            </header>
            <div className="nav__wrapper">
                <div className="nav__dropdown">
                    <Link href="/recipes" className="nav__link">Recipes</Link>
                    <Link href="/ingredients" className="nav__link">Ingredients</Link>
                    <Link href="/groceries" className="nav__link">Groceries</Link>
                </div>
            </div>
        </nav>
    )
}
