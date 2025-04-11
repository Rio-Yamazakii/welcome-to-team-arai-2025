import React, { useEffect, useState } from 'react';
import axios from 'axios';

const FormTable = () => {
    const [forms, setForms] = useState([]);

    useEffect(() => {
        axios.get('/api/forms') // ← Laravel 側の API エンドポイント
            .then(response => {
                setForms(response.data);
            })
            .catch(error => {
                console.error('データの取得に失敗しました:', error);
            });
    }, []);

    return (
        <div className="p-6">
            <h1 className="text-2xl font-bold mb-4">Forms テーブル一覧</h1>

            <table className="table-auto border border-gray-500">
                <thead>
                    <tr className="bg-gray-200">
                        <th className="border border-gray-500 px-4 py-2">ID</th>
                        <th className="border border-gray-500 px-4 py-2">名前</th>
                        <th className="border border-gray-500 px-4 py-2">年齢</th>
                        <th className="border border-gray-500 px-4 py-2">出身地</th>
                    </tr>
                </thead>
                <tbody>
                    {forms.map((form) => (
                        <tr key={form.formID}>
                            <td className="border border-gray-500 px-4 py-2">{form.formID}</td>
                            <td className="border border-gray-500 px-4 py-2">{form.name}</td>
                            <td className="border border-gray-500 px-4 py-2">{form.age}</td>
                            <td className="border border-gray-500 px-4 py-2">{form.from}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default FormTable;
