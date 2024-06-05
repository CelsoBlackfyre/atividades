import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

const ResultadoForm = ({
    dados,
}: {
    dados: {
        nome: string;
        sobrenome: string;
        email: string;
        nomeUsuario: string;
        senha: string;
        idade: number;
    };
}) => {
    return (
        <div className="container">
            <div className="row">
                <div className="col-12">
                    <h1>Resultado do Formulário</h1>
                    <p>Nome: {dados.nome}</p>
                    <p>Sobrenome: {dados.sobrenome}</p>
                    <p>Email: {dados.email}</p>
                    <p>Nome de Usuario: {dados.nomeUsuario}</p>
                    <p>Senha: {dados.senha}</p>
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
