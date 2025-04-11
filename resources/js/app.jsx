import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import HelloChild from './components/HelloChild';

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<HelloChild name="Akihiro" />);