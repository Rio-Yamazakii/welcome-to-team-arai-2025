import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import HelloChild from './components/HelloChild';

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(
            <React.StrictMode>
                <HelloChild title="Formテーブル一覧" />
            </React.StrictMode>);