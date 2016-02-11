function redirect(url) <!-- Redirects to the url -->
{
    window.open(url, '_blank'); <!-- _blank is to open link in another tab -->
}

function shadow(checker) <!-- Insert and takes out shaddow according to the checker input -->
{
    var profilePic = document.getElementsByClassName('pic')[0];
    if(checker) <!-- If mouse is on the image -->
    {
        profilePic.setAttribute("class", "pic picShadow");
    }
    else
    {
        profilePic.setAttribute("class", "pic");
    }
}

function changeTitle(newTitle) <!-- Changes some characteristics of the Title when the mouses goes on it -->
{
    var title = $("#title");
    title.html(newTitle);
    title.css("font-family", "Garamond");
    title.css("font-size", "2.3em");
}
