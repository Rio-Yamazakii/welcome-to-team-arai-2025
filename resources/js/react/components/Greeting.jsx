import React from 'react';

export default function Greeting(props) {
  return (
    <div className="p-4">
      <h1 className="text-2xl font-bold mb-4">{props.title}</h1>
      
      <table className="w-full border-collapse border border-gray-300">
        <thead>
          <tr className="bg-gray-100">
            <th className="border border-gray-300 p-2">id</th>
            <th className="border border-gray-300 p-2">名前</th>
            <th className="border border-gray-300 p-2">年齢</th>
            <th className="border border-gray-300 p-2">出身地</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td className="border border-gray-300 p-2">1</td>
            <td className="border border-gray-300 p-2">太郎</td>
            <td className="border border-gray-300 p-2">25</td>
            <td className="border border-gray-300 p-2">神戸</td>
          </tr>
        </tbody>
      </table>
    </div>
  );
}