// resources/js/components/FormTable.jsx

import React, { useEffect, useState } from "react";
import axios from "axios";

const FormTable = ({ title }) => {
  const [forms, setForms] = useState([]);

  useEffect(() => {
    axios.get("/api/form")
      .then(response => {
        setForms(response.data);
      })
      .catch(error => {
        console.error("データの取得に失敗しました:", error);
      });
  }, []);

  return (
    <div className="p-4">
      <h1 className="text-xl font-bold mb-4">{title}</h1>
      <table className="table-auto border border-collapse border-black">
        <thead>
          <tr>
            <th className="border px-4 py-2">id</th>
            <th className="border px-4 py-2">名前</th>
            <th className="border px-4 py-2">年齢</th>
            <th className="border px-4 py-2">出身地</th>
          </tr>
        </thead>
        <tbody>
          {forms.map((form) => (
            <tr key={form.form_id}>
              <td className="border px-4 py-2">{form.form_id}</td>
              <td className="border px-4 py-2">{form.name}</td>
              <td className="border px-4 py-2">{form.age}</td>
              <td className="border px-4 py-2">{form.birthplace}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default FormTable;
