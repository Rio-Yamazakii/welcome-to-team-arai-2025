import React from 'react';
import Parent from './Parent';

//ここが今表示されている画面（app.jsxから）
const Welcome = () => {
    return (
        <div>
            <Parent />
        </div>
    );
}

export default Welcome;
