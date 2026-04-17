import { Link } from "@inertiajs/react";

export default function RecipeCard({ recipe }) {
    return (
        <article className={"card card--recipe card--"+recipe.color}>
            <h3 className="card__title">
                <Link href={"recipes/"+recipe.slug} className="card__link">
                    { recipe.title }
                </Link>
            </h3>
            <div className="card__header">
                <p className="badge">{ recipe.duration }</p>
            </div>
        </article>
    );
}
