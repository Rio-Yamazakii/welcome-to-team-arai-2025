import React from 'react';
import { createRoot } from "react-dom/client";
import HelloReact from './components/HelloReact';
import HelloMessage from './components/HelloMessage';
import FormTable from './components/FormTable';


const container = document.getElementById("root");
if (container) {
    createRoot(container).render(
        <React.StrictMode>
            <FormTable title="Formテーブル一覧" />
        </React.StrictMode>
    );
}
