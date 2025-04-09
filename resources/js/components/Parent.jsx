// Parent.jsx
import React from 'react';
import Child from './Child';  // Childコンポーネントをインポート

const Parent = () => {
    const title = "Formテーブル一覧";  // 渡したいデータ

    return (
        <div>
            <Child title={title} />
        </div>
    );
}

export default Parent;
