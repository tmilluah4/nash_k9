
function setActive()
{
    aObj2 =   document.getElementById('navSidebar').getElementsByTagName('a');
    for(i=0;i<aObj2.length;i++)
    {
        if(document.location.href.indexOf(aObj2[i].href)>=0)
        {
            aObj2[i].className='active';
        }
    }
}
window.onload = setActive;