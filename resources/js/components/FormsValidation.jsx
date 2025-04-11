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
        { id: 1, name: 'テスト1', email: 'test1@com', age: 10, location: '東京', language: 'HTML' },
        { id: 2, name: 'テスト2', email: 'test2@com', age: 20, location: '神奈川', language: 'CSS' },
        { id: 3, name: 'テスト3', email: 'test3@com', age: 30, location: '埼玉', language: 'PHP' },
        { id: 4, name: 'テスト4', email: 'test4@com', age: 40, location: '千葉', language: 'Ruby' },
        { id: 5, name: 'あれん', email: 'aren@com', age: 100, location: 'シンガポール', language: 'HTML' },
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
        if (!formData.name) newErrors.name = '名前は必須です';
        if (!formData.age) newErrors.age = '年齢は必須です';
        else if (isNaN(formData.age)) newErrors.age = '年齢は数値でなければなりません';
        else if (formData.age < 0 || formData.age > 100) newErrors.age = '年齢は0歳以上100歳以下でなければなりません';
        if (!formData.email) newErrors.email = 'メールアドレスは必須です';
        if (!formData.location) newErrors.location = '出身地は必須です';
        if (!formData.language) newErrors.language = '言語は必須です';

        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        if (validateForm()) {
            // 送信されたデータをフォームデータに追加
            const newForm = {
                id: submittedForms.length + 1,
                ...formData,
            };

            setSubmittedForms((prevForms) => [...prevForms, newForm]);
            setFormData({ name: '', email: '', age: '', location: '', language: '' });
            alert('フォームが送信されました');
        }
    };

    return (
        <div>
            <h2 className="text-3xl font-bold mb-4">フォーム一覧</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>年齢</th>
                        <th>メールアドレス</th>
                        <th>出身地</th> {/* 出身地の列を追加 */}
                        <th>言語</th> {/* 言語の列を追加 */}
                    </tr>
                </thead>
                <tbody>
                    {submittedForms.map((form) => (
                        <tr key={form.id}>
                            <td>{form.name}</td>
                            <td>{form.age}</td>
                            <td>{form.email}</td>
                            <td>{form.location}</td> {/* 出身地 */}
                            <td>{form.language}</td> {/* 言語 */}
                        </tr>
                    ))}
                </tbody>
            </table>

            <div className="mt-10">
                <h3 className="text-3xl font-bold mb-4">フォーム</h3>
                <form onSubmit={handleSubmit}>
                    <div>
                        <label>名前</label>
                        <input
                            type="text"
                            name="name"
                            value={formData.name}
                            onChange={handleChange}
                        />
                        {errors.name && <p style={{ color: 'red' }}>{errors.name}</p>}
                    </div>

                    <div>
                        <label>メールアドレス</label>
                        <input
                            type="email"
                            name="email"
                            value={formData.email}
                            onChange={handleChange}
                        />
                        {errors.email && <p style={{ color: 'red' }}>{errors.email}</p>}
                    </div>

                    <div>
                        <label>年齢</label>
                        <input
                            type="number"
                            name="age"
                            value={formData.age}
                            onChange={handleChange}
                        />
                        {errors.age && <p style={{ color: 'red' }}>{errors.age}</p>}
                    </div>

                    <div>
                        <label>出身地</label>
                        <input
                            type="text"
                            name="location"
                            value={formData.location}
                            onChange={handleChange}
                        />
                        {errors.location && <p style={{ color: 'red' }}>{errors.location}</p>}
                    </div>

                    <div>
                        <label>言語</label>
                        <input
                            type="text"
                            name="language"
                            value={formData.language}
                            onChange={handleChange}
                        />
                        {errors.language && <p style={{ color: 'red' }}>{errors.language}</p>}
                    </div>

                    <button type="submit">送信</button>
                </form>
            </div>

        </div>
    );
};

export default FormsValidation;
