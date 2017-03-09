<div class="content" style="margin-top: 20px; margin-bottom: 15px;">
    <div class="col-md-12 title">
        <div class="row">
            <p class="title-description">
                @if(!empty($meniu["descrierea"]) && count($meniu["descrierea"])>0)
                    {{$meniu["descrierea"]->valuevariable}}
                @endif
            </p>
        </div>
    </div> 
    <div class="content">
        <div class="col-md-8" style="padding-left:0px;">
            @if(!empty($meniu["video"]) && count($meniu["video"])>0)
                <video controls="true" style="display:none;">
                    <source src="{{$meniu["video"]->valuevariable}}" type="video/mp4" />
                </video>
                <div id="player"></div>
                <script src="{{asset("js/yt.js")}}"></script>
                <script>
                    function video() {
                        videos = document.querySelectorAll("video");
                        for (var i = 0, l = videos.length; i < l; i++) {
                            var video = videos[i];
                            var src = video.src || (function () {
                                var sources = video.querySelectorAll("source");
                                for (var j = 0, sl = sources.length; j < sl; j++) {
                                    var source = sources[j];
                                    var type = source.type;
                                    var isMp4 = type.indexOf("mp4") != -1;
                                    if (isMp4) return source.src;
                                }
                                return null;
                            })();
                            if (src) {
                                var isYoutube = src && src.match(/(?:youtu|youtube)(?:\.com|\.be)\/([\w\W]+)/i);
                                if (isYoutube) {
                                    var id = isYoutube[1].match(/watch\?v=|[\w\W]+/gi);
                                    id = (id.length > 1) ? id.splice(1) : id;
                                    id = id.toString();

                                    var onPlayerReady = function(event) {
                                        event.target.playVideo();  
                                    };
                                    var player = new YT.Player('player', {
                                        videoId : id,
                                        events : {
                                            'onReady' : onPlayerReady
                                        },
                                        playerVars: {
                                            playlist:  id,
                                            loop: 1
                                          }
                                    });
                                    $("#player").width("100%");
                                    $("#player").height($("#videoheight").height());
                                }
                            }
                        }
                    }
                </script>
            @endif
        </div>
        <div class="col-md-4" id="videoheight">
            <div class="content contacts-info contacts-margin">
                <div class="col-md-12 title-contacts">
                    @if(!empty($descriereavideo) && count($descriereavideo)>0)
                        <ul>
                            @foreach($descriereavideo as $i)
                                <li>{{$i->descrierea}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="content contacts-info" style="margin-top: 10px; padding-top: 15px; padding-bottom: 15px;">
                <div class="col-md-12 form">
                    <p class="description-form">
                        @if(!empty($meniu["descriereaformei"]) && count($meniu["descriereaformei"])>0)
                            {{$meniu["descriereaformei"]->valuevariable}}
                        @endif
                    </p>
                    <input type="text" class="form-control" placeholder="Telefon"/>
                    <input type="text" class="form-control" placeholder="Nume, Prenume" />
                    <button class="btn btn-primary form-control"><span class="glyphicon glyphicon-earphone"></span> Telefonati</button>
                </div>
            </div>
        </div>
    </div>
</div>