import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

const MainPage = () => {
    return (
        <div>
            <h1>Lista de Exercicio</h1>
            <ul>
                <li>
                    <InertiaLink href="/FormCadastro">
                        Formulário de Cadastro Simples
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/login">Formulário de Login</InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Pesquisa">
                        Pesquisa com Método GET
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/FormContato">
                        Formulário de Contato
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Calculadora">
                        Calculadora Simples
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Feedback">
                        Feedback de Produtos
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Eventos">
                        Registro de Eventos
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Newsletter">
                        Formulário de Inscrição em Newsletter
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/quiz">Quiz Online</InertiaLink>
                </li>
                <li>
                    <InertiaLink href="/Preferências">
                        Enquete de Preferências
                    </InertiaLink>
                </li>
            </ul>
        </div>
    );
};

export default MainPage;
