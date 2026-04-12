export default function MobileNav() {
    return (
        <nav class="nav nav--mobile nav--open">
            <h2 class="sro">Main navigation</h2>
            <header class="nav__header">
                <a href="/profile" class="nav__avatar">
                    <span class="sro">Profile</span>
                    <img src="" alt="" class="nav__img"/>
                </a>
                <button class="nav__burger" type="button">
                    <span class="sro">Toggle nav</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
                </button>
            </header>
            <div class="nav__wrapper">
                <div class="nav__dropdown">
                    <a href="/recipes" class="nav__link">Recipes</a>
                    <a href="/ingredients" class="nav__link">Ingredients</a>
                    <a href="/groceries" class="nav__link">Groceries</a>
                </div>
            </div>
        </nav>
    )
}
