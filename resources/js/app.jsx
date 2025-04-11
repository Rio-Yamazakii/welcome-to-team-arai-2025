import React from "react";
import { createRoot } from "react-dom/client";
import FormTable from "./components/FormTable";

const container = document.getElementById("example");
if (container) {
    const root = createRoot(container);
    root.render(
        <React.StrictMode>
            <FormTable title="Formテーブル一覧"/>
        </React.StrictMode>
    );
}
