<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + React</title>
    
    <!-- React CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
    <div id="react-app"></div>

    <script type="text/babel">
        // 子コンポーネント：propsを受け取って表示
        const Greeting = (props) => {
            return (
                <div>
                    <h1>Hello {props.name}!</h1>
                </div>
            );
        };

        // 親コンポーネント：子コンポーネントにpropsを渡す
        const App = () => {
            return (
                <div>
                    <Greeting name="yanai" />
                </div>
            );
        };

        // アプリケーションのレンダリング
        const rootElement = document.getElementById('react-app');
        const root = ReactDOM.createRoot(rootElement);
        root.render(<App />);
    </script>
</body>
</html>