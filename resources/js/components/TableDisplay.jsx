import React, { useState, useEffect } from 'react';


const TableDisplay = ({ title }) => {
    const [data, setData] = useState([]);
    useEffect(() => {
        fetch('/api/forms')
            .then(res => res.json())
            .then(json => setData(json))
            .catch(err => console.error('API fetch error:', err));
    }, []);
    return (
        <div className="p-4">
            <h1 className="text-2xl font-bold mb-4">{title}</h1>
            <table className="min-w-full border border-gray-300">
                <thead>
                    <tr className="bg-gray-100">
                        <th className="border px-4 py-2">ID</th>
                        <th className="border px-4 py-2">名前</th>
                        <th className="border px-4 py-2">年齢</th>
                        <th className="border px-4 py-2">出身</th>
                    </tr>
                </thead>
                <tbody>
                    {/* APIから取得したデータを表示 */}
                    {data.map((item) => (
                        <tr key={item.form_ID}>
                            <td className="border px-4 py-2">{item.form_ID}</td>
                            <td className="border px-4 py-2">{item.name}</td>
                            <td className="border px-4 py-2">{item.age}</td>
                            <td className="border px-4 py-2">{item.from}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default TableDisplay;
