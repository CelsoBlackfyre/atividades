import React, { useState } from "react";
import { router } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";

const FormLogin = () => {
    const [dados, setDados] = useState({
        email: "",
        senha: "",
    });

    const handleChange = (e: any) => {
        setDados({
            ...dados,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e: any) => {
        e.preventDefault();
        console.log(dados);
        // Inertia.post("/FormLogin", dados);
        router.post("/login", dados);
    };

    return (
        <>
            <div className="max-w-lg mx-auto  bg-white dark:bg-gray-800 rounded-lg shadow-md px-8 py-10 flex flex-col items-center">
                <h1 className="text-xl font-bold text-center text-gray-700 dark:text-gray-200 ">
                    Login
                </h1>
                <form
                    onSubmit={handleSubmit}
                    action="/ResultadoForm"
                    method="POST"
                    className="form w-full flex flex-col gap-4"
                >
                    <div className="flex items-start flex-col justify-start">
                        <label
                            htmlFor="nomeUsuario"
                            className="text-sm text-gray-700 dark:text-gray-200 mr-2"
                        >
                            Email:
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
                        {errors.nome && (
                            <div className="text-red-500 text-sm">
                                {errors.nome}
                            </div>
                        )}
                    </div>

                    <button
                        type="submit"
                        className="bg-red-950 hover:bg-red-950 text-white font-medium py-2 px-4 rounded-md shadow-sm"
                    >
                        Login
                    </button>
                </form>
            </div>
        </>
    );
};

export default FormLogin;
