import React from 'react';
import ReactDOM from 'react-dom/client';
import Hello from './components/Hello';

// アプリケーションのエントリーポイント
if (document.getElementById('react-app')) {
    const root = ReactDOM.createRoot(document.getElementById('react-app'));
    root.render(
        <React.StrictMode>
            <Hello />
        </React.StrictMode>
    );
}