import React, { useState, useEffect } from 'react';
import axios from 'axios';

function FormTable() {
  // フォームデータを保持するためのステート
  const [forms, setForms] = useState([]);
  // ローディング状態を管理するためのステート
  const [loading, setLoading] = useState(true);
  // エラー状態を管理するためのステート
  const [error, setError] = useState(null);

  // コンポーネントがマウントされたときにAPIからデータを取得
  useEffect(() => {
    // APIからデータを取得する関数
    const fetchData = async () => {
      try {
        // API呼び出し
        const response = await axios.get('/api/forms');
        // レスポンスからデータを取得してステートにセット
        setForms(response.data);
        setLoading(false);
      } catch (err) {
        // エラーハンドリング
        setError('データの取得に失敗しました: ' + err.message);
        setLoading(false);
      }
    };

    // データ取得関数を実行
    fetchData();
  }, []); // 空の依存配列を指定して初回レンダリング時のみ実行

  // ローディング中の表示
  if (loading) {
    return <div>データを読み込み中...</div>;
  }

  // エラーがある場合の表示
  if (error) {
    return <div className="error">{error}</div>;
  }

  // データが空の場合の表示
  if (forms.length === 0) {
    return <div>データがありません</div>;
  }

  // テーブルの表示
  return (
    <div>
      <h1>Formテーブル一覧</h1>
          <table style={{ borderCollapse: 'collapse', width: '100%' }}>
              <thead>
                  <tr>
                      <th style={{ border: '1px solid black', padding: '8px' }}>id</th>
                      <th style={{ border: '1px solid black', padding: '8px' }}>名前</th>
                      <th style={{ border: '1px solid black', padding: '8px' }}>年齢</th>
                      <th style={{ border: '1px solid black', padding: '8px' }}>出身地</th>
                  </tr>
              </thead>
              <tbody>
                  {forms.map(form => (
                      <tr key={form.form_id}>
                          <td style={{ border: '1px solid black', padding: '8px' }}>{form.form_id}</td>
                          <td style={{ border: '1px solid black', padding: '8px' }}>{form.name}</td>
                          <td style={{ border: '1px solid black', padding: '8px' }}>{form.age}</td>
                          <td style={{ border: '1px solid black', padding: '8px' }}>{form.birthplace || '-'}</td>
                      </tr>
                  ))}
              </tbody>
</table>
    </div>
  );
}

export default FormTable;