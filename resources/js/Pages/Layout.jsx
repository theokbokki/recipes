import Nav from "@/Components/Nav";
import MobileNav from "@/Components/MobileNav";
import { useEffect } from 'react';

export default function Layout({ children }) {
    useEffect(() => {
        requestAnimationFrame(() => {
            document.documentElement.classList.remove('js');
        });
    }, []);

    return (
        <>
            <h1 className="sro">Recipes</h1>
            <Nav/>
            <MobileNav/>
            <main>
                {children}
            </main>
        </>
    )
}
