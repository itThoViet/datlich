<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Preview</title>

    <style id="__app__css"></style>
    <script id="__app__js"></script>
    <script>
        window.addEventListener('message', (evt) => {
            // if (evt.origin !== "http://example.com:8080") return; // Fix and uncomment in production
            document.getElementById(`__app__${evt.data.id}`).innerHTML = evt.data.value;
            if (evt.data.id==='js') new Function(evt.data.value)();
        });
    </script>
</head>

<body id="__app__html"></body>

</html>