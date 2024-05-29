import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";
import { useState } from "react";

const Calculadora = () => {
    const [numero1, setNumero1] = useState("");
    const [numero2, setNumero2] = useState("");
    const [resultado, setResultado] = useState("");
    const [operacao, setOperacao] = useState("");
    const [resultadoFinal, setResultadoFinal] = useState("");
    const [dadosOperacoes, setDadosOperacoes] = useState([
        {
            operacao: "",
            numero1: "",
            numero2: "",
            resultado: "",
        },
    ]);

    const handleChange = (e) => {
        setDadosOperacoes({
            ...dadosOperacoes,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log(dadosOperacoes);
        Inertia.post("/Calculadora", dadosOperacoes);
    };

    return (
        <>
            <div className="max-w-lg mx-auto  bg-white dark:bg-gray-800 rounded-lg shadow-md px-8 py-10 flex flex-col items-center">
                <h1 className="text-xl font-bold text-center text-gray-700 dark:text-gray-200 ">
                    Calculadora
                </h1>
                <form
                    action="{{ route('Calculadora') }}"
                    onSubmit={handleSubmit}
                >
                    <div>
                        <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                            Numero 1
                        </label>
                        <input
                            type="number"
                            name="numero1"
                            onChange={handleChange}
                        />
                    </div>
                    <div>
                        <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                            Numero 2
                        </label>
                        <input
                            type="number"
                            name="numero2"
                            onChange={handleChange}
                        />
                    </div>
                    <div>
                        <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                            Operação
                        </label>
                        <select name="operacao" onChange={handleChange}>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </div>
                    <button type="submit">Calcular</button>
                </form>
                <div id="resultado"></div>
            </div>
        </>
    );
};

export default Calculadora;
