function displayUserPastLikes()
{
    xhr = new XMLHttpRequest();
    var currentUser = getCookie('current_user');
    xhr.open('GET', 'http://soundpark.fm/model/get_user_likes.php?currentUser='+currentUser);
    xhr.onreadystatechange = function() 
    { // On gère ici une requête asynchrone
        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur
            //alert('bite');
            var trackIds2 = document.getElementsByClassName('trackIds');
            var songTable2 = [];

            var str = xhr.responseText;
            //alert(str);        
            var userLikesTrackIdsTable = str.split("-");

            for(var i = 0 ; i<trackIds.length ; i++)
            {
                songTable2[i] = trackIds2[i].innerHTML;

                for(var j = 0 ; j<userLikesTrackIdsTable.length ; j++)
                {
                    if(songTable2[i] == userLikesTrackIdsTable[j])
                    {
                        var k = i + 1;
                        var likeStamp = document.getElementById("like_stamp_left"+k);
                        likeStamp.style.display="block";
                    }
                }
            }
        }
    };
    xhr.send(null); // La requête est prête, on envoie tout !
}

function displayUserPastDislikes()
{
    xhr2 = new XMLHttpRequest();
    var currentUser = getCookie('current_user');
    xhr2.open('GET', 'http://soundpark.fm/model/get_user_dislikes.php?currentUser='+currentUser);
    xhr2.onreadystatechange = function() 
    { // On gère ici une requête asynchrone
        if(xhr2.readyState == 4 && xhr2.status == 200) 
        { // Si le fichier est chargé sans erreur

            var trackIds2 = document.getElementsByClassName('trackIds');
            var songTable2 = [];

            var str = xhr2.responseText;
            //alert(str);
            
            var userDislikesTrackIdsTable = str.split("-");

            for(var i = 0 ; i<trackIds.length ; i++)
            {
                songTable2[i] = trackIds2[i].innerHTML;

                for(var j = 0 ; j<userDislikesTrackIdsTable.length ; j++)
                {
                    if(songTable2[i] == userDislikesTrackIdsTable[j])
                    {
                        var k = i + 1;
                        var dislikeStamp = document.getElementById("dislike_stamp_left"+k);
                        dislikeStamp.style.display="block";
                    }
                }
            }
        }
    };
    xhr2.send(null); // La requête est prête, on envoie tout !
}
