import React from 'react';
import { createRoot } from 'react-dom/client';
import Greeting from './components/Greeting';

function App() {
  return (
    <div>
      <Greeting name="yanai" />
    </div>
  );
}

// DOMがロードされたときにReactをマウント
if (document.getElementById('react-app')) {
  const root = createRoot(document.getElementById('react-app'));
  root.render(<App />);
}