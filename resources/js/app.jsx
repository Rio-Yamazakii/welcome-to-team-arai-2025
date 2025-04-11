import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import HelloChild from './components/HelloChild';
import FormTable from './components/FormTable';

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(
    <React.StrictMode>
        <FormTable title="Formテーブル一覧" />
    </React.StrictMode>);

//ReactDOM.createRoot(document.getElementById('app')).render(<FormTable />);