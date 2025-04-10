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
      <h1>テーブルデータ表示</h1>
      <table className="table-auto border-collapse border border-gray-300 w-full">
        <thead>
          <tr>
            <th className="border border-gray-300 p-2">ID</th>
            <th className="border border-gray-300 p-2">名前</th>
            <th className="border border-gray-300 p-2">メールアドレス</th>
            <th className="border border-gray-300 p-2">年齢</th>
            <th className="border border-gray-300 p-2">技術ID</th>
          </tr>
        </thead>
        <tbody>
          {forms.map((item) => (
            <tr key={item.id}>
              <td className="border border-gray-300 p-2">{item.id}</td>
              <td className="border border-gray-300 p-2">{item.name}</td>
              <td className="border border-gray-300 p-2">{item.email}</td>
              <td className="border border-gray-300 p-2">{item.age}</td>
              <td className="border border-gray-300 p-2">{item.tech_ID}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};
export default Forms;
