export default function Nav() {
    return (
        <nav class="nav nav--desktop">
            <h2 class="sro">Main navigation</h2>
            <div class="nav__left">
                <a href="/recipes" class="nav__link">Recipes</a>
                <a href="/ingredients" class="nav__link">Ingredients</a>
            </div>
            <div class="nav__right">
                <a href="/groceries" class="nav__link">Groceries</a>
            </div>
        </nav>
    )
}
