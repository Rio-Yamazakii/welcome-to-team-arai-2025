import React from "react";

// 引数としてpropsを受け取る
const ChildComponent = (props) => {
    // 親からもらったnameを表示
    return <h2>Hello {props.name}!</h2>;
};

export default ChildComponent;