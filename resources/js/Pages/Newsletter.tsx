import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/inertia-react";

const Newsletter = () => {
    const { props } = usePage();
    const { mensagem, inscritos } = props;
    const [email, setEmail] = useState("");

    const handleChange = (e) => {
        setEmail(e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        Inertia.post("/newsletter", { email });
    };
    return (
        <>
            <h1>Inscreva-se em nossa Newsletter</h1>
            <form onSubmit={handleSubmit}>
                <div>
                    <label className="text-sm text-gray-700 dark:text-gray-200 mr-2">
                        Email
                    </label>
                    <input type="email" name="email" onChange={handleChange} />
                </div>
                <button
                    type="submit"
                    className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Inscreva-se
                </button>
            </form>
        </>
    );
};

export default Newsletter;
