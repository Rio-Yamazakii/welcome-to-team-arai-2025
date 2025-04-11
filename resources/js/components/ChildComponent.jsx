import React from "react";

// 引数としてpropsを受け取る
const ChildComponent = (props) => {
    // 親からもらったtitleを表示
    //HTMLの場合はclassだけでよいが、Reactの場合はclassNameと記述する
    return (
        <div className="p-8">
            <h2 className="text-3xl font-bold pb-8">{props.title}</h2>
            <div class="relative overflow-x-auto">
            <table class="w-96 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            名前
                        </th>
                        <th scope="col" class="px-6 py-3">
                            年齢
                        </th>
                        <th scope="col" class="px-6 py-3">
                            出身地
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            太郎
                        </td>
                        <td class="px-6 py-4">
                            25
                        </td>
                        <td class="px-6 py-4">
                            新潟
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    );
};

export default ChildComponent;