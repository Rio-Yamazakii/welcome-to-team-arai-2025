import React from 'react';
import ReactDOM from 'react-dom/client';
import Hello from './components/HelloReact';
import HelloMessage from './components/HelloMessage';

const App = () => {
    return (
        <div>
            <Hello />
            <HelloMessage name="nakano" />
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);


