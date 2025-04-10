// Forms.jsx (React)

import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Forms = () => {
    const [forms, setForms] = useState([]);
    const [error, setError] = useState(null);

    useEffect(() => {
        // APIからデータを取得
        axios
            .get('http://kudo.local/api/forms-view')
            .then((response) => {
                setForms(response.data); // 取得したデータをセット
            })
            .catch((error) => {
                setError(error.message); // エラーがあれば表示
            });
    }, []);

    if (error) {
        return <div>エラー: {error}</div>;
    }

    return (
        <div>
            <h1>フォーム一覧</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>年齢</th>
                    </tr>
                </thead>
                <tbody>
                    {forms.map((form) => (
                        <tr key={form.id}>
                            <td>{form.id}</td>
                            <td>{form.name}</td>
                            <td>{form.email}</td>
                            <td>{form.age}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default Forms;
