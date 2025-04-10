import React from 'react';

export default function Greeting(props) {
  return (
    <div>
      <h1 className="text-xl font-bold">{props.title}</h1>
    </div>
  );
}