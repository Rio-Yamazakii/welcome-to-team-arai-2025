// Child.jsx
import React from 'react';

const Child = (props) => {
    return (
        <div>
            <h1 className="text-xl font-bold mb-4">{props.title}</h1>
            <table className="table-auto w-full border border-gray-500">
                <thead>
                    <tr className="bg-gray-100">
                        <th className="border border-gray-500 px-4 py-2">ID</th>
                        <th className="border border-gray-500 px-4 py-2">名前</th>
                        <th className="border border-gray-500 px-4 py-2">年齢</th>
                        <th className="border border-gray-500 px-4 py-2">出身</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td className="border border-gray-500 px-4 py-2">1</td>
                        <td className="border border-gray-500 px-4 py-2">太郎</td>
                        <td className="border border-gray-500 px-4 py-2">20</td>
                        <td className="border border-gray-500 px-4 py-2">埼玉</td>
                    </tr>
                </tbody>
            </table>
        </div>
    );
};

export default Child;
