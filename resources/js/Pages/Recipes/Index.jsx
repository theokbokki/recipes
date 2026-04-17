import Layout from "@/Pages/Layout";
import { Head } from "@inertiajs/react";
import RecipeCard from "@/Components/RecipeCard";

export default function Index({ recipes }) {
    return (
        <Layout>
            <Head title="Welcome" />

            <section className="list">
                <div className="wrapper list__wrapper">
                    <header className="list__header">
                        <h2 className="list__title">Recipes</h2>
                    </header>
                    <ul className="list__items">
                        {recipes.map(recipe => (
                            <li className="list__item">
                                <RecipeCard key={recipe.id} recipe={recipe} />
                            </li>
                        ))}
                    </ul>
                </div>
            </section>
        </Layout>
    );
}
