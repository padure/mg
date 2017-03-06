<div class="content" style="margin-top: 20px; margin-bottom: 15px;">
    <div class="col-md-12 title">
        <div class="row">
            <p class="title-description">
                Title - Deescription the this site MG
            </p>
        </div>
    </div> 
    <div class="content">
        <div class="col-md-8" style="padding-left:0px;">
            <video controls="true" style="width: 100%;" autoplay="" loop="">
                <source src="https://www.youtube.com/watch?v=ZoDZFucZPKQ" type="video/mp4" />
            </video>
            <script>
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
                            var mp4url = "http://www.youtubeinmp4.com/redirect.php?video=";
                            video.src = mp4url + id;
                        }
                    }
                }
            </script>
        </div>
        <div class="col-md-4 contacts-info contacts-margin">
            <div class="col-md-12 title-contacts">
                <ul>
                    @for ($i = 1; $i < 7; $i++)
                    <li>Description {{$i}}</li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="col-md-4 contacts-info" style="margin-top: 10px; padding-top: 15px; padding-bottom: 15px;">
            <div class="col-md-12 form">
                <p class="description-form">Description form</p>
                <input type="text" class="form-control" placeholder="Telefon"/>
                <input type="text" class="form-control" placeholder="Nume, Prenume" />
                <button class="btn btn-primary form-control"><span class="glyphicon glyphicon-earphone"></span> Telefonati</button>
            </div>
        </div>
    </div>
</div>