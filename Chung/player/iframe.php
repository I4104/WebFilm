<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://tv.knsea.com/assets/jwplayer/jwplayer-8.26.0.js"></script>
    <script src="https://tv.knsea.com/assets/jwplayer/hls.min.js"></script>
    <script src="https://tv.knsea.com/assets/jwplayer/jwplayer.hlsjs.min.js"></script>
    <script>jwplayer.key="9p36CV6QmJmdYet7lLcp40o+0GE3J0gMCjTZwO9/mNM=";</script>
</head>
<body>
    <style>
        #player {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }
        .jwplayer.jw-flag-rightclick-open {
            overflow: hidden !important;
        }
        .jw-title {
            padding-top: 0px;
        }
        .jwplayer.jw-skin-netflix .jw-title-primary {
            text-transform: initial;
        }
    </style>
    <div id="player"></div>

    <script>
    const playerInstance = jwplayer("player").setup({
        controls: true,
        sharing: false,
        playbackRateControls: true,
        displaytitle: true,
        displaydescription: true,
        abouttext: "Donate Ủng Hộ",
        aboutlink: "https://www.facebook.com/ltn.igl/",
    
        skin: {
            url:"https://tv.knsea.com/assets/skin/netflix.css?v=<?=time();?>",
            name: "netflix"
        },
        
        /*logo: {
            file: "https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg",
            link: "",
            hide: false,
            position: "top-right"
        },*/
    
        captions: {
            color: "#FFF",
            fontSize: 14,
            backgroundOpacity: 0,
            edgeStyle: "raised"
        },
    
        playlist: [
            {
                title: "Truyền Thuyết Về Ác Nhân",
                description: "Bạn đang xem",
                image: "https://img.hiephanhthienha.com/uploads/movies/truyen-thuyet-ve-ac-nhan-poster.jpg",
                sources: [
                    {
                    file:
                        "https://1080.hdphimonline.com/20220226/495_9c9ad337/index.m3u8",
                        label: "1080p",
                        default: true
                    }
                ],
                captions: [
                    {
                        file: "https://raw.githubusercontent.com/iPingOi/jwplayer/main/%5BEnglish%5D%20Sprite%20Fright%20-%20Blender%20Open%20Movie.srt",
                        label: "Việt Sub",
                        kind: "captions",
                        default: true
                    }
                ],
            }
        ],
    });
    
    playerInstance.on("ready", function () {
        /*const buttonId = "download-video-button";
        const iconPath = "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTMgMTloMTh2Mkgzdi0yem0xMC01LjgyOEwxOS4wNzEgNy4xbDEuNDE0IDEuNDE0TDEyIDE3IDMuNTE1IDguNTE1IDQuOTI5IDcuMSAxMSAxMy4xN1YyaDJ2MTEuMTcyeiIgZmlsbD0icmdiYSgyNDcsMjQ3LDI0NywxKSIvPjwvc3ZnPg==";
        const tooltipText = "Download Video";
    
        // Call the player's `addButton` API method to add the custom button
        playerInstance.addButton(iconPath, tooltipText, buttonClickAction, buttonId);
    
        // This function is executed when the button is clicked
        function buttonClickAction() {
            const playlistItem = playerInstance.getPlaylistItem();
            const anchor = document.createElement("a");
            const fileUrl = playlistItem.file;
            anchor.setAttribute("href", fileUrl);
            const downloadName = playlistItem.file.split("/").pop();
            anchor.setAttribute("download", downloadName);
            anchor.style.display = "none";
            document.body.appendChild(anchor);
            anchor.click();
            document.body.removeChild(anchor);
        }*/
    
        // Move the timeslider in-line with other controls
        const playerContainer = playerInstance.getContainer();
        const buttonContainer = playerContainer.querySelector(".jw-button-container");
        const spacer = buttonContainer.querySelector(".jw-spacer");
        const timeSlider = playerContainer.querySelector(".jw-slider-time");
        buttonContainer.replaceChild(timeSlider, spacer);
    
        // Detect adblock
        playerInstance.on("adBlock", () => {
            const modal = document.querySelector("div.modal");
            modal.style.display = "flex";
            
            document
            .getElementById("close")
            .addEventListener("click", () => location.reload());
        });
    
      // Forward 10 seconds
        const rewindContainer = playerContainer.querySelector(
            ".jw-display-icon-rewind"
        );
        const forwardContainer = rewindContainer.cloneNode(true);
        const forwardDisplayButton = forwardContainer.querySelector(
            ".jw-icon-rewind"
        );
        forwardDisplayButton.style.transform = "scaleX(-1)";
        forwardDisplayButton.ariaLabel = "Forward 10 Seconds";
        const nextContainer = playerContainer.querySelector(".jw-display-icon-next");
        nextContainer.parentNode.insertBefore(forwardContainer, nextContainer);
    
        // control bar icon
        playerContainer.querySelector(".jw-display-icon-next").style.display = "none"; // hide next button
        const rewindControlBarButton = buttonContainer.querySelector(
            ".jw-icon-rewind"
        );
        const forwardControlBarButton = rewindControlBarButton.cloneNode(true);
            forwardControlBarButton.style.transform = "scaleX(-1)";
            forwardControlBarButton.ariaLabel = "Forward 10 Seconds";
            rewindControlBarButton.parentNode.insertBefore(
            forwardControlBarButton,
            rewindControlBarButton.nextElementSibling
        );
    
        // add onclick handlers
        [forwardDisplayButton, forwardControlBarButton].forEach((button) => {
            button.onclick = () => {
                playerInstance.seek(playerInstance.getPosition() + 10);
            };
        });
    });
    </script>
</body>
</html>