import React from 'react';
import ReactDOM from 'react-dom/client';
import Welcome from './components/Welcome';  // コンポーネントをインポート

const root = ReactDOM.createRoot(document.getElementById("0014_react"));
root.render(<Welcome />);  // Welcomeコンポーネントを#0014_reactにレンダリング

export default App;