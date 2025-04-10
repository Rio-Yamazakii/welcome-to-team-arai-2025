import React from 'react';
import useForms from '../hooks/useForms'; // カスタムフックをインポート

const Forms = () => {
    const { forms, error, loading } = useForms(); // カスタムフックを呼び出し

    if (loading) {
        return <div>ロード中...</div>;  // ローディング表示
    }

    if (error) {
        return <div>エラー: {error}</div>;  // エラー表示
    }

    return (
        <div>
            <h1>テーブルデータ表示</h1>
            <table className="table-auto border-collapse border border-gray-300 w-full">
                <thead>
                    <tr>
                        <th className="border border-gray-300 p-2">ID</th>
                        <th className="border border-gray-300 p-2">名前</th>
                        <th className="border border-gray-300 p-2">メールアドレス</th>
                        <th className="border border-gray-300 p-2">年齢</th>
                        <th className="border border-gray-300 p-2">技術名</th>
                    </tr>
                </thead>
                <tbody>
                    {forms.map((item) => (
                        <tr key={item.id}>
                            <td className="border border-gray-300 p-2">{item.id}</td>
                            <td className="border border-gray-300 p-2">{item.name}</td>
                            <td className="border border-gray-300 p-2">{item.email}</td>
                            <td className="border border-gray-300 p-2">{item.age}</td>
                            <td className="border border-gray-300 p-2">
                                {item.technology ? item.technology.tech_language : '未設定'}
                            </td>

                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default Forms;
