import React from 'react';
import ReactDOM from 'react-dom/client';
import Welcome from './components/Welcome';  // コンポーネントをインポート
import Forms from './components/Forms';  // #17

// const root = ReactDOM.createRoot(document.getElementById("0014_react"));
// root.render(<Welcome />);  // Welcomeコンポーネントを#0014_reactにレンダリング
const root = ReactDOM.createRoot(document.getElementById("0018_react"));
root.render(<Forms />);

// export default App;