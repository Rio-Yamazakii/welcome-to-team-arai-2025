import React, { useEffect, useState } from 'react';

const FormTable = () => {
  const [forms, setForms] = useState([]);

  useEffect(() => {
    fetch('/api/forms')
      .then(res => res.json())
      .then(data => setForms(data));
  }, []);

  return (
    <div className="p-4">
      <h2 className="text-xl font-bold mb-4">Formテーブル一覧</h2>
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
