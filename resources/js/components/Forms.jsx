import React, { useState } from 'react';
import useForms from '../hooks/useForms'; // カスタムフックをインポート

const Forms = () => {
    const { forms, error, loading, addForm } = useForms(); // カスタムフックを呼び出し

    const [newForm, setNewForm] = useState({
        name: '',
        email: '',
        age: '',
        technology: '',  // 新しい技術名のフィールド
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setNewForm((prevForm) => ({
            ...prevForm,
            [name]: value,
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (newForm.name && newForm.email && newForm.age) {
            const newFormData = {
                id: forms.length + 1,  // 仮のIDを設定（本来はAPIで返ってくるIDを使う）
                ...newForm,
                technology: { tech_language: newForm.technology },  // 技術名の構造を合わせる
            };

            addForm(newFormData);  // 新しいフォームを追加
            setNewForm({ name: '', email: '', age: '', technology: '' });  // フォームをリセット
        }
    };

    if (loading) {
        return <div>ロード中...</div>;
    }

    if (error) {
        return <div>エラー: {error}</div>;
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

            <h2 className="mt-6">ここからレコードを追加してね！</h2>
            <form onSubmit={handleSubmit} className="space-y-4">
                <div>
                    <label htmlFor="name">名前: </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value={newForm.name}
                        onChange={handleChange}
                        className="border-2 border-black p-2 rounded"
                        required
                    />
                </div>
                <div>
                    <label htmlFor="email">メールアドレス: </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value={newForm.email}
                        onChange={handleChange}
                        className="border-2 border-black p-2 rounded"
                        required
                    />
                </div>
                <div>
                    <label htmlFor="age">年齢: </label>
                    <input
                        type="number"
                        id="age"
                        name="age"
                        value={newForm.age}
                        onChange={handleChange}
                        className="border-2 border-black p-2 rounded"
                        required
                    />
                </div>
                <div>
                    <label htmlFor="technology">技術名: </label>
                    <input
                        type="text"
                        id="technology"
                        name="technology"
                        value={newForm.technology}
                        onChange={handleChange}
                        className="border-2 border-black p-2 rounded"
                    />
                </div>
                <button 
                    type="submit"
                    className="bg-blue-500 text-white py-2 px-4 rounded mt-4 hover:bg-blue-600"
                >
                    追加
                </button>
            </form>
        </div>
    );
};

export default Forms;
