import React from "react"; //Reactのインポート
import ChildComponent from "./ChildComponent"; //子コンポーネントのインポート

//ParentComponent関数を作成
const ParentComponent = () => {
    // return内でHTMLにJSXを返す
    return (
        <div>
            {/* 子コンポーネントにtitle="Formテーブル一覧"をprops として渡す */}
            <ChildComponent title="Formテーブル一覧" />
        </div>
    );
};

// このコンポーネントをほかのファイルでも使えるようにする(importできる)
export default ParentComponent;