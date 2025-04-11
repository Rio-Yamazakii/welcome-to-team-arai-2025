import React from "react";

// 引数としてpropsを受け取る
const ChildComponent = (props) => {
    // 親からもらったtitleを表示
    //HTMLの場合はclassだけでよいが、Reactの場合はclassNameと記述する
    return <h2 className="text-3xl font-bold pb-8">{props.title}</h2>;
};

export default ChildComponent;