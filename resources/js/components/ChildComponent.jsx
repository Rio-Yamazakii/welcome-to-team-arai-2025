import React, { useEffect, useState } from "react"; //Reactを使うために必要
import axios from "axios"; //api用のライブラリ

const ChildComponent = (props) => {
    // データを保存するstate
    const [forms, setForms] = useState([]);
    const [loading, setLoading] = useState(true); // データ取得中フラグ

    // APIを叩いてデータを取得
    useEffect(() => {
        axios.get("http://welcome-to-team-arai-2025.local/api/forms") //ここでデータを取得
            .then(response => {
                setForms(response.data); // 取得したデータをstateに保存
            })
            .catch(error => {
                console.error("データ取得エラー:", error);
            })
            .finally(() => {
                setLoading(false); // データ取得が終わったら `loading` を `false` にする
            });
    }, []);

    return (
        <div className="p-8">
            <h2 className="text-3xl font-bold pb-8">{props.title}</h2>
            <div className="relative overflow-x-auto">
                {loading ? ( // `loading` が true なら「読み込み中」を表示
                    <p className="text-gray-500">データを取得中...</p>
                ) : (
                    <table className="w-96 text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" className="px-6 py-3">ID</th>
                                <th scope="col" className="px-6 py-3">名前</th>
                                <th scope="col" className="px-6 py-3">年齢</th>
                                <th scope="col" className="px-6 py-3">出身地</th>
                            </tr>
                        </thead>
                        <tbody>
                            {forms.length > 0 ? (
                                forms.map((form) => (
                                    <tr key={form.id} className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {form.id}
                                        </th>
                                        <td className="px-6 py-4">{form.name}</td>
                                        <td className="px-6 py-4">{form.age}</td>
                                        <td className="px-6 py-4">{form.origin}</td>
                                    </tr>
                                ))
                            ) : (
                                <tr>
                                    <td colSpan="4" className="px-6 py-4 text-center">データがありません</td>
                                </tr>
                            )}
                        </tbody>
                    </table>
                )}
            </div>
        </div>
    );
};

export default ChildComponent;