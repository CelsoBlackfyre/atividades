import React from "react";
import { InertiaLinkProps, Link } from "@inertiajs/react";

const MainPage = () => {
    return (
        <div>
            <h1>Lista de Exercicio</h1>
            <ul>
                <li>
                    <Link href="/FormCadastro">
                        Formulário de Cadastro Simples
                    </Link>
                </li>
                <li>
                    <Link href="/login">Formulário de Login</Link>
                </li>
                <li>
                    <Link href="/Pesquisa">Pesquisa com Método GET</Link>
                </li>
                <li>
                    <Link href="/FormContato">Formulário de Contato</Link>
                </li>
                <li>
                    <Link href="/Calculadora">Calculadora Simples</Link>
                </li>
                <li>
                    <Link href="/Feedback">Feedback de Produtos</Link>
                </li>
                <li>
                    <Link href="/Eventos">Registro de Eventos</Link>
                </li>
                <li>
                    <Link href="/Newsletter">Newsletter</Link>
                </li>
                <li>
                    <Link href="/quiz">Quiz Online</Link>
                </li>
                <li>
                    <Link href="/Preferências">Enquete de Preferências</Link>
                </li>
            </ul>
        </div>
    );
};

export default MainPage;
