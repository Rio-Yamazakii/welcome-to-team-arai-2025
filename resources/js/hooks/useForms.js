import { useState, useEffect } from 'react';
import axios from 'axios';

const useFetchForms = () => {
    const [forms, setForms] = useState([]);
    const [error, setError] = useState(null);
    const [loading, setLoading] = useState(true);  // ローディング状態を追加

    useEffect(() => {
        // APIからデータを取得
        axios
            .get('http://kudo.local/api/forms-view')
            .then((response) => {
                setForms(response.data); // 取得したデータをセット
                setLoading(false); // データ取得後、ローディングを終了
            })
            .catch((error) => {
                setError(error.message); // エラーがあれば表示
                setLoading(false); // エラー時もローディングを終了
            });
    }, []);

    return { forms, error, loading };
};

export default useFetchForms;
