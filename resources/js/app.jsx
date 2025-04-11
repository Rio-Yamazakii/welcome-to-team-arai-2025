import React from "react";
import { createRoot } from "react-dom/client"; //Reactをブラウザに表示するために必要
import ExampleComponent from "./components/ExampleComponent";
import ParentComponent from "./components/ParentComponent";

const container = document.getElementById("example");
if (container) {
    const root = createRoot(container);
    root.render(<ExampleComponent />);
}

// 親をしてすると子も実行される。子を直接renderしないのは親がpropsを渡せなくなるから
const reactContainer= document.getElementById("form");
if (reactContainer) {
    const root = createRoot(reactContainer);
    root.render(<ParentComponent />);
}
