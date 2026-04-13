export default function Nav() {
    return (
        <nav className="nav nav--desktop">
            <h2 className="sro">Main navigation</h2>
            <div className="nav__left">
                <a href="/recipes" className="nav__link">Recipes</a>
                <a href="/ingredients" className="nav__link">Ingredients</a>
            </div>
            <div className="nav__right">
                <a href="/groceries" className="nav__link">Groceries</a>
            </div>
        </nav>
    )
}
