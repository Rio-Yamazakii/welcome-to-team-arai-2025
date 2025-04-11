import React from 'react';

const TableDisplay = ({ title }) => {
    return (
        <div className="p-4">
            <h1 className="text-2xl font-bold mb-4">{title}</h1>
            <table className="min-w-full border border-gray-300">
                <thead>
                    <tr className="bg-gray-100">
                        <th className="border px-4 py-2">ID</th>
                        <th className="border px-4 py-2">名前</th>
                        <th className="border px-4 py-2">年齢</th>
                        <th className="border px-4 py-2">出身</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td className="border px-4 py-2">1</td>
                        <td className="border px-4 py-2">太郎</td>
                        <td className="border px-4 py-2">20</td>
                        <td className="border px-4 py-2">埼玉</td>
                    </tr>
                </tbody>
            </table>
        </div>
    );
};

export default TableDisplay;
