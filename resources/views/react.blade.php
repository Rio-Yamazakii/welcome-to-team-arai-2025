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

    <!-- インラインスクリプトでReactコンポーネントを定義 -->
    <script type="text/babel">
        const Hello = () => {
            return (
                <div>
                    <h1>Hello React!</h1>
                </div>
            );
        };

        const rootElement = document.getElementById('react-app');
        const root = ReactDOM.createRoot(rootElement);
        root.render(<Hello />);
    </script>
</body>
</html>