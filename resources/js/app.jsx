import React from 'react';
import { createRoot } from "react-dom/client";
import HelloReact from './components/HelloReact';
import HelloMessage from './components/HelloMessage';

const container = document.getElementById("root");
if (container) {
    createRoot(container).render(
        <React.StrictMode>
            <HelloMessage name="kurasawa" />
        </React.StrictMode>
    );
}
