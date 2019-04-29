<style type = "text/css">
    #alignButton {
        margin-top: 40vh;
        margin-bottom: 40vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
   
    h2 {
        margin-top: 35vh;
        margin-left: auto;
        margin-right: auto;
    }
    button {
        margin-left: auto;
        margin-right: auto;
        margin-top: 1vh;
        border-radius: 5px;
        color: #dcdcdc;
        background: #e5006c;
        padding: 20px 50px;
        font: inherit;
        font-size: 2em;
        cursor: pointer;
    }
</style>

<article>
    <div id = "alignButton">
        <h2>Get the App</h2>

        <button id = "downloadapp">Download</button>
    </div>

    <script>
        $("#downloadapp").click(function(e) {
            e.preventDefault();

            window.location.href = "KCS.apk";
        });
    </script>
</article>
