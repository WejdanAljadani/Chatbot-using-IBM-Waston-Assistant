<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Style file-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <!-- tilte for this page-->
    <title>Control Panel-Smart Methods</title>
</head>

<body>
    <div class="Container">
        <img id="logo" src="https://www.s-m.com.sa/images/logo.png" />
        <div class="control-panel-div">
            <div class="control-panel-circle">
                <form action="actionpage.php" method="post">

                    <div class="forward">
                        <button name="forwards" class="circle forward-icon" type="submit">
                            <img class="imgs" src="./assets/forwards.png" alt="">
                        </button>
                    </div>
                    <div class="middle">
                        <div class="left">
                            <button name="left" class="circle" type="submit">
                                <img class="imgs" src="./assets/left.png" alt="">
                            </button>
                        </div>

                        <div class="stop">
                            <button name="stop" class="circle stop-icon " type="submit">
                                <img class="imgs" src="./assets/power-button.png" alt="">
                            </button>
                        </div>
                        <div class="right">
                            <button name="right" class=" circle" type="submit">
                                <img class="imgs" src="./assets/right.png" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="backward">
                        <button name="backwards" class="circle backward-icon" type="submit">
                            <img class="imgs" src="./assets/backwards.png" alt="">
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <p class="design-text" style="text-align: center" ;>Designed by Wejdan Aljadani</p>
        </div>

    </div>

    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "c1eba6e9-c2fe-4b8c-bd15-dc4b85990050", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "c336ae0f-aa53-42c7-a7e8-e940d0e9a1c3", // The ID of your service instance.
            onLoad: function(instance) {
                instance.render();
            }
        };
        setTimeout(function() {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>

</body>

</html>