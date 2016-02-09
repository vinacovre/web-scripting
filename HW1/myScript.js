function redirect(url)
{
    window.open(url, '_blank');
}

function shadow(verif)
{
    var profilePic = document.getElementsByClassName('pic')[0];
    if(verif)
    {
        profilePic.setAttribute("class", "pic picShadow");
    }
    else
    {
        profilePic.setAttribute("class", "pic");
    }
}

function changeTitle(newTitle)
{
    var title = $("#title");
    title.html(newTitle);
    title.css("font-family", "Garamond");
    title.css("font-size", "2.3em");
}
