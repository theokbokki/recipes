import Nav from "@/Components/Nav";
import MobileNav from "@/Components/MobileNav";

export default function Layout({ children }) {
    return (
        <>
            <h1 class="sro">Recipes</h1>
            <Nav/>
            <MobileNav/>
            <main>
                {children}
            </main>
        </>
    )
}
