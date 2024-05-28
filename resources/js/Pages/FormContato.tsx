import React from "react";
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

const Contato = () => {
    const [dados, setDados] = useState({
        nome: "",
        email: "",
        assunto: "",
        mensagem: "",
    });

    const handleChange = (e) => {
        setDados({
            ...dados,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        Inertia.post("/contato", dados);
    };

    return (
        <>
            <h1>Contato</h1>
            <form onSubmit={handleSubmit}>
                <div>
                    <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                        Nome
                    </label>
                    <input type="text" name="nome" onChange={handleChange} />
                </div>

                <div>
                    <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                        Email
                    </label>
                    <input type="text" name="email" onChange={handleChange} />
                </div>

                <div>
                    <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                        Assunto
                    </label>
                    <input type="text" name="assunto" onChange={handleChange} />
                </div>

                <div>
                    <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                        Mensagem
                    </label>
                    <textarea
                        name="mensagem"
                        onChange={handleChange}
                    ></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </>
    );
};

export default Contato;
