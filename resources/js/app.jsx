import React from 'react';
import { createRoot } from "react-dom/client";
import HelloReact from './components/HelloReact';


const container = document.getElementById("root");
if (container) {
    createRoot(container).render(
        <React.StrictMode>
            <HelloReact />
        </React.StrictMode>
    );
};
