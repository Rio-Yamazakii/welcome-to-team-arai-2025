import './bootstrap';
import React from "react";
import { createRoot } from "react-dom/client";
import ExampleComponent from "./components/HelloReact";

const container = document.getElementById("example");
if (container) {
    const root = createRoot(container);
    root.render(<ExampleComponent />);
}