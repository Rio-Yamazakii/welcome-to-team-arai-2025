import React from 'react';
import { createRoot } from 'react-dom/client';
import FormTable from './components/FormTable';

function App() {
  return (
    <div className="container">
      <FormTable />
    </div>
  );
}

// DOMがロードされたときにReactをマウント
if (document.getElementById('react-app')) {
  const root = createRoot(document.getElementById('react-app'));
  root.render(<App />);
}