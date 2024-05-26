import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

const ResultadoForm = ({ dados }) => {
    return (
        <div className="container">
            <div className="row">
                <div className="col-12">
                    <h1>Resultado do Formulário</h1>
                    <p>Nome: {dados.nome}</p>
                    <p>Sobrenome: {dados.sobrenome}</p>
                    <p>Email: {dados.email}</p>
                    <p>Idade: {dados.idade}</p>
                    <p>
                        <InertiaLink href="/">Voltar</InertiaLink>
                    </p>
                </div>
            </div>
        </div>
    );
};

export default ResultadoForm;
