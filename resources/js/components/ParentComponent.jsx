import React from "react"; //Reactのインポート
import ChildComponent from "./ChildComponent"; //子コンポーネントのインポート

//ParentComponent関数を作成
const ParentComponent = () => {
    // return内でHTMLにJSXを返す
    return (
        <div>
            {/* 子コンポーネントにname="otsuka"をprops として渡す */}
            <ChildComponent name="Otsuka" />
        </div>
    );
};

// このコンポーネントをほかのファイルでも使えるようにする(importできる)
export default ParentComponent;