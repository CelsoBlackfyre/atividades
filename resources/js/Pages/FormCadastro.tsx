import React, { useState } from "react";
import { router } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";

const FormCadastro = () => {
    const [dados, setDados] = useState([
        {
            nome: "",
            sobrenome: "",
            email: "",
            nomeUsuario: "",
            senha: "",
            idade: "",
        },
    ]);

    const handleChange = (e: any) => {
        setDados({
            ...dados,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e: any) => {
        e.preventDefault();
        console.log(dados);
        // Inertia.post("/FormCadastro", dados);
        router.post("/FormCadastro", dados);
    };

    return (
        <>
            <div className="max-w-lg mx-auto  bg-white dark:bg-gray-800 rounded-lg shadow-md px-8 py-10 flex flex-col items-center">
                <h1 className="text-xl font-bold text-center text-gray-700 dark:text-gray-200 ">
                    Crie Sua Conta
                </h1>
                <form
                    onSubmit={handleSubmit}
                    action="/ResultadoForm"
                    method="POST"
                    className="form w-full flex flex-col gap-4"
                >
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="nome"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Nome:
                        </label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="sobrenome"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Sobrenome:
                        </label>
                        <input
                            type="text"
                            id="sobrenome"
                            name="sobrenome"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="email"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Email:
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="nomeUsuario"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Nome Usuario:
                        </label>
                        <input
                            type="text"
                            id="nomeUsuario"
                            name="nomeUsuario"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="senha"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Senha:
                        </label>
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="idade"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Idade:
                        </label>
                        <input
                            type="number"
                            id="idade"
                            name="idade"
                            onChange={handleChange}
                            className="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500"
                        />
                    </div>

                    <button
                        type="submit"
                        className="bg-red-950 hover:bg-red-950 text-white font-medium py-2 px-4 rounded-md shadow-sm"
                    >
                        Cadastrar
                    </button>
                </form>
            </div>
        </>
    );
};

export default FormCadastro;
