import React from 'react';

const HelloChild = ({ title }) => {
    return (
        <div className="p-4">
            {/* タイトルの「Form」だけ通常、「テーブル一覧」だけ太字 */}
            <h1 className="text-xl">
                <span className="font-normal">Form</span>
                <span className="font-bold">テーブル一覧</span>
            </h1>

            <table className="mt-2 border-collapse border border-black text-sm">
                <thead>
                    <tr>
                        <th className="border border-black px-1 py-1">id</th>
                        <th className="border border-black px-1 py-1">名前</th>
                        <th className="border border-black px-1 py-1">年齢</th>
                        <th className="border border-black px-1 py-1">出身地</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td className="border border-black px-1 py-1">1</td>
                        <td className="border border-black px-1 py-1">太郎</td>
                        <td className="border border-black px-1 py-1">25</td>
                        <td className="border border-black px-1 py-1">新潟</td>
                    </tr>
                </tbody>
            </table>
        </div>
    );
};

export default HelloChild;

