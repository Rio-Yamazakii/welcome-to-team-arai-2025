// Parent.jsx
import React from 'react';
import Child from './Child';  // Childコンポーネントをインポート

const Parent = () => {
    const name = "工藤！！";  // 渡したいデータ

    return (
        <div>
            Hello, <Child name={name} />
        </div>
    );
}

export default Parent;
