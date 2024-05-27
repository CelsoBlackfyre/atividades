import React from "react";
import { usePage } from "@inertiajs/inertia-react";

const ResultadosPesquisas = () => {
    const { pesquisa, resultados } = usePage().props;

    return (
        <div>
            <h1>Resultados da Pesquisa</h1>
            <p>Pesquisa: {pesquisa}</p>
            <p>Resultados: {resultados}</p>
        </div>
    );
};

export default ResultadosPesquisas;
