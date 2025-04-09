import React from 'react';
import ReactDOM from 'react-dom/client';
import Greeting from './components/Greeting';

// アプリケーションのエントリーポイント
if (document.getElementById('react-app')) {
    const root = ReactDOM.createRoot(document.getElementById('react-app'));
    root.render(
        <React.StrictMode>
            <Greeting name="yanai" />
        </React.StrictMode>
    );
}