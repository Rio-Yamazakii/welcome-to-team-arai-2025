import React, { useState } from 'react';

const FormsValidation = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        age: '',
        location: '',
        language: '',
    });

    const [errors, setErrors] = useState({});
    const [submittedForms, setSubmittedForms] = useState([
        { id: 1, name: 'Test 1', email: 'test1@com', age: 10, location: 'Tokyo', language: 'HTML' },
        { id: 2, name: 'Test 2', email: 'test2@com', age: 20, location: 'Kanagawa', language: 'CSS' },
        { id: 3, name: 'Test 3', email: 'test3@com', age: 30, location: 'Saitama', language: 'PHP' },
        { id: 4, name: 'Test 4', email: 'test4@com', age: 40, location: 'Chiba', language: 'Ruby' },
        { id: 5, name: 'Aren', email: 'aren@com', age: 100, location: 'Singapore', language: 'HTML' },
    ]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prevData) => ({
            ...prevData,
            [name]: value,
        }));
    };

    const validateForm = () => {
        const newErrors = {};
        if (!formData.name) newErrors.name = 'Name is required';
        if (!formData.age) newErrors.age = 'Age is required';
        else if (isNaN(formData.age)) newErrors.age = 'Age must be a number';
        else if (formData.age < 0 || formData.age > 100) newErrors.age = 'Age must be between 0 and 100';
        if (!formData.email) newErrors.email = 'Email is required';
        if (!formData.location) newErrors.location = 'Location is required';
        if (!formData.language) newErrors.language = 'Language is required';

        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (validateForm()) {
            const newForm = {
                id: submittedForms.length + 1,
                ...formData,
            };
            setSubmittedForms((prevForms) => [...prevForms, newForm]);
            setFormData({ name: '', email: '', age: '', location: '', language: '' });
            alert('Form submitted successfully');
        }
    };

    return (

        <div className="min-h-screen bg-gray-900 text-white p-8">
            <div className="max-w-4xl mx-auto bg-gray-800 shadow-2xl rounded-2xl p-8">
                <h2 className="text-4xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 animate-pulse">
                    Submitted Forms
                </h2>

                <div className="overflow-x-auto">
                    <table className="min-w-full border border-gray-700 rounded-lg overflow-hidden">
                        <thead className="bg-gray-700 text-cyan-300">
                            <tr>
                                <th className="px-4 py-2 border border-gray-600">Name</th>
                                <th className="px-4 py-2 border border-gray-600">Age</th>
                                <th className="px-4 py-2 border border-gray-600">Email</th>
                                <th className="px-4 py-2 border border-gray-600">Location</th>
                                <th className="px-4 py-2 border border-gray-600">Language</th>
                            </tr>
                        </thead>
                        <tbody>
                            {submittedForms.map((form) => (
                                <tr key={form.id} className="hover:bg-gray-700 transition">
                                    <td className="px-4 py-2 border border-gray-700">{form.name}</td>
                                    <td className="px-4 py-2 border border-gray-700">{form.age}</td>
                                    <td className="px-4 py-2 border border-gray-700">{form.email}</td>
                                    <td className="px-4 py-2 border border-gray-700">{form.location}</td>
                                    <td className="px-4 py-2 border border-gray-700">{form.language}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>

                <div className="mt-10">
                    <h3 className="text-2xl font-semibold mb-4 text-pink-400">Form Input</h3>
                    <form onSubmit={handleSubmit}>
                        {[
                            { label: 'Name', name: 'name', type: 'text' },
                            { label: 'Email', name: 'email', type: 'email' },
                            { label: 'Age', name: 'age', type: 'number' },
                            { label: 'Location', name: 'location', type: 'text' },
                            { label: 'Language', name: 'language', type: 'text' },
                        ].map(({ label, name, type }) => (
                            <div className="mb-4" key={name}>
                                <label className="block font-medium text-cyan-300 mb-1">{label}</label>
                                <input
                                    type={type}
                                    name={name}
                                    value={formData[name]}
                                    onChange={handleChange}
                                    className="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400"
                                    placeholder={`Enter your ${label.toLowerCase()}`}
                                />
                                {errors[name] && <p className="text-red-400 text-sm mt-1">{errors[name]}</p>}
                            </div>
                        ))}
                        <button
                            type="submit"
                            className="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-semibold py-2 px-6 rounded-md mt-4 shadow-lg transition duration-300"
                        >
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default FormsValidation;