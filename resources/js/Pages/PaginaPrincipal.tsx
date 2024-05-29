import React from "react";
import { InertiaLinkProps, Link } from "@inertiajs/react";

const PaginaPrincipal = () => {
    return (
        <div>
            <h1>Lista de Exercicio</h1>
            <ul>
                <li>
                    <Link href="/form-cadastro">
                        Formulário de Cadastro Simples
                    </Link>
                </li>
                <li>
                    <Link href="/login">Formulário de Login</Link>
                </li>
                <li>
                    <Link href="/pesquisa">Pesquisa com Método GET</Link>
                </li>
                <li>
                    <Link href="/contato">Formulário de Contato</Link>
                </li>
                <li>
                    <Link href="/calculadora">Calculadora Simples</Link>
                </li>
                <li>
                    <Link href="/feedback">Feedback de Produtos</Link>
                </li>
                <li>
                    <Link href="/eventos">Registro de Eventos</Link>
                </li>
                <li>
                    <Link href="/newsletter">Newsletter</Link>
                </li>
                <li>
                    <Link href="/quiz">Quiz Online</Link>
                </li>
                <li>
                    <Link href="/enquete">Enquete de Preferências</Link>
                </li>
            </ul>
        </div>
    );
};

export default PaginaPrincipal;
