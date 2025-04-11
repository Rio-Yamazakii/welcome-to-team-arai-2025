import React from "react";

function ExampleComponent({ title }) {
    return (
        <div>
            <h1 className="text-xl font-bold mb-4">{title}</h1>
            <table className="table-auto border border-separate border-spacing-x-0.5 border-spacing-y-0.5">
                <thead>
                    <tr>
                        <td className="border border-gray-500">id</td>
                        <td className="border border-gray-500">名前</td>
                        <td className="border border-gray-500">年齢</td>
                        <td className="border border-gray-500">出身地</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td className="border border-gray-500">1</td>
                        <td className="border border-gray-500">太郎</td>
                        <td className="border border-gray-500">25</td>
                        <td className="border border-gray-500">新潟</td>
                    </tr>
                </tbody>
            </table>
        </div>
    );
}

export default ExampleComponent;