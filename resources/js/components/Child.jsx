import React from 'react';
import HelloMessage from './HelloMessage';

const Parent = () => {
    const title = "Formテーブル一覧";

    return (
        <div>
            <HelloMessage title={title} />
        </div>
    );
}

export default Parent;