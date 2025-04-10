import React from 'react';
import ReactDOM from 'react-dom/client';
import ExampleComponent from './components/HelloReact';

const rootElement = document.getElementById('example');

if (rootElement) {
    ReactDOM.createRoot(rootElement).render(
        <React.StrictMode>
            <ExampleComponent />
        </React.StrictMode>
    );
}
