import React from 'react';
import ReactDOM from 'react-dom/client';
import Hello from './components/HelloReact';

const rootElement = document.getElementById('example');

if (rootElement) {
    ReactDOM.createRoot(rootElement).render(
        <React.StrictMode>
            <Hello />
        </React.StrictMode>
    );
}

