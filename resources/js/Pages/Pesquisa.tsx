import React from "react";
import { Inertia } from "@inertiajs/inertia";

const Pesquisa = () => {
    const [pesquisa, setPesquisa] = React.useState("");

    const handleChange = (e) => {
        setPesquisa(e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log(pesquisa);
        Inertia.get("/pesquisa/resultados", { pesquisa });
    };

    return (
        <>
            <h1>Pesquisa</h1>
            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="pesquisa">Pesquisa:</label>
                    <input
                        type="text"
                        id="pesquisa"
                        name="pesquisa"
                        onChange={handleChange}
                    />
                </div>
                <button type="submit">Pesquisar</button>
            </form>
        </>
    );
};

export default Pesquisa;
