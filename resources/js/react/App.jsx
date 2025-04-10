import React from 'react';
import { createRoot } from 'react-dom/client';
import Greeting from './components/Greeting';

function App() {
  return (
    <div className="p-6">
      <Greeting title="Formテーブル一覧" />
      
      <div className="mt-6">
        <table className="border-collapse border border-gray-300 w-full">
          <thead>
            <tr className="bg-gray-100">
              <th className="border border-gray-300 p-2">id</th>
              <th className="border border-gray-300 p-2">名前</th>
              <th className="border border-gray-300 p-2">年齢</th>
              <th className="border border-gray-300 p-2">出身地</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td className="border border-gray-300 p-2">1</td>
              <td className="border border-gray-300 p-2">太郎</td>
              <td className="border border-gray-300 p-2">25</td>
              <td className="border border-gray-300 p-2">新潟</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  );
}

// DOMがロードされたときにReactをマウント
if (document.getElementById('react-app')) {
  const root = createRoot(document.getElementById('react-app'));
  root.render(<App />);
}