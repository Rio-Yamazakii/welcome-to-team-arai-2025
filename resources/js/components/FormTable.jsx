import React, { useEffect, useState } from 'react';

const FormTable = () => {
    const [forms, setForms] = useState([]);
    const [error, setError] = useState(null);

    useEffect(() => {
        fetch('/api/forms')
            .then((res) => {
                if (!res.ok) {
                    throw new Error(`HTTPエラー: ${res.status}`);
                }
                return res.json();
            })
            .then((data) => {
                setForms(data);
                setError(null); // 成功時はエラークリア
            })
            .catch((err) => {
                console.error('データ取得エラー:', err);
                setError('データの取得に失敗しました。もう一度お試しください。');
            });
    }, []);

    return (
        <div className="p-4">
            <h2 className="text-xl font-bold mb-4">Formテーブル一覧</h2>

            {error && (
                <div className="text-red-600 font-semibold mb-4">
                    ⚠️ {error}
                </div>
            )}
            <table className="table-auto border border-collapse border-black w-full">
                <thead>
                    <tr className="bg-gray-200">
                        <th className="border p-2">ID</th>
                        <th className="border p-2">名前</th>
                        <th className="border p-2">年齢</th>
                        <th className="border p-2">出身地</th>
                    </tr>
                </thead>
                <tbody>
                    {forms.map((form) => (
                        <tr key={form.form_id}>
                            <td className="border p-2">{form.form_id}</td>
                            <td className="border p-2">{form.name}</td>
                            <td className="border p-2">{form.age}</td>
                            <td className="border p-2">{form.origin ?? 'N/A'}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default FormTable;
