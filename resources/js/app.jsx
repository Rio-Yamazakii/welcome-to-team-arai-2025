import React from 'react';
import '../css/app.css';
import ReactDOM from 'react-dom/client';
import Hello from './components/HelloReact';
import HelloMessage from './components/HelloMessage';
import TableDisplay from './components/TableDisplay';

const App = () => {
    useEffect(() => {
        fetch('/api/forms')
            .then(res => res.json())
            .then(data => {
                console.log(data);
            });
    }, []);
    return (
        <div>
            <Hello />
            <HelloMessage name="nakano" />
            <TableDisplay title="Formテーブル一覧" />
        </div>

    );
};

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);